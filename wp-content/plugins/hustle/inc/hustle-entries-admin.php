<?php
/**
 * Class Hustle_Entries_Admin
 * Handle the email lists.
 *
 * @since 4.0
 *
 */
class Hustle_Entries_Admin {

	/**
	 * @since 4.0
	 * @var Opt_In $_hustle
	 */
	private $_hustle;

	/**
	 * Merged default parameter with $_REQUEST
	 *
	 * @since 4.0
	 * @var array
	 */
	private $screen_params = array();

	/**
	 * Current module model
	 *
	 * @since 4.0
	 * @var null|Hustle_Module_Model
	 */
	private $module = null;

	//=================

	// $module

	/**
	 * Current module_id
	 * @since 4.0
	 * @var int
	 */
	protected $module_id = 0;

	/**
	 * Entries array.
	 *
	 * @since 4.0
	 * @var string
	 */
	private $entries = array();

	/**
	 * Page number
	 *
	 * @since 4.0
	 * @var int
	 */
	protected $page_number = 1;

	/**
	 * Total Entries
	 *
	 * @since 4.0
	 * @var int
	 */
	protected $total_entries = 0;

	/**
	 * Total filterd Entries
	 *
	 * @since 4.0
	 * @var int
	 */
	protected $filtered_total_entries = 0;

	/**
	 * @since 4.0
	 * @var Hustle_Provider_Abstract[]
	 */
	private static $registered_addons = null;

	/**
	 * Filters to be used
	 *
	 * [key=>value]
	 * ['search'=>'search term']
	 *
	 * @since 4.0
	 * @var array
	 */
	public $filters = array();

	/**
	 * Order to be used
	 *
	 * [key=>order]
	 * ['entry_date' => 'ASC']
	 *
	 * @since 4.0
	 * @var array
	 */
	public $order = array();

	/**
	 * Nested Mappers
	 *
	 * @since 4.0
	 * @var array
	 */
	protected $fields_mappers = array();
	//=================

	/**
	 * Hustle_Entries_Admin constructor.
	 *
	 * @since 4.0
	 * @param Opt_In $hustle
	 */
	public function __construct( Opt_In $hustle ) {
		$this->_hustle = $hustle;
		add_action( 'admin_menu', array( $this, 'register_menu' ), 99 );
		add_action( 'current_screen', array( $this, 'set_proper_current_screen' ) );

		add_action( 'load-hustle-pro_page_hustle_entries', array( $this, 'before_render' ) );
		add_action( 'load-hustle_page_hustle_entries', array( $this, 'before_render' ) );
	}

	/**
	 * Register "Email lists" menu page
	 *
	 * @since 4.0
	 */
	public function register_menu() {
		add_submenu_page( 'hustle', __( 'Hustle Email Lists', Opt_In::TEXT_DOMAIN ) , __( 'Email Lists', Opt_In::TEXT_DOMAIN ) , 'hustle_access_emails', 'hustle_entries',  array( $this, 'render_page' ) );
	}


	/**
	 * Renders Hustle Email Lists page
	 *
	 * @since 4.0
	 */
	public function render_page() {
		$accessibility = Hustle_Settings_Admin::get_hustle_settings( 'accessibility' );
		$types = $this->get_module_types();
		$module = $this->get_module_model();

		$filter_types = array(
			'search_email',
			'order_by',
			'date_range',
		);
		$is_filtered = false;
		foreach ( $filter_types as $type ) {
			$is_filtered = $is_filtered || filter_input(INPUT_GET, $type );
		}

		$this->_hustle->render(
			'admin/entries',
			array(
				'admin'              => $this,
				'module'             => $module,
				'entries'            => $this->get_entries(),
				'global_entries'     => Hustle_Entry_Model::global_count_entries(),
				'module_name'        => !empty( $module->module_type ) && isset( $types[ $module->module_type ] ) ? $types[ $module->module_type ] : '',
				'is_module_selected' => (bool) $this->get_current_module_id(),
				'accessibility'      => $accessibility,
				'is_filtered'        => $is_filtered,
			)
		);
	}

	/**
	 *
	 * @since 4.0
	 */
	public function set_proper_current_screen( $current ) {
		global $current_screen;
		if ( ! Opt_In_Utils::_is_free() ) {
			$current_screen->id = Opt_In_Utils::clean_current_screen( $current_screen->id );
		}
	}

	/**
	 * Populating the current page parameters
	 *
	 * @since 1.0.5
	 */
	public function populate_screen_params() {
		$screen_params = array(
			'module_type' => 'popup',
			'module_id'   => 0,
		);

		$this->screen_params = array_merge( $screen_params, $_REQUEST );//WPCS CSRF ok.
	}

	/**
	 * Executed Action before rendering the page.
	 *
	 * @since 4.0
	 */
	public function before_render() {
		$this->populate_screen_params();
		//$this->populate_modules();
		$this->prepare_entries_page();
		//$this->enqueue_entries_scripts();
		$this->export();
	}

	/**
	 * Get the module types for the entries page.
	 * @todo make the types dynamic.
	 *
	 * @since 4.0
	 *
	 * @return array
	 */
	public function get_module_types() {
		$module_types = array(
			'popup' => __( 'Pop-up', Opt_In::TEXT_DOMAIN ),
			'embedded' => __( 'Embed', Opt_In::TEXT_DOMAIN ),
			'slidein' => __( 'Slide-in', Opt_In::TEXT_DOMAIN ),
		);

		return $module_types;
	}

	/**
	 * Prepare entries
	 *
	 * @since 4.0
	 */
	private function prepare_entries_page() {
		$this->module = $this->get_module_model();
		// Module not found
		if ( ! $this->module ) {
			// if module_id available remove it from request, and redirect
			if ( $this->get_current_module_id() ) {
				$url = remove_query_arg( 'module_id' );
				if ( wp_safe_redirect( $url ) ) {
					exit;
				}
			}
		} else {
			// as page's before_render()
			$this->prepare_page();
		}
	}

	/**
	 * Return the html for the module switcher.
	 *
	 * @since 4.0
	 *
	 * @return string
	 */
	public function render_module_switcher() {

		$modules = $this->get_modules();

		$html = '<select name="module_id" class="sui-select sui-select-sm sui-select-inline">';

		// TODO: get the module types from the right place.
		$module_types = $this->get_module_types();
		$current_type = $this->get_current_module_type();
		$empty_option = isset( $module_types[ $current_type ] ) ? $module_types[ $current_type ] : $module_types['popup'];

		$html .= '<option value="" ' . selected( 0, $this->get_current_module_id(), false ) . '>'. __( 'Choose', Opt_In::TEXT_DOMAIN ) . ' ' . $empty_option . '</option>';

		foreach ( $modules as $module ) {

			$title = ! empty( $module->module_name ) ? $module->module_name : $module->module_id;
			$html  .= '<option value="' . $module->module_id . '" ' . selected( $module->module_id, $this->get_current_module_id(), false ) . '>' . $title . '</option>';
		}

		$html .= '</select>';

		return $html;
	}

	/**
	 * Return the modules of the current type.
	 *
	 * @since 4.0
	 *
	 * @return array Hustle_Module_Model[]
	 */
	public function get_modules() {
		$module_types = $this->get_module_types();
		$current_type = $this->get_current_module_type();
		$module_type = isset( $module_types[ $current_type ] ) ? $current_type : 'popup';
		$args = array(
			'module_type' => $module_type,
			'module_mode' => 'optin',
		);
		$modules = Hustle_Module_Collection::instance()->get_all( null, $args );

		return $modules;
	}

	/**
	 * Get module model if the requested module_id is available and matches module_type
	 *
	 * @since 4.0
	 *
	 * @return bool|Hustle_Module_Model|null
	 */
	public function get_module_model() {

		if ( $this->get_current_module_id() ) {

			$module = Hustle_Module_Model::instance()->get( $this->get_current_module_id() );

			if ( is_wp_error( $module ) ) {
				return null;
			}

			if ( ! $module instanceof Hustle_Module_Model ) {
				return null;
			}

			if ( $module->module_type !== $this->get_current_module_type() ) {
				return null;
			}

			return $module;
		}

		return null;
	}

	/**
	 * Get current module type
	 *
	 * @since 4.0
	 *
	 * @return mixed
	 */
	public function get_current_module_type() {
		return $this->screen_params['module_type'];
	}

	/**
	 * Get current module id
	 *
	 * @since 4.0
	 *
	 * @return mixed
	 */
	public function get_current_module_id() {
		return $this->screen_params['module_id'];
	}

	//====================


	/**
	 * Get Entries
	 *
	 * @since 4.0
	 * @return array
	 */
	public function get_entries() {
		return $this->entries;
	}

	/**
	 * Get Page Number
	 *
	 * @since 4.0
	 * @return int
	 */
	public function get_page_number() {
		return $this->page_number;
	}

	/**
	 * Get Per Page
	 *
	 * @since 1.0
	 * @return int
	 */
	public function get_per_page() {
		return $this->per_page;
	}

	/**
	 * The total filtered entries
	 *
	 * @since 4.0
	 * @return int
	 */
	public function filtered_total_entries() {
		return $this->filtered_total_entries;
	}

	// admin_page_entries as 'before_render'
	private function prepare_page() {

		$this->parse_filters();
		$this->parse_order();

		$this->per_page = apply_filters( 'hustle_email_list_page_size', 10 );
		$pagenum = isset( $_REQUEST['paged'] ) ? absint( $_REQUEST['paged'] ) : 0; // WPCS: CSRF OK
		$this->page_number = max( 1, $pagenum );

		$module_id = (int) $this->module_id;
		$module_model = $this->module;
		/**
		 * Fires on custom form page entries render before request and result processed
		 * @since 4.0
		 */
		do_action( 'hustle_admin_page_entries', $module_id, $module_model, $pagenum );

		$this->process_request();
		$this->prepare_results();
	}

	/**
	 * Process the current request.
	 * @todo handle this without ajax.
	 * @since 4.0
	 */
	private function process_request() {

		// TODO: check if the user has enough permissions to perform this action.

		// Start modifying data.
		if ( ! isset( $_REQUEST['hustle_nonce'] ) ) {
			return;
		}

		$nonce = $_REQUEST['hustle_nonce']; // WPCS: CSRF OK
		if ( ! wp_verify_nonce( $nonce, 'hustle_entries_request' ) ) {
			return;
		}

		$action = '';
		if ( isset( $_REQUEST['hustle_action'] ) || isset( $_REQUEST['hustle_action_bottom'] ) ) {
			if ( isset( $_REQUEST['hustle_action'] ) && ! empty( $_REQUEST['hustle_action'] ) ) {
				$action = $_REQUEST['hustle_action'];
			} elseif ( isset( $_REQUEST['hustle_action_bottom'] ) ) {
				$action = $_REQUEST['hustle_action_bottom'];
			}
		}

		switch ( $action ) {
			case 'delete':
				$entry_id = filter_var( $_REQUEST['id'], FILTER_VALIDATE_INT );

				if ( ! $entry_id ) {
					return;
				}
				Hustle_Entry_Model::delete_by_entry( $this->module_id, $entry_id );
				break;

			case 'delete-all':
				$entries = $_REQUEST['ids'];
				Hustle_Entry_Model::delete_by_entries( $this->module_id, $entries );
				break;
			
			default:
				return;
		}

	}

	/**
	 * Prepare the entries to be shown.
	 *
	 * @since 4.0
	 */
	private function prepare_results() {

		if ( is_object( $this->module ) ) {
			$paged = $this->page_number;
			$per_page = $this->per_page;
			$offset = ( $paged - 1 ) * $per_page;

			$this->module_id = $this->module->module_id;
			$this->total_entries = Hustle_Entry_Model::count_entries( $this->module_id );

			$args = array(
				'module_id'  => $this->module_id,
				'per_page' => $per_page,
				'offset'   => $offset,
				'order_by' => 'entries.date_created',
				'order'    => 'ASC',
			);

			$args = wp_parse_args( $this->filters, $args );
			$args = wp_parse_args( $this->order, $args );

			$count = 0;

			$this->entries = Hustle_Entry_Model::query_entries( $args, $count );
			$this->filtered_total_entries = $count;
		}
	}

	/**
	 * @return array
	 */
	public function entries_iterator() {
		/**
		 * @example
		 * {
		 *  id => 'ENTRY_ID'
		 *  summary = [
		 *      'num_fields_left' => true/false,
		 *      'items' => [
		 *          [
		 *              'colspan' => 2/...,
		 *              'value' => '----',
		 *          ]
		 *          [
		 *              'colspan' => 2/...
		 *              value' => '----',
		 *          ]
		 *      ],
		 *  ],
		 *  detail = [
		 *      'colspan' => '',
		 *      'items' => [
		 *          [
		 *              'label' => '----',
		 *              'value' => '-----'
		 *              'sub_entries' => [
		 *                  [
		 *                      'label' => '----',
		 *                      'value' => '-----'
		 *                  ]
		 *              ]
		 *          ]
		 *          [
		 *              'label' => '----',
		 *              'value' => '-----'
		 *          ]
		 *      ],
		 * ]
		 * }
		 */
		$entries_iterator = array();

		$total_colspan = 5; // Colspan for ID + Date Submitted + Active Integrations + Email + Accordion chevron.
		$fields_mappers         = $this->get_fields_mappers();

		// Start from 4, since first four are ID, Date, Active Integrations, and Email.
		$fields_left = count( $fields_mappers ) - 4;

		// All headers including ID + Date, start from 0 and max is 4.
		$headers = array_slice( $fields_mappers, 0, 4 );

		$numerator_id = $this->total_entries;
		if ( $this->page_number > 1 ) {
			$numerator_id = $this->total_entries - ( ( $this->page_number - 1 ) * $this->per_page );
		}

		foreach ( $this->entries as $entry ) {
			/**@var Hustle_Entry_Model $entry */

			//create placeholder
			$iterator = array(
				'id'       => $numerator_id,
				'entry_id' => $entry->entry_id,
				'summary'  => array(),
				'detail'   => array(),
				'addons' => array(),
			);

			$iterator['summary']['num_fields_left'] = $fields_left;
			$iterator['summary']['items'] = array();

			$iterator['detail']['colspan'] = $total_colspan;
			$iterator['detail']['items']   = array();

			// Build array for summary row
			$summary_items = array();
			foreach ( $headers as $header ) {

				$colspan = 2;
				$class = '';

				if ( isset( $header['type'] ) ) {

					if ( 'entry_entry_id' === $header['type'] ) {
						$summary_items[] = array(
							'colspan' => 1,
							'value'   => $numerator_id,
						);
						continue;

					} elseif ( 'entry_time_created' === $header['type'] ) {
						$colspan = 3;
						$class = 'hui-column-date';

					} elseif ( 'entry_integrations' === $header['type'] ) {
						$class = 'hui-column-apps';

					}
				}

				$value = $this->get_entry_field_value( $entry, $header, '', false, 100 );

				$summary_items[] = array(
					'colspan' => $colspan,
					'value'   => $value,
					'class' => $class,
				);
			}

			// Build array for -content row
			$detail_items = array();
			foreach ( $fields_mappers as $mapper ) {
				// Skip entry id and Active integrations
				if ( isset( $mapper['type'] ) && ( 'entry_entry_id' === $mapper['type'] || 'entry_integrations' === $mapper['type'] ) ) {
					continue;
				}

				$label       = $mapper['label'];
				$value       = $this->get_entry_field_value( $entry, $mapper, '', true );
				$sub_entries = array();

				$detail_items[] = array(
					'label'       => $label,
					'value'       => $value,
					'sub_entries' => $sub_entries,
				);

			}

			//Additional render for addons
			$addons_detail_items = $this->attach_addon_on_render_entry( $entry );
			//$detail_items        = array_merge( $detail_items, $addons_detail_items );

			$addons = array();
			foreach ( $addons_detail_items as $provider_meta ) {
				foreach ( $provider_meta as $meta ) {
					$addons[] = array(
						'summary' => array(
							'name' => $meta['name'],
							'icon' => $meta['icon'],
							'data_sent' => $meta['data_sent'],
						),
						'detail' => $meta['sub_entries'],
					);
				}
			}

			$iterator['summary']['items'] = $summary_items;
			$iterator['detail']['items']  = $detail_items;

			$iterator['addons'] = $addons;

			$entries_iterator[] = $iterator;
			$numerator_id --;
		}

		return $entries_iterator;
	}


	/**
	 * Get Fields Mappers based on current state of form
	 *
	 * @return array
	 */
	public function get_fields_mappers() {
		if ( empty( $this->fields_mappers ) ) {
			$this->fields_mappers = $this->build_fields_mappers();
		}

		return $this->fields_mappers;
	}


	private function build_fields_mappers() {
		$module = $this->module;
		$fields = $module->get_form_fields();
		$ignored_field_types = Hustle_Entry_Model::ignored_fields();

		$mappers = array(
			array(
				// read model's property
				'property' => 'entry_id', // must be on entries
				'label'    => __( 'ID', Opt_In::TEXT_DOMAIN ),
				'type'     => 'entry_entry_id',
			),
			array(
				// read model's property
				'property' => 'time_created', // must be on entries
				'label'    => __( 'Date Submitted', Opt_In::TEXT_DOMAIN ),
				'type'     => 'entry_time_created',
				'class'    => 'hui-column-date',
			),
			array(
				// read entry meta
				'meta_key' => 'active_integrations',
				'label'    => __( 'Active Integrations', Opt_In::TEXT_DOMAIN ),
				'type'     => 'entry_integrations',
				'class'	   => 'hui-column-apps',
			),
			array(
				// required meta key
				'meta_key' => 'email', // must be on entries
				'label'    => __( 'Email', Opt_In::TEXT_DOMAIN ),
				'type'     => 'email',
			),
		);

		foreach ( $fields as $field ) {

			$field_type = $field['type'];

			if ( 'email' === $field['name'] || in_array( $field_type, $ignored_field_types, true ) ) {
				continue;
			}

			//if ( ! empty( $visible_fields ) ) {
			//	if ( ! in_array( $field->slug, $visible_fields, true ) ) {
			//		continue;
			//	}
			//}

			// base mapper for every field
			$mapper             = array();
			$mapper['meta_key'] = $field['name'];
			$mapper['label']    = $field['label'];
			$mapper['type']     = $field_type;

			if ( ! empty( $mapper ) ) {
				$mappers[] = $mapper;
			}
		}

		return $mappers;
	}

	/**
	 * Get entry field value helper
	 *
	 * @param Hustle_Entry_Model $entry
	 * @param                             $mapper
	 * @param string                      $sub_meta_key
	 * @param bool                        $allow_html
	 * @param int                         $truncate
	 *
	 * @return string
	 */
	private function get_entry_field_value( $entry, $mapper, $sub_meta_key = '', $allow_html = false, $truncate = PHP_INT_MAX ) {
		/** @var Hustle_Entry_Model $entry */
		if ( isset( $mapper['property'] ) ) {
			if ( property_exists( $entry, $mapper['property'] ) ) {
				$property = $mapper['property'];
				// casting property to string
				if ( is_array( $entry->$property ) ) {
					$value = implode( ', ', $entry->$property );
				} else {
					$value = (string) $entry->$property;
				}
			} else {
				$value = '';
			}
		} else {
			$meta_value = $entry->get_meta( $mapper['meta_key'], '' );
			// meta_key based
			$value = Hustle_Entry_Model::meta_value_to_string( $mapper['type'], $meta_value, $allow_html, $truncate );

		}

		return $value;
	}

	/**
	 * Executor for adding additional items on entry page.
	 *
	 * @see Hustle_Provider_Form_Hooks_Abstract::on_render_entry()
	 * @since 4.0
	 *
	 * @param Hustle_Entry_Model $entry_model
	 * @return array
	 */
	private function attach_addon_on_render_entry( Hustle_Entry_Model $entry_model ) {
		$additonal_items = array();
		// Find all registered addons so history can be shown even for deactivated addons.
		$registered_addons = $this->get_registered_addons();

		foreach ( $registered_addons as $registered_addon ) {
			try {
				$form_hooks = $registered_addon->get_addon_form_hooks( $this->module_id );
				$meta_data  = Hustle_Provider_Utils::find_addon_meta_data_from_entry_model( $registered_addon, $entry_model );

				$addon_additional_items = $form_hooks->on_render_entry( $entry_model, $meta_data );
				$addon_additional_items = self::format_addon_additional_items( $addon_additional_items );

				//$additonal_items = array_merge( $additonal_items, $addon_additional_items );
				$additonal_items[] = $addon_additional_items;
			} catch ( Exception $e ) {
				Hustle_Api_Utils::maybe_log( $registered_addon->get_slug(), 'failed to on_render_entry', $e->getMessage() );
			}
		}

		return $additonal_items;
	}


	/**
	 * Ensuring additional items for addons meet the entries data requirements.
	 * Format used:
	 * - label
	 * - value
	 * - subentries[]
	 *      - label
	 *      - value
	 *
	 * @since 4.0
	 *
	 * @param  array $addon_additional_items
	 * @return mixed
	 */
	private static function format_addon_additional_items( $addon_additional_items ) {
		//to `name` and `value` basis
		$formatted_additional_items = array();

		if ( ! is_array( $addon_additional_items ) ) {
			return array();
		}

		foreach ( $addon_additional_items as $additional_item ) {
			if ( ! isset( $additional_item['name'] ) || ! isset( $additional_item['data_sent'] ) || ! isset( $additional_item['sub_entries'] ) ) {
				continue;
			}
			// Make sure label and value exist, without it, it will display an empty row, so leave it.
			//if ( ! isset( $additional_item['label'] ) || ! isset( $additional_item['value'] ) ) {
			//	continue;
			//}

			$sub_entries = array();

			// Check if sub_entries are available.
			if ( isset( $additional_item['sub_entries'] ) && is_array( $additional_item['sub_entries'] ) ) {
				foreach ( $additional_item['sub_entries'] as $sub_entry ) {
					// Make sure label and value exist, without it, it will display empty row.
					if ( ! isset( $sub_entry['label'] ) || ! isset( $sub_entry['value'] ) ) {
						continue;
					}
					$sub_entries[] = array(
						'label' => $sub_entry['label'],
						'value' => $sub_entry['value'],
					);
				}
			}

			//$formatted_additional_items[] = array(
			//	'label'       => $additional_item['label'],
			//	'value'       => $additional_item['value'],
			//	'sub_entries' => $sub_entries,
			//);

			$formatted_additional_items[] = array(
				'name'       => $additional_item['name'],
				'icon' => $additional_item['icon'],
				'data_sent'       => $additional_item['data_sent'],
				'sub_entries' => $sub_entries,
			);
		}

		return $formatted_additional_items;
	}

	/**
	 * Get Globally registered Addons, avoid overhead for checking registered addons many times
	 *
	 * @since 4.0
	 *
	 * @return array|Hustle_Provider_Abstract[]
	 */
	public function get_registered_addons() {
		if ( empty( self::$registered_addons ) ) {
			self::$registered_addons = array();

			$registered_addons = Hustle_Provider_Utils::get_registered_addons();
			foreach ( $registered_addons as $registered_addon ) {
				try {
					$form_hooks = $registered_addon->get_addon_form_hooks( $this->module_id );
					if ( $form_hooks instanceof Hustle_Provider_Form_Hooks_Abstract ) {
						self::$registered_addons[] = $registered_addon;
					}
				} catch ( Exception $e ) {
					Hustle_Api_Utils::maybe_log( $registered_addon->get_slug(), 'failed to get_addon_form_hooks', $e->getMessage() );
				}
			}
		}

		return self::$registered_addons;
	}

	/**
	 * Parsing filters from $_REQUEST
	 *
	 * @since 4.0
	 */
	protected function parse_filters() {
		$request_data = $_REQUEST;// WPCS CSRF ok.
		$data_range = isset( $request_data['date_range'] ) ? sanitize_text_field( $request_data['date_range'] ) : '';
		$search = isset( $request_data['search_email'] ) ? sanitize_text_field( $request_data['search_email'] ) : '';

		$filters = array();
		if ( ! empty( $data_range ) ) {
			$date_ranges = explode( ' - ', $data_range );
			if ( is_array( $date_ranges ) && isset( $date_ranges[0] ) && isset( $date_ranges[1] ) ) {
				$date_ranges[0] = date( 'Y-m-d', strtotime( $date_ranges[0] ) );
				$date_ranges[1] = date( 'Y-m-d', strtotime( $date_ranges[1] ) );

				$filters['date_created'] = array( $date_ranges[0], $date_ranges[1] );
			}
		}
		if ( ! empty( $search ) ) {
			$filters['search_email'] = $search;
		}

		$this->filters = $filters;
	}

	/**
	 * Parsing order from $_REQUEST
	 *
	 * @since 4.0
	 */
	protected function parse_order() {
		$valid_order_bys = array(
			'entries.date_created',
			'entries.entry_id',
		);

		$valid_orders = array(
			'DESC',
			'ASC',
		);
		$request_data = $_REQUEST;// WPCS CSRF ok.
		$order_by     = isset( $request_data['order_by'] ) ? sanitize_text_field( $request_data['order_by'] ) : 'entries.date_created';
		$order        = isset( $request_data['order'] ) ? sanitize_text_field( $request_data['order'] ) : 'DESC';

		if ( ! empty( $order_by ) ) {
			if ( ! in_array( $order_by, $valid_order_bys, true ) ) {
				$order_by = 'entries.date_created';
			}

			$this->order['order_by'] = $order_by;
		}

		if ( ! empty( $order ) ) {
			$order = strtoupper( $order );
			if ( ! in_array( $order, $valid_orders, true ) ) {
				$order = 'DESC';
			}

			$this->order['order'] = $order;
		}
	}

	/**
	 * Flag whether box filter is open or nope
	 *
	 * @since 4.0
	 * @return bool
	 */
	//protected function is_filter_box_enabled() {
	public function is_filter_box_enabled() {
		return ( ! empty( $this->filters ) && ! empty( $this->order ) );
	}

	/**
	 * Get module type param
	 *
	 * @since 4.0
	 * @return string
	 */
	public function get_module_type() {
		return $this->screen_params['module_type'];
	}

	/**
	 * Get module id param
	 *
	 * @since 4.0
	 * @return string
	 */
	public function get_module_id() {
		return $this->screen_params['module_id'];
	}

	/**
	 * Export the entries of the current module.
	 *
	 * @since 4.0
	 */
	private function export() {

		$action  = filter_input( INPUT_POST, 'hustle_action', FILTER_SANITIZE_STRING );
		if ( 'export_listing' !== $action ) {
			return;
		}
		$nonce = filter_input( INPUT_POST, '_wpnonce', FILTER_SANITIZE_STRING );
		if ( ! wp_verify_nonce( $nonce, 'hustle_module_export_listing' ) ) {
			return;
		}
		$id = filter_input( INPUT_POST, 'id', FILTER_VALIDATE_INT );
		if ( ! $id ) {
			return;
		}

		$module = Hustle_Module_Model::instance()->get( $id );
		$filename = sprintf(
			'hustle-%s-%s-%s-%s-emails.csv',
			$module->module_type,
			date( 'Ymd-his' ),
			get_bloginfo( 'name' ),
			$module->module_name
		);
		$filename = strtolower( sanitize_file_name( $filename ) );

		$entries = $this->get_entries_for_export();

		$fp = fopen( 'php://memory', 'w' ); // phpcs:disable WordPress.WP.AlternativeFunctions.file_system_read_fopen -- disable phpcs because it writes memory
		foreach ( $entries as $entry ) {
			$fields = self::get_formatted_csv_fields( $entry );
			fputcsv( $fp, $fields );
		}
		fseek( $fp, 0 );

		header( 'Cache-Control: must-revalidate, post-check=0, pre-check=0' );
		header( 'Content-Description: File Transfer' );
		header( 'Content-Type: text/csv; charset=' . get_option( 'blog_charset' ), true );
		header( 'Content-Disposition: attachment; filename="' . $filename . '";' );
		header( 'Expires: 0' );
		header( 'Pragma: public' );

		// print BOM Char for Excel Compatible
		echo chr( 239 ) . chr( 187 ) . chr( 191 );// wpcs xss ok. excel generated content

		// Send the generated csv lines to the browser
		fpassthru( $fp );
		exit();

	}

	/**
	 * Get the entries as a ready to export csv array.
	 *
	 * @since 4.0
	 * @return array
	 */
	private function get_entries_for_export() {

		$headers = $this->get_fields_mappers();

		$headers[] = array(
			'meta_key' => 'hustle_ip',
			'label' => 'IP',
			'type' => 'ip',
		);

		$header_labels = wp_list_pluck( $headers, 'label' );
		$entries = array( $header_labels );

		// Get all entries.
		foreach ( $this->entries as $entry ) {

			$row = array();

			// Get the entry's value for each header.
			foreach ( $headers as $header ) {
				$value = $this->get_entry_field_value( $entry, $header, '', false );
				$row[] = $value;
			}

			$entries[] = $row;
		}

		return $entries;
	}

	//====================

	/**
	 * Delete all IP
	 *
	 * @since 4.0.0
	 */
	public function delete_all_ip() {
		global $wpdb;
		$wpdb->delete(
			Hustle_Db::entries_meta_table(),
			array( 'meta_key' => 'hustle_ip' )
		);
	}

	/**
	 * Delete selected IPs
	 *
	 * @since 4.0.0
	 *
	 * @param array $ips Array of IPs to remove.
	 */
	public function delete_selected_ips( $ips ) {
		if ( empty( $ips ) || ! is_array( $ips ) ) {
			return;
		}
		global $wpdb;
		$in = array();
		$ranges = array();
		foreach ( $ips as $one ) {
			if ( is_array( $one ) ) {
				$ranges[] = sprintf(
					'( INET_ATON( `meta_value` ) BETWEEN %d AND %d )',
					$one[0],
					$one[1]
				);
			} else {
				$in[] = $one;
			}
		}
		$query = sprintf(
			'DELETE FROM `%s` WHERE `meta_key` = \'hustle_ip\' AND ( ',
			Hustle_Db::entries_meta_table()
		);
		if ( ! empty( $in ) ) {
			$query .= sprintf(
				'`meta_value` IN ( %s ) ', implode( ', ', array_map( array( $this, 'wrap_ip' ), $in ) )
			);
			if ( ! empty( $ranges ) ) {
				$query .= 'OR ';
			}
		}
		if ( ! empty( $ranges ) ) {
			$query .= implode( ' OR ', $ranges );
		}
		$query .= ' )';
		$wpdb->query( $query );
	}

	/**
	 * Helper to wrap IP into "''"
	 */
	private function wrap_ip( $a ) {
		return sprintf( '\'%s\'', $a );
	}

	/**
	 * Format csv fields.
	 *
	 * @since 4.0
	 *
	 * @param array $fields
	 * @return array|string
	 */
	public static function get_formatted_csv_fields( $fields ) {
		if ( empty( $fields ) || ! is_array( $fields ) ) {
			return $fields;
		}

		$formatted_fields = array();

		foreach ( $fields as $field ) {
			if ( ! is_scalar( $field ) ) {
				$formatted_fields[] = '';
				continue;
			}
			if ( is_scalar( $field ) ) {
				$formatted_fields[] = self::escape_csv_data( $field );
			}
		}

		return $formatted_fields;
	}

	/**
	 * Escape a string to be used in a CSV context
	 *
	 * Taken from Forminator, where was taken from WooCommerce CSV Exporter
	 *
	 * @see   https://github.com/woocommerce/woocommerce/blob/master/includes/export/abstract-wc-csv-exporter.php
	 *
	 * @since 1.6
	 *
	 * Malicious input can inject formulas into CSV files, opening up the possibility
	 * for phishing attacks and disclosure of sensitive information.
	 *
	 * Additionally, Excel exposes the ability to launch arbitrary commands through
	 * the DDE protocol.
	 *
	 * @see   http://www.contextis.com/resources/blog/comma-separated-vulnerabilities/
	 * @see   https://hackerone.com/reports/72785
	 *
	 * @since 4.0
	 *
	 * @param string $data CSV field to escape.
	 *
	 * @return string
	 */
	public static function escape_csv_data( $data ) {
		$active_content_triggers = array( '=', '+', '-', '@' );
		if ( in_array( mb_substr( $data, 0, 1 ), $active_content_triggers, true ) ) {
			$data = "'" . $data . "'";
		}

		return $data;
	}
}