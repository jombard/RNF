<!-- SIDEBAR START -->
<div class="panel panel-info">
    <div class="panel-heading">
        Sign up to our newsletter
    </div>
    <!-- Begin MailChimp Signup Form -->
    <div id="mc_embed_signup" class="panel-body">
        <form action="https://rememberingnottoforget.us3.list-manage.com/subscribe/post?u=4bbf97a920c7865dcf7b097ba&amp;id=f077e514d1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div class="form-group">Join our newsletter and get occasional updates on our challenges and fundraising progress.</div>
            <div id="mc_embed_signup_scroll">
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
<!--End mc_embed_signup-->
</div>

<div class="panel panel-info">
    <div class="panel-heading">Become a Dementia Friend</div>
    <div class="panel-body">
        <a href="http://www.dementiafriends.org.uk/" target="_blank">
            <img src="/wp-content/themes/rnf/images/dementiafriends.png" alt="dementia friends" class="img-responsive" />
        </a>
        <p>Register to become a Dementia Friend.</p>
        <a href="/dementia-friends/" class="btn btn-info">Find out more</a>
    </div>
</div>

<div class="panel panel-info">
    <div class="panel-heading">Latest Post</div>
    <?php
        $args = array('numberposts' => '1', 'post_status' => array('publish'));
        $recent_posts = wp_get_recent_posts($args);
        foreach ($recent_posts as $recent) { ?>
            <div>
                <a href="<?php echo get_permalink($recent["ID"]) ?>">
                    <?php if ( has_post_thumbnail($recent["ID"]) ) { 
                        echo get_the_post_thumbnail($recent["ID"], 'large', array( 'class' => "img-responsive"));
                    } ?>  
                    <div class="carousel-caption">
                        <div><?php echo $recent["post_title"] ?></div>
                        <div class="btn btn-info">View Post</div>
                    </div>
                </a>
            </div>
        <?php }
        wp_reset_query();
    ?>
</div>

<!-- SIDEBAR END -->
