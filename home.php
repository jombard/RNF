<?php
//Blog template page
get_header(); ?>
	<!-- INDEX START -->
	<!-- <?php the_ID(); ?> -->

	<div class="row">
    	<div class="col-md-8">

            <?php if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb('<p id="breadcrumbs" class="breadcrumb">','</p>');
            } ?>

    		<h2>A blog about dementia</h2>
			<p>Alongside fundraising to support people impacted by dementia, one of the aims of <a href="/">Remembering Not to Forget</a> is to get people talking about dementia more openly, and for people to be aware that it’s possible to live well with dementia for a long time.</p>
			<p>This blog will try to capture some thoughts on our family’s journey with dementia, we’ll also use this space to share other relevant <a href="/">Remembering Not to Forget</a> stories or updates.</p>

        <?php if (have_posts()) : ?>
    		<?php while (have_posts()) : the_post(); ?>

    			<div class="row">

    				<div class="col-sm-3">
	    				<?php if ( has_post_thumbnail() ) : ?>
		    				<div class="post-thumb">
		    					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('large', array( 'class' => 'img-responsive' )); ?></a>
		    				</div>
	    				<?php endif; ?>
    				</div>

    				<div class="col-sm-9">
    					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
    					<p class="post-meta"><?php the_time('F jS, Y') ?> by <a href="#"><?php the_author(); ?></a> in <?php the_category(', ') ?> <?php comments_number('No Comments','1 Comment','% Comments'); ?></p>
    					<?php the_excerpt(); ?>
    					<p><a href="<?php echo get_permalink(); ?>">Read More...</a></p>
    				</div>

                    <hr/>
    			</div>

    		<?php endwhile; ?>

    		<nav>
    			<ul class="pager">
    				<li><?php next_posts_link('<span aria-hidden="true">&larr;</span> Older') ?></li>
    				<li><?php previous_posts_link('Newer <span aria-hidden="true">&rarr;</span>') ?></li>
    			</ul>
    		</nav>

    	<?php else : ?>

    		<h2>Nothing Found</h2>
    		<p>Sorry, but you are looking for something that isn't here.</p>

    	<?php endif; ?>

    	</div><!-- .col-md-8 -->
	
		<div class="col-md-4">
            <div>
                <h3>Tag Cloud</h3>
                <?php wp_tag_cloud( 'smallest=8&largest=22' ); ?>
            </div>
			<?php get_sidebar(); ?>
		</div><!-- .col-md-4 -->
	</div><!-- .row -->
	

	<!-- INDEX END -->
<?php get_footer(); ?>