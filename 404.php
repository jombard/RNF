<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="main-content-block site-content" role="main">

			<header class="page-header">
				<h2 class="page-title"><?php _e( 'Not Found', 'twentythirteen' ); ?></h2>
			</header>

			<div class="page-wrapper">
				<div class="page-content">
					<h4><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'twentythirteen' ); ?></h4>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>