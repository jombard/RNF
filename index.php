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
							<a href="<?php echo get_permalink(); ?>">
								<?php the_post_thumbnail('post-thumbnail', array( 'class' => "img-responsive")); ?>
							</a>
						</div>
						<?php endif; ?>

						<h1>
							<a href="<?php echo get_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h1>
						<p class="post-meta"><?php the_time('F jS, Y') ?> by <a href="#"><?php the_author(); ?></a> in <?php the_category(', ') ?> <?php comments_number('No Comments','1 Comment','% Comments'); ?></p>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_excerpt(); ?>
    					<p><a href="<?php echo get_permalink(); ?>">Read More...</a></p>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php the_tags( '<div class="post-labels"><div class="label label-default">', '</div><div class="label label-default">', '</div></div>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php comments_template(); ?>
			<?php endwhile; ?>

    	</div><!-- .col-md-12 -->
	
	</div><!-- .row -->
	

	<!-- INDEX END -->
<?php get_footer(); ?>