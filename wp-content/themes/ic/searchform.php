<form action="/" method="get" style="position: relative;">
    <fieldset>
        <input type="text" name="s" id="search" placeholder="<?php _e('Search…','cebolang'); ?>" value="<?php the_search_query(); ?>" style="width: 89%"/>
        <input type="hidden" name="post_type" value="post" />
		<span class="icon-search a0" aria-hidden="true"></span>
    </fieldset>
</form>