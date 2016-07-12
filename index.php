<?php

get_header(); ?>
	<!-- INDEX START -->
	<!-- <?php the_ID(); ?> -->

	<div class="row">
    	<div class="col-md-12">

    		<?php if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('<p id="breadcrumbs" class="breadcrumb">','</p>');
			} ?>

    		<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="row entry-thumbnail">
							<?php the_post_thumbnail('post-thumbnail', array( 'class' => "img-responsive")); ?>
						</div>
						<?php endif; ?>

						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php comments_template(); ?>
			<?php endwhile; ?>

    	</div><!-- .col-md-12 -->
	
	</div><!-- .row -->
	

	<!-- INDEX END -->
<?php get_footer(); ?>