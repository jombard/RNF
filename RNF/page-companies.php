<?php

get_header(); ?>
	<!-- PAGE START -->
	<!-- <?php the_ID(); ?> -->

	<div class="row">
	    <div class="col-md-8">

	    	<?php if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('<p id="breadcrumbs" class="breadcrumb">','</p>');
			} ?>
			
	        <h2 class="title">Companies that have supported us</h2>

	        <p>The following organisations or individuals have supported us by donating prizes and services or offering us a reduced rate.</p>
	        <p>Thank you!</p>

	        <div class="col-md-6">
		        <ul class="rnfflower">
		            <li><a href="http://www.lindt.co.uk/" target="_blank">Lindt</a></li>
		            <li><a href="http://www.thecastlefarringdon.co.uk/" target="_blank">The Castle Pub</a></li>
		            <li><a href="http://www.caravanonexmouth.co.uk/" target="_blank">Caravan Restaurant & Bar, Exmouth Market</a></li>
		            <li><a href="http://www.thepaternoster.com/" target="_blank">The Paternoster Pub</a></li>
		            <li><a href="http://www.tastecard.co.uk/" target="_blank">Tastecard</a></li>
		            <li><a href="http://www.numatic.co.uk/" target="_blank">Numatic</a></li>
		            <li><a href="http://www.clarks.co.uk/" target="_blank">Clarks</a></li>
		            <li><a href="http://www.tricycle.co.uk/" target="_blank">The Tricycle Theatre</a></li>
		            <li><a href="http://www.wildflower-favours.co.uk/" target="_blank">Wildflower Favours</a></li>
		            <li><a href="http://www.quizquizquiz.com/" target="_blank">QuizQuizQuiz</a></li>
		            <li><a href="http://www.oliveology.co.uk/" target="_blank">Oliveology products</a></li>
		            <li><a href="http://www.levililyphotography.com/" target="_blank">Levlily Photography</a></li>
		        </ul>
	        </div>
	        <div class="col-md-6">
		        <ul class="rnfflower">
		            <li>Jim Carter and the cast of Downton Abbey</li>
		            <li>Emily Rayner Sewed Items</li>
		            <li>Joe Fraser Home Brewing</li>
		            <li><a href="http://www.jojomamanbebe.co.uk/Jojo Maman Bébé" target="_blank">Jojo Maman Bébé</a></li>
		            <li><a href="http://www.trotters.co.uk/" target="_blank">Trotters</a></li>
		            <li><a href="http://www.blue-daisy.com/" target="_blank">Blue Daisy</a></li>
		            <li><a href="http://www.synergysource.co.uk/" target="_blank">Synergy Source Health Clinic</a></li>
		            <li><a href="https://www.headspace.com/" target="_blank">Headspace online meditation</a></li>
		            <li><a href="http://kingstonestate.com.au/home" target="_blank">Kingston Wines, Australia</a></li>
		            <li><a href="http://www.geronimo-inns.co.uk/" target="_blank">Geronimo Inns</a></li>
		            <li><a href="http://www.thegoodship.co.uk/" target="_blank">The Good Ship pub</a></li>
		            <li><a href="http://www.springgrovemarketgarden.co.uk/" target="_blank">Spring Grove Market Garden</a></li>
		        </ul>
	        </div>

	        <div class="clearfix"></div>

	        <p>If your organisation would be willing to donate a prize for a future event or are looking to support us in any other means, please <a href="/contact-us">get in touch with us</a>.</p>
	    </div><!-- .col-md-8 -->
	
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div><!-- .col-md-4 -->
	</div><!-- .row -->

	<!-- PAGE END -->
<?php get_footer(); ?>