<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="dementia, charity, fundraising, sponsorship, challenge">
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link type="text/plain" rel="author" href="/wp-content/themes/rnf/humans.txt" />
	<link href="/wp-content/themes/rnf/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<!-- Bootstrap css -->
	<link rel="stylesheet" href="/wp-content/themes/rnf/css/bootstrap.min.css">
	<!-- PrettyPhoto plugin stylesheet -->
	<link href="/wp-content/themes/rnf/css/prettyPhoto.css" rel="stylesheet" />
	<!-- jQuery -->
	<script type="text/javascript" src="/wp-content/themes/rnf/scripts/jquery-1.10.2.min.js"></script>
	<!-- BootstrapJS -->
	<script type="text/javascript" src="/wp-content/themes/rnf/scripts/bootstrap.min.js"></script>
	<!--PrettyPhoto-->
    <script type="text/javascript" src="/wp-content/themes/rnf/scripts/jquery.prettyPhoto.js"></script>
    <!--Isotope Filter-->
    <script type="text/javascript" src="/wp-content/themes/rnf/scripts/isotope.pkgd.min.js"></script>
    <!--ChartJS-->
    <script type="text/javascript" src="/wp-content/themes/rnf/scripts/chart.min.js"></script>
	<?php wp_head(); ?>
</head>

<body>

	<!--Facebook like button start-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <!--Facebook like button end-->

	<!-- DONATION MODAL -->
    <!--
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
    -->
	<div class="container page">
            
        <div class="row">
            <div class="col-md-2 col-xs-12 text-center">
                <div id="logo">
  	                <a href="/"><img src="/wp-content/themes/rnf/images/logo.png" alt="Logo"></a>
                </div>
            </div>
            <div class="col-md-7 col-xs-12 hidden-xs">   
                
	            <h1><a href="/"><?php bloginfo('name'); ?></a></h1>

	            <div id="sitedescription">
	                <?php bloginfo('description'); ?>
	            </div>

                <div class="sociallinks">
                    <div class="fb-like" data-href="https://www.facebook.com/pages/Remembering-Not-To-Forget/235169236658679" data-width="400px" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>
                </div>
                
            </div>

            <div class="col-md-3 col-xs-12">
                <div class="donateheader">
  		            <a class="btn btn-success btn-block m-b" href="https://mydonate.bt.com/donation/start.html?charity=143287">
                        Donate to<br>Remembering Not To Forget
                    </a>	
  	                <img src="/wp-content/themes/rnf/images/uk-payment-logos.png" alt="Uk -payment -logos -small" width="164" height="15" />
                </div>
            </div>

        </div>

        <nav class="navbar navbar-rnf">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><span class="hidden-xs hidden-sm">Remembering Not To Forget</span></a>
                </div>

               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php wp_nav_menu( array('menu' => 'RNF Navigation Menu', 'container' => '', 'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>' )); ?>
                </div>
            </div>
        </nav>
            
        <div id="content">
            <section>
            <!-- HEADER END -->