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

					<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="row entry-thumbnail">
							<div class="placeholder" data-large="<?php the_post_thumbnail_url('post-thumbnail'); ?>">
                                <?php the_post_thumbnail(array(80, 60), array( 'class' => "img-responsive img-small")); ?>
                                <div style="padding-bottom: 66.6%;"></div>
                            </div>

						</div>
					<?php endif; ?>

					<div class="entry-article">
						<header class="page-header">
							<h2><?php the_title(); ?></h2>
							<p class="post-meta"><?php the_time('F jS, Y') ?> by <a href="#"><?php the_author(); ?></a> in <?php the_category(', ') ?> <?php comments_number('No Comments','1 Comment','% Comments'); ?></p>
						</header><!-- .page-header -->

						<div class="entry-content">
							<?php the_content(); ?>

							<div class="alert alert-info m-t">We need your help to raise awareness. Please consider sharing this post.</div>

							<div class="panel panel-default">
								<div class="panel-body">
									This entry was posted in <?php the_category(', ') ?>
								</div>
							</div>

							<?php the_tags( '<div class="post-labels"><div class="label label-info">', '</div><div class="label label-info">', '</div></div>' ); ?>

						</div><!-- .entry-content -->

						<div class="row text-center">
							<?php $prevPost = get_previous_post(); ?>
							<?php if($prevPost) : ?>
								<?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, "rnf-featured-thumb", array( 'class' => "img-responsive") ); ?>
								<?php previous_post_link('<div class="col-xs-6">%link</div>',"<div class='thumbnail'>$prevthumbnail<div class='caption'><h4>%title</h4></div></div>"); ?>
							<?php endif; ?>

							<?php $nextPost = get_next_post(); ?>
							<?php if($nextPost) : ?>
								<?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, "rnf-featured-thumb", array( 'class' => "img-responsive") ); ?>
								<?php next_post_link('<div class="col-xs-6">%link</div>',"<div class='thumbnail'>$nextthumbnail<div class='caption'><h4>%title</h4></div></div>"); ?>
							<?php endif; ?>
						</div><!-- .row -->

						<?php comments_template(); ?>
					</div>

				</article><!-- #post -->

			<?php endwhile; ?>

		</div><!-- .col-md-12 -->
	
	</div><!-- .row -->

	<!-- SINGLE END -->
<?php get_footer(); ?>