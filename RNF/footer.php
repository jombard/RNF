<?php

?>

					</section>
                <div class="cleardiv"></div>
            </div>
        </div>

        <!-- FOOTER -->
	    <footer class="footer">
		    <div class="container">
			    <div class="row">
				    <div class="col-md-7 col-md-offset-1">
					    <a href="/">
						    <img src="/wp-content/themes/rnf/images/logo_tiny.png" alt="Flower">
						    <span class="lead">Remembering Not To Forget</span>
					    </a>
					    <p>Fundraising to support people impacted by dementia</p>
				    </div>
				    <div class="col-md-3 text-right">
					    <a href="https://www.facebook.com/pages/Remembering-Not-To-Forget/235169236658679">
						    <span class="iconfbook"></span>
					    </a>
					    <a href="https://twitter.com/rnf_uk">
						    <span class="icontwitter"></span>
					    </a>
					    <a href="https://plus.google.com/103483767799511460203/videos?pageId=108152448772708944610">
						    <span class="icongooglep"></span>
					    </a>
                        <a href="https://www.youtube.com/channel/UCsNKdIv9jMVGGJ8RLT2GDeQ">
						    <span class="iconyoutube"></span>
					    </a>
				    </div>
			    </div>
			
		    </div>
	    </footer>

	    <?php wp_footer(); ?>
        
        <script type="text/javascript">
          $(document).ready(function(){
          	$(".gallery a").attr({
          		"rel": "prettyPhoto[gal]",
          		"class": "thumbnail",
          		"title": function(){return $(this).parent().parent().find("figcaption").text();}
          	});
            $("a[rel^='prettyPhoto']").prettyPhoto();
          });
        </script>
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
        <!-- <?php echo get_num_queries(); ?> queries. <? timer_stop(1); ?> -->
    </body>
</html>