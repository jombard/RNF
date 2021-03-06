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

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="page-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<div class="placeholder" data-large="<?php the_post_thumbnail_url('post-thumbnail'); ?>">
                                <?php the_post_thumbnail(array(80, 60), array( 'class' => "img-responsive img-small")); ?>
                                <div style="padding-bottom: 66.6%;"></div>
                            </div>
						</div>
						<?php endif; ?>

						<h2><?php the_title(); ?></h2>
					</header><!-- .page-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- .col-md-8 -->
	
		<div class="col-md-4 m-t-b">
			<?php get_sidebar(); ?>
		</div><!-- .col-md-4 -->
	</div><!-- .row -->

	<!-- PAGE END -->
<?php get_footer(); ?>