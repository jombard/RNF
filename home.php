<?php
//Blog template page
get_header(); ?>
	<!-- HOME START -->
	<!-- <?php the_ID(); ?> -->

	<div class="row">
    	<div class="col-md-8">

            <?php if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb('<p id="breadcrumbs" class="breadcrumb">','</p>');
            } ?>

            <div class="page-header">
    		    <h2>A blog about dementia</h2>
            </div>
			<p>Alongside fundraising to support people impacted by dementia, one of the aims of <a href="/">Remembering Not to Forget</a> is to get people talking about dementia more openly, and for people to be aware that it’s possible to live well with dementia for a long time.</p>
			<p>This blog will try to capture some thoughts on the Turnbull family’s journey with dementia, we’ll also use this space to share other relevant <a href="/">Remembering Not to Forget</a> stories or updates.</p>

            <div class="row m-b">
                <div class="col-sm-6">
                <?php
                    $query = new WP_Query( array('category_name' => 'blog', 'posts_per_page' => '1'));
                ?>

                <?php if( $query->have_posts() ) : ?>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Latest post in blog
                            </div>
                            <div>
                                <a href="<?php echo get_permalink() ?>">
                                    <div class="placeholder" data-large="<?php the_post_thumbnail_url('post-thumbnail'); ?>">
                                        <?php echo the_post_thumbnail('rnf-featured-thumb', array( 'class' => "img-responsive m-auto img-small")); ?>  
                                        <div style="padding-bottom: 66.6%; width:200px;"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="carousel-caption">                            
                                <div><?php the_title(); ?></div>
                                <a href="<?php echo get_permalink(); ?>" class="btn btn-info">
                                    Read more
                                    <em class="glyphicon glyphicon-chevron-right"></em>
                                </a>
                            </div>
                        </div>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                <?php endif; ?>
                </div>
                <div class="col-sm-6">
                    <?php
                    $query = new WP_Query( array('category_name' => 'Challenges', 'posts_per_page' => '1'));
                ?>

                <?php if( $query->have_posts() ) : ?>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                       <div class="panel panel-info">
                            <div class="panel-heading">
                                Latest post in challenges
                            </div>
                            <div>
                                <a href="<?php echo get_permalink() ?>">
                                    <div class="placeholder" data-large="<?php the_post_thumbnail_url('post-thumbnail'); ?>">
                                        <?php echo the_post_thumbnail('rnf-featured-thumb', array( 'class' => "img-responsive m-auto img-small")); ?>  
                                        <div style="padding-bottom: 66.6%; width:200px;"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="carousel-caption">
                                <div><?php the_title(); ?></div>
                                <a href="<?php echo get_permalink(); ?>" class="btn btn-info">
                                    Read more
                                    <em class="glyphicon glyphicon-chevron-right"></em>
                                </a>
                            </div>
                        </div>
                            

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                <?php endif; ?>
                </div>
               
            </div>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="page-header">
                        <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                        <div class="row entry-thumbnail">
                            <a href="<?php echo get_permalink(); ?>">
                                <div class="placeholder" data-large="<?php the_post_thumbnail_url('post-thumbnail'); ?>">
                                    <?php the_post_thumbnail(array(80, 60), array( 'class' => "img-responsive img-small")); ?>
                                    <div style="padding-bottom: 66.6%;"></div>
                                </div>
                            </a>
                        </div>
                        <?php endif; ?>

                        <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p class="post-meta"><?php the_time('F jS, Y') ?> by <a href="#"><?php the_author(); ?></a> in <?php the_category(', ') ?> <?php comments_number('No Comments','1 Comment','% Comments'); ?></p>
                    </header><!-- .page-header -->

                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                        <p><a href="<?php echo get_permalink(); ?>">Read More...</a></p>
                    </div><!-- .entry-content -->

                    <footer class="entry-meta">
                        <?php the_tags( '<div class="post-labels"><div class="label label-info">', '</div><div class="label label-info">', '</div></div>' ); ?>
                    </footer><!-- .entry-meta -->
                </article><!-- #post -->

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
            <div class="panel panel-info">
                <div class="panel-heading">Tag Cloud</div>
                <div class="panel-body">
                    <?php wp_tag_cloud( 'smallest=8&largest=22' ); ?>
                </div>
            </div>
			<?php get_sidebar(); ?>
		</div><!-- .col-md-4 -->
	</div><!-- .row -->
	

	<!-- HOME END -->
<?php get_footer(); ?>