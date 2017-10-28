<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="dementia, charity, fundraising, sponsorship, challenge">
    <meta name="description" content="Remembering Not to Forget is a small charity established at the end of 2013 to fundraise to support people impacted by dementia." />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="author" type="text/plain" href="<?php bloginfo('url') ?>/wp-content/themes/rnf/humans.txt" />
	<link rel="shortcut icon" href="<?php bloginfo('url') ?>/wp-content/themes/rnf/favicon.ico" type="image/x-icon">
	
	<?php wp_head(); ?>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-46963552-1', 'auto');
      ga('send', 'pageview');

    </script>
</head>

<body>

	<div class="container page">
            
        <div class="row m-t">
            <div class="col-lg-1 col-sm-2 col-xs-4 text-center">
                <a href="<?php bloginfo('url') ?>/" class="logo">
                    Remembering Not to Forget
                </a>
            </div>
            <div class="col-lg-5 col-md-7 col-sm-10 col-xs-12 hidden-xs">   
                
	            <h1><a href="<?php bloginfo('url') ?>/"><?php bloginfo('name'); ?></a></h1>

	            <div id="sitedescription" class="text-dark">
	                <?php bloginfo('description'); ?>
	            </div>
                
            </div>

            <div class="col-md-6 text-right m-t m-b">
                <ul class="social-icons">
                    <li>
                        <a href="<?php echo get_option('socialfacebook'); ?>">
                            <span class="social-icon iconfbook"></span>
                            <span class="sr-only">Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo get_option('socialtwitter'); ?>">
                            <span class="social-icon icontwitter"></span>
                            <span class="sr-only">Twitter</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo get_option('socialinstagram'); ?>">
                            <span class="social-icon iconinsta"></span>
                            <span class="sr-only">Instagram</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo get_option('socialyoutube'); ?>">
                            <span class="social-icon iconyoutube"></span>
                            <span class="sr-only">Youtube</span>
                        </a>
                    </li>
                </ul>
	            <a class="btn btn-lg btn-success" href="https://mydonate.bt.com/donation/start.html?charity=143287">
                    Donate Now
                </a>	
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
                    <a class="navbar-brand" href="<?php bloginfo('url') ?>/">Remembering Not To Forget</a>
                </div>

               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php wp_nav_menu( array('menu' => 'RNF Navigation Menu', 'container' => '', 'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>' )); ?>
                </div>
            </div>
        </nav>
            
        <div class="main-content-block">
            <section>
            <!-- HEADER END -->