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
				<div style="padding-bottom: 33%;"></div>
			</div>
			<?php endif; ?>
		
			<div class="carousel-caption text-center" style="background-color:rgba(127, 63, 152, 0.5)">
				<h2>Supporting people impacted by dementia</h2>
				<p class="hidden-xs">Challenging ourselves to help raise funds and awareness</p>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row" style="padding:20px 0 50px;">
		<div class="col-sm-12 text-center">

			<?php the_content(); ?>

		</div>
	</div>

	<div class="row">
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

<div class="bg-rnf m-t-b">
	<div class="container">
		<div class="row text-center" style="color: #fff; padding: 40px 0;">
			<div class="col-sm-4">
				<h3 class="strong text-white">Challenges<br />Undertaken</h3>
				<p class="h1"><?php echo get_post_meta($post->ID, 'challenges-undertaken', true); ?></p>
			</div>
			<div class="col-sm-4">
				<h3 class="strong text-white">Amount<br />Raised</h3>
				<p class="h1"><?php echo get_post_meta($post->ID, 'amount-raised', true); ?></p>
			</div>
			<div class="col-sm-4">
				<h3 class="strong text-white">Organisations<br />Supported</h3>
				<p class="h1"><?php echo get_post_meta($post->ID, 'organisations-supported', true); ?></p>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6">

	        <h2>Latest Blog Posts</h2>

	        <?php
		        $args = array('numberposts' => '3', 'post_status' => array('publish'));
		        $recent_posts = wp_get_recent_posts($args); ?>
			    	<?php foreach ( $recent_posts as $recent ) : setup_postdata( $recent ); ?>
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
								<a href="<?php echo get_permalink($recent["ID"]); ?>" class="btn btn-info">
									Read more
									<i class="glyphicon glyphicon-chevron-right"></i>
								</a>
						  	</div>
			            </div>
			    	<?php endforeach; ?>
		        <?php 
		        wp_reset_query();
		    ?>

		</div>

		<div class="col-md-6">

	        <h2>Latest Challenges</h2>

	        <div class="row m-b">
	        	<div class="col-sm-6">
	        		<a href="/challenges/2017-challenges/round-world-challenge/">
						<div class="placeholder" data-large="/wp-content/uploads/2016/12/roundtheworld-e1482518013750.jpg">
							<img src="/wp-content/uploads/2016/12/roundtheworld-e1482518013750.jpg" alt="Round the World" class="img-small">
							<div style="padding-bottom: 66.6%; width:300px;"></div>
						</div>
					</a>
	        	</div>
	        	<div class="col-sm-6">
					<h4><a href="/challenges/2017-challenges/round-world-challenge/">Round the World Challenge</a></h4>
				    <p>Covering the distance of the equator through self-powered travel.</p>
					<a href="/challenges/2017-challenges/round-world-challenge/" class="btn btn-info">
						Read more
						<i class="glyphicon glyphicon-chevron-right"></i>
					</a>
			  	</div>
        	</div>
        	<div class="row m-b">
	        	<div class="col-sm-6">
	        		<a href="/challenges/2017-challenges/end-end-challenge/">
						<div class="placeholder" data-large="/wp-content/uploads/2017/01/Landsendsignpost-e1484777710592.jpg">
							<img src="/wp-content/uploads/2017/01/Landsendsignpost-e1484777710592.jpg" alt="Lands End" class="img-small">
							<div style="padding-bottom: 66.6%; width:300px;"></div>
						</div>
					</a>
	        	</div>
	        	<div class="col-sm-6">
					<h4><a href="/challenges/2017-challenges/end-end-challenge/">Land's End to John O'Groats</a></h4>
				    <p>1000 miles cycle challenge.</p>
					<a href="/challenges/2017-challenges/end-end-challenge/" class="btn btn-info">
						Read more
						<i class="glyphicon glyphicon-chevron-right"></i>
					</a>
			  	</div>
        	</div>
        	<div class="row m-b">
	        	<div class="col-sm-6">
	        		<a href="/challenges/2017-challenges/four-palaces-guided-walk/">
						<div class="placeholder" data-large="/wp-content/uploads/2017/04/Guided-Walk-e1496608837219.jpg">
							<img src="/wp-content/uploads/2017/04/Guided-Walk-e1496608837219.jpg" alt="Guided Walk" class="img-small">
							<div style="padding-bottom: 66.6%; width:300px;"></div>
						</div>
					</a>
	        	</div>
	        	<div class="col-sm-6">
					<h4><a href="/challenges/2017-challenges/four-palaces-guided-walk/">Four Palaces guided walk</a></h4>
				    <p>A guided walk through historical London.</p>
					<a href="/challenges/2017-challenges/four-palaces-guided-walk/" class="btn btn-info">
						Read more
						<i class="glyphicon glyphicon-chevron-right"></i>
					</a>
			  	</div>
        	</div>
		</div>
	    
	</div>
</div>

<div class="bg-rnf m-t-b">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center" style="color: #fff; padding: 40px 0;">
				<h3 class="text-white">Make a difference by fundraising for Remembering Not to Forget</h3>
				<a href="/fundraising/fundraising-for-us/" class="btn btn-info">More Information <i class="glyphicon glyphicon-chevron-right"></i></a>
				<a href="/fundraising/fundraising-for-us/our-amazing-fundraisers/" class="btn btn-link text-white">Our fundraisers <i class="glyphicon glyphicon-chevron-right"></i></a>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<div id="mc_embed_signup">
				<h3>Subscribe to our newsletter</h3>
		        <form action="https://rememberingnottoforget.us3.list-manage2.com/subscribe/post?u=4bbf97a920c7865dcf7b097ba&amp;id=f077e514d1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
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
		        </form>
		    </div>

		</div>
		<div class="col-sm-6 ">
			<h3>Contact Remembering Not to Forget</h3>
			<p>Get in touch with us via our various social media channels below or drop us a note through the website.</p>
			<a href="/contact-us/" class="btn btn-info">Contact Us</a>
        	<!-- <a class="twitter-timeline" data-width="520" data-height="800" href="https://twitter.com/RNF_UK" data-widget-id="705778350770556928">
        		Tweets by @RNF_UK
        	</a>
        	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> -->
		</div>
	</div>
</div>

<?php endwhile; ?>

<!-- FRONT-PAGE END -->
<?php get_footer(); ?>