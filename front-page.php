<?php

get_header(); ?>
	<!-- FRONT-PAGE START -->

</div>

<?php while ( have_posts() ) : the_post(); ?>

<div class="carousel">
	<div class="carousel-inner">
		<div class="item active">
			<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
			<div class="placeholder" data-large="<?php the_post_thumbnail_url('post-thumbnail'); ?>">
				<?php the_post_thumbnail('rnf-home-featured-thumb', array( 'class' => "img-responsive img-small")); ?>
				<div style="padding-bottom: 50%;"></div>
			</div>
			<?php endif; ?>
		
			<div class="carousel-caption" style="background-color:rgba(127, 63, 152, 0.5)">
			<div class="container m-t-b text-left">
				<h2 class="hidden-xs">Supporting people impacted by dementia</h2>
				<p>Challenging ourselves to help raise funds and awareness</p>
				<div class="m-t">
					<?php echo do_shortcode ('[donate]'); ?>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row m-t-b">
		<div class="col-sm-12">

			<?php the_content(); ?>

		</div>
	</div>

	<div class="row m-t-b">
		<!-- rnf_get_featured_content(1) -->
		<?php if ( rnf_get_featured_content(1) ) : ?>
			<!-- if -->
		    <?php foreach ( $featured as $post ) : setup_postdata( $post ); ?>
		    	<!-- foreach -->
		      <?php get_template_part( 'featured', get_post_format() ); ?>
		    <?php endforeach; ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</div>
</div>

<div class="bg-rnf">
	<div class="container">
		<div class="row text-center text-white m-t-b">
			<div class="col-sm-6">
				<h3 class="strong text-white">Amount Raised</h3>
				<p class="h1"><?php echo get_post_meta($post->ID, 'amount-raised', true); ?></p>
			</div>
			<div class="col-sm-6">
				<h3 class="strong text-white">Organisations Supported</h3>
				<p class="h1"><?php echo get_post_meta($post->ID, 'organisations-supported', true); ?></p>
			</div>
		</div>
	</div>
</div>

<div class="container m-t-b">
			<h2>Latest Posts</h2>

				<div class="row">
	        <?php
		        $args = array('numberposts' => '4', 'post_status' => array('publish'));
		        $recent_posts = wp_get_recent_posts($args); ?>
						<?php foreach ( $recent_posts as $recent ) : setup_postdata( $recent ); ?>
							<div class="col-md-6">

			          <div class="row m-b">
									<div class="col-sm-6">
				        		<a href="<?php echo get_permalink($recent["ID"]) ?>">
											<div class="placeholder" data-large="<?php echo get_the_post_thumbnail_url($recent['ID']); ?>">
												<?php echo get_the_post_thumbnail($recent["ID"], 'rnf-featured-thumb', array( 'class' => "img-responsive m-auto img-small")); ?>  
												<div style="padding-bottom: 66.6%; width:200px;"></div>
											</div>
										</a>
				        	</div>
				        	<div class="col-sm-6">
										<h4><a href="<?php echo get_permalink($recent["ID"]); ?>"><?php echo $recent["post_title"]; ?></a></h4>
							    	<p><?php echo $recent["post_excerpt"]; ?></p>
										<a href="<?php echo get_permalink($recent["ID"]); ?>">
											Read more
										</a>
						  		</div>
								</div>
									
							</div>
			    	<?php endforeach; ?>
		        <?php 
		        wp_reset_query();
		    ?>
			</div>

		</div>

<div class="bg-rnf">
	<div class="container">
		<div class="row m-t-b">
			<div class="col-sm-9 text-white">
				<h3 class="text-white m-t">Make a difference by fundraising for Remembering Not to Forget</h3>
			</div>
			<div class="col-sm-3">
				<a href="/fundraising/fundraising-for-us/our-amazing-fundraisers/" class="btn btn-info btn-lg">
					Our fundraisers <em class="glyphicon glyphicon-chevron-right"></em>
				</a>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row m-t-b">
		<div class="col-sm-6 ">
			<h3>Contact Remembering Not to Forget</h3>
			<p>Get in touch with us via our various social media channels below or drop us a note through the website.</p>
			<a href="/contact-us/">Contact Us</a>
		</div>
		<div class="col-sm-6">
			<div id="mc_embed_signup">
				<h3>Subscribe to our newsletter</h3>
		        <form action="https://rememberingnottoforget.us3.list-manage.com/subscribe/post?u=4bbf97a920c7865dcf7b097ba&amp;id=f077e514d1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		        	<div id="mc_embed_signup_scroll">
			            <div class="form-group">
							Join our newsletter and get occasional updates on our challenges and fundraising progress.
						</div>
						<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;">
							<input type="text" name="b_4bbf97a920c7865dcf7b097ba_f077e514d1" value="">
						</div>
						 <div class="input-group max-300">
							<input type="email" value="" name="EMAIL" class="form-control email" id="mce-EMAIL" placeholder="Enter your email address" required>
							<span class="input-group-btn">
								<button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-info">Subscribe</button>
							</span>
			            </div>
			            <div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>
		            </div>
		        </form>
		    </div>

		</div>
	</div>
</div>

<?php endwhile; ?>

<!-- FRONT-PAGE END -->
<?php get_footer(); ?>
