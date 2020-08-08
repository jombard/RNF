<?php
/*
 * Template Name: Fundraising Page Template
 * Description: Page template used for fundraising pages
 */
 ?>

 <!-- FUNDRAISING TEMPLATE START -->

 <!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php the_title(); ?> Fundraising for Dementia | <?php bloginfo('name'); ?></title>
	<link href="/wp-content/themes/rnf/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="/wp-content/themes/rnf/css/bootstrap.min.css">
	<script type="text/javascript" src="/wp-content/themes/rnf/scripts/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="/wp-content/themes/rnf/scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/rnf/scripts/chart.min.js"></script>
    <!--[if lt IE 9]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	
	<!-- DONATION MODAL -->
    <div class="modal fade" id="donationModal" role="dialog">
	    <div class="modal-dialog modal-lg">
		    <div class="modal-content">
			    <div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal">
					    <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				    </button>
				    <h4>Donate to Remembering Not To Forget</h4>
			    </div>
			    <div class="modal-body text-center">
				    <div class="container-fluid">
                        <div class="alert alert-info">The donate link will take you to the PayPal site where you can specify your donation amount.<br>You can pay with PayPal or credit/debit card. <a href="/funds">Where will your donations go?</a></div>

                        <div class="row">
                            <div class="col-sm-12">
                                <p><a class="btn btn-lg btn-success" role="button" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=79HCURUFRLV54">Donate with GiftAid *<br>
                                <small>I would like you to claim Gift Aid on my donation</small></a></p>
                                <p class="lead">Boost your donation by 25p of Gift Aid for every £1 you donate.</p>                                
                            </div>
                        </div>

                        <div class="alert alert-warning">
                            <div class="text-muted">
                                <p>* By clicking this button you confirm that you are a UK taxpayer and you understand that if you pay less Income Tax and/ or Capital Gains Tax in the current tax year than the amount of Gift Aid claimed on all your donations it is your responsibility to pay any difference.</p>

                                <p>Please ensure your address is attached to your PayPal account as it is needed to identify you as a current UK taxpayer for us to be able to claim Gift Aid.</p>


                                <a href="http://www.hmrc.gov.uk/individuals/giving/gift-aid.htm" target="_blank">Find out more about Gift Aid</a>
                            </div>
                        </div>
                        
                        <p><a class="btn btn-lg btn-warning" role="button" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=NMTAEULGFNFYU">Donate without GiftAid</a></p>
                        <p class="lead">If you do not qualify for GiftAid please use this donate link.</p>
                    </div>
			    </div>
			    <div class="modal-footer">
				    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			    </div>
		    </div>
	    </div>
    </div>

    <div class="container page">

    	<div class="jumbotron" style="margin-top:20px;">
			<div class="col-sm-2">
				<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
				<a href="#" class="thumbnail">
					<?php the_post_thumbnail(); ?>
				</a>
				<?php endif; ?>
			</div>
			<div class="col-sm-7 text-center">
				<h1><?php the_title(); ?><br />Fundraising Page</h1>
				<div class="lead">
				<a href="/" title="Find out more about the charity">
					<img src="/wp-content/themes/rnf/images/logo_tiny.png" alt="Flower">
					<p class="charityname">Remembering Not To Forget</p>
				</a>
				</div>

				<div class="text-center">
					<a class="btn btn-lg btn-success" data-toggle="modal" data-target="#donationModal" role="button">Donate now</a>
				</div>
			</div>
			<div class="col-sm-3 chartholder">
				<p title="including GiftAid">Raised: <strong>£<span id="fundsRaised"></span></strong></p>

				<div id="canvas-holder">
					<canvas id="chart-area" width="200" height="200"/>
				</div>
				<p>Target: <strong>£<span id="fundsTotal"></span></strong>
			</div>
			<div class="clearfix"></div>

		</div>

    	<div class="main-content-block">

			<div class="row">
				<div class="col-md-8">
					<section>
						<?php /* The loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
						<article>

							<div class="page-header">
								<h1 class="text-center"><?php echo get_post_meta($post->ID, 'fundraiser-page-title', true); ?></h1>
							</div>

							<div>
								<?php the_content(); ?>
							</div>

							<div class="text-center">
								<a class="btn btn-lg btn-success" data-toggle="modal" data-target="#donationModal" role="button">Donate now</a>
							</div>

						</article>

						<!-- CHART DATA -->
						<?php if(get_post_meta($post->ID, 'fundraiser-script', true)) : ?>
						<script type="text/javascript" src="/wp-content/themes/rnf/scripts/<?php echo get_post_meta($post->ID, 'fundraiser-script', true); ?>"></script>
						<?php endif; ?>
						<?php endwhile; ?>


						
					</section>

					<div class="clearfix"></div>

					<?php comments_template(); ?>

				</div><!-- .col-md-8 -->
			
				<div class="col-md-4">

					<p class="lead text-center">Donations</p>
					<p class="text-center"><small class="text-muted">Recent donations may take a short time to appear.</small></p>
					<div class="commentcontainer">
					<!-- DONATIONS APPEAR HERE FROM JAVASCRIPT ARRAY -->
					</div>
					<div class="text-center">
						<div id="unhidedonations">Show All</div>	
					</div>

				</div><!-- .col-md-4 -->
			</div><!-- .row -->
		</div>

	<!-- PAGE END -->
<?php get_footer(); ?>