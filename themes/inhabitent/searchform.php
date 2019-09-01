<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
	<a href="#" class="search-submit">
		<!-- <span class="icon-search" aria-hidden="true"> -->
		<i class="fa fa-search"></i>
		<!-- </span> -->
		<span class="screen-reader-text"><?php echo esc_html('Search'); ?></span>
	</a>

	<label>
		<input type="search" class="search-field" placeholder="Type and hit enter..." value="" name="s" title="Search for:">
	</label>
</form>