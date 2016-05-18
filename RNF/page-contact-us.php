<?php

get_header(); ?>
	<!-- PAGE START -->
	<!-- <?php the_ID(); ?> -->

	<div class="row">
    	<div class="col-md-8">

    		<?php if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('<p id="breadcrumbs" class="breadcrumb">','</p>');
			} ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<h2><?php the_title(); ?></h2>

				<?php the_content(); ?>
						
			<?php endwhile; ?>

		</div><!-- .col-md-8 -->
	
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div><!-- .col-md-4 -->
	</div><!-- .row -->

	<!-- PAGE END -->
<?php get_footer(); ?>