<?php

?>

					</section>
                <div class="clearfix"></div>
            </div>
        </div>

        <!-- FOOTER -->
	    <footer class="footer">
		    <div class="container">
			    <div class="row">
				    <div class="col-md-6 text-center text-md-left">
				    	<p>Copyright &copy; <?php echo date("Y") ?> <a href="/"><?php bloginfo('name'); ?></a><br />
					    <span class="text-muted">Registered Charity No. 1166415</span></p>
			    	</div>
			    	<div class="col-md-6 text-center text-md-right">
				    	<p><a href="/privacy-policy">Privacy Policy</a> | <a href="/terms-and-conditions/">Terms and Conditions</a></p>
				    </div>
			    </div>
			
		    </div>
	    </footer>

	    <?php wp_footer(); ?>
        
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-46963552-1', 'rememberingnottoforget.org.uk');
            ga('send', 'pageview');
            
        </script>

        <script src="/wp-content/themes/rnf/scripts/jquery-1.10.2.min.js"></script>
		<script src="/wp-content/themes/rnf/scripts/bootstrap.min.js"></script>
	    <script src="/wp-content/themes/rnf/scripts/isotope.pkgd.min.js"></script>
	    <script src="/wp-content/themes/rnf/scripts/chart.min.js"></script>
	    <script src="/wp-content/themes/rnf/script.js"></script>
        <!-- <?php echo get_num_queries(); ?> queries. <? timer_stop(1); ?> -->
    </body>
</html>