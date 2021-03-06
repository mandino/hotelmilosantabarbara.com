<?php

/**
 * A message presenter to show a WordPress notice.
 */
class Whip_WPMessagePresenter implements Whip_MessagePresenter {

	private $message;

	/**
	 * Whip_WPMessagePresenter constructor.
	 *
	 * @param Whip_Message $message The message to use in the presenter.
	 */
	public function __construct( Whip_Message $message ) {
	    $this->message = $message;
	}

	/**
	 * Registers hooks to WordPress. This is a separate function so you can
	 * control when the hooks are registered.
	 */
	public function register_hooks() {
		global $whip_admin_notices_added;
		if ( null === $whip_admin_notices_added || ! $whip_admin_notices_added ) {
			add_action( 'admin_notices', array( $this, 'renderMessage' ) );
			$whip_admin_notices_added = true;
		}
	}

	/**
	 * Renders the messages present in the global to notices.
	 */
	public function renderMessage() {
	    printf( '<div class="error">%s</div>', $this->kses( $this->message->body() ) );
	}

	/**
	 * Removes content from the message that we don't want to show.
	 *
	 * @param string $message The message to clean.
	 *
	 * @return string The cleaned message.
	 */
	public function kses( $message ) {
		return wp_kses( $message, array(
			'a'      => array(
				'href' => true,
				'target' => true,
			),
			'strong' => true,
			'p'      => true,
			'ul'     => true,
			'li'     => true,
		) );
	}
}
