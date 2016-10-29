<?php

get_header(); ?>
	<!-- SINGLE START -->
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
						<h1><?php the_title(); ?></h1>
						<p class="post-meta"><?php the_time('F jS, Y') ?> by <a href="#"><?php the_author(); ?></a> in <?php the_category(', ') ?> <?php comments_number('No Comments','1 Comment','% Comments'); ?></p>
						<div class="social-options">
							<?php echo do_shortcode ('[shareaholic app="share_buttons" id="15240249"]'); ?>
						</div>
					</header><!-- .entry-header -->

					<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="row entry-thumbnail">
							<div class="placeholder" data-large="<?php the_post_thumbnail_url('post-thumbnail'); ?>">
                                <?php the_post_thumbnail(array(80, 60), array( 'class' => "img-responsive img-small")); ?>
                                <div style="padding-bottom: 66.6%;"></div>
                            </div>

						</div>
					<?php endif; ?>

					<div class="entry-content">
						<?php the_content(); ?>

						<div class="panel panel-default">
							<div class="panel-body">
								This entry was posted in <?php the_category(', ') ?>
							</div>
						</div>

						<?php the_tags( '<div class="post-labels"><div class="label label-default">', '</div><div class="label label-default">', '</div></div>' ); ?>

					</div><!-- .entry-content -->

				</article><!-- #post -->

				<div class="alert alert-info">We need your help to raise awareness. Please consider sharing this post.</div>

				<div class="social-options">
					<?php echo do_shortcode ('[shareaholic app="share_buttons" id="15240249"]'); ?>
				</div>

				<?php comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- .col-md-12 -->
	
	</div><!-- .row -->

	<!-- SINGLE END -->
<?php get_footer(); ?>