<?php

get_header(); ?>
	<!-- SEARCH START -->
	<!-- <?php the_ID(); ?> -->

	<div class="row">
    	<div class="col-md-8">

    		<?php if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('<p id="breadcrumbs" class="breadcrumb">','</p>');
			} ?>

			<header class="page-header">
			<?php get_search_form(); ?>
			<h2 class="page-title">
				<?php if ( have_posts() ) : ?>
					<?php printf( __( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?>
				<?php else : ?>
					<?php _e( 'Nothing Found' ); ?>
				<?php endif; ?>
				</h2>
			</header><!-- .page-header --> 

			<?php if ( have_posts() ) : ?>

				<ul class="rnfflower">
				<?php while ( have_posts() ) : the_post(); ?>
					
					<li class="entry-title">
						<?php the_title( '<h4><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?>
						<p><?php the_excerpt() ?></p>
					</li>

				<?php endwhile; ?> 
				</ul>

			<?php else : ?>

				<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.' ); ?></p>
			
			<?php endif; ?>


		</div><!-- .col-md-8 -->
	
		<div class="col-md-4 m-t-b">
			<?php get_sidebar(); ?>
		</div><!-- .col-md-4 -->
	</div><!-- .row -->

	<!-- SEARCH END -->
<?php get_footer(); ?>