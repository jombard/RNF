<?php

?>

                <div class="clearfix" style="margin-bottom: 250px;"></div>
        </div>

        <!-- FOOTER -->
	    <footer class="footer">
		    <div class="container">
			    <div class="row">
				    <div class="col-md-6 text-center text-md-left">
				    	<div>Copyright &copy; <?php echo date("Y") ?> <a href="/"><?php bloginfo('name'); ?></a></div>
					    <div class="text-muted">Registered Charity No. 1166415</div>
					    <small><a href="/privacy-policy">Privacy Policy</a> | <a href="/terms-and-conditions/">Terms and Conditions</a></small>
			    	</div>
			    	<div class="col-md-6 text-center text-md-right">
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
				    </div>
			    </div>
			
		    </div>
	    </footer>

	    <?php wp_footer(); ?>

        <!-- <?php echo get_num_queries(); ?> queries. <? timer_stop(1); ?> -->
    </body>
</html>