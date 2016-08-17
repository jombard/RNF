<!-- SIDEBAR START -->
<?php $isNotAboutUsPageOrChild = !is_page(9) && !is_page(671) && !is_page(673) && !is_page(675) ?>
<div class="<?php if($isNotAboutUsPageOrChild){echo ' hidden';} ?>">
    <h3>About Us</h3>
    <div class="list-group">
        <a class="list-group-item <?php if(is_page(9)){echo ' active';} ?>" href="/about/">About</a>
        <a class="list-group-item <?php if(is_page(671)){echo ' active';} ?>" href="/about/who-we-are/">Who we are</a>
        <a class="list-group-item <?php if(is_page(673)){echo ' active';} ?>" href="/about/about-dementia/">About dementia</a>
        <a class="list-group-item <?php if(is_page(675)){echo ' active';} ?>" href="/about/our-constitution/">Our constitution</a>
    </div>
</div>

<?php $isNotChallengePageOrChild = !is_page(12) && !is_tree(600) && !is_tree(534) && !is_tree(307) && !is_tree(321) ?>
<div class="<?php if($isNotChallengePageOrChild){echo ' hidden';} ?>">
    <h3>Previous Challenges</h3>
    <div class="list-group">
        <a href="/challenges/" class="list-group-item <?php if(is_page(12)){echo ' active';} ?>">Challenges</a>
        <a href="/challenges/2016-challenges/" class="list-group-item <?php if(is_page(600)){echo ' active';} ?>">2016 Challenges</a>
        <a href="/challenges/2015-challenges/" class="list-group-item <?php if(is_page(534)){echo ' active';} ?>">2015 Challenges</a>
        <a href="/challenges/2014-challenges/" class="list-group-item <?php if(is_page(307)){echo ' active';} ?>">2014 Challenges</a>
        <a href="/challenges/2013-challenges/" class="list-group-item <?php if(is_page(321)){echo ' active';} ?>">2013 Challenges</a>
    </div>
</div>

<h3>Directory of Resources</h3>
<p>Looking for more information about dementia? Check our handy list of resources:</p>
<a href="/resources" class="btn btn-info">Resources</a>


<h3>Sign up to our newsletter</h3>
<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup" class="panel">
    <form action="http://rememberingnottoforget.us3.list-manage2.com/subscribe/post?u=4bbf97a920c7865dcf7b097ba&amp;id=f077e514d1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <p>We promise to look after your email address and you can unsubscribe very easily at any time.</p>
        <div class="form-group">
            <input type="email" value="" name="EMAIL" class="form-control email" id="mce-EMAIL" placeholder="email address" required>
        </div>
        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;">
                <input type="text" name="b_4bbf97a920c7865dcf7b097ba_f077e514d1" value="">
        </div>
        <div class="clear">
            <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-info">Subscribe</button>
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Previous Newsletters <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="http://us3.campaign-archive2.com/?u=4bbf97a920c7865dcf7b097ba&id=6ab8a8dee4" target="_blank">February 2014</a></li>
                    <li><a href="http://us3.campaign-archive2.com/?u=4bbf97a920c7865dcf7b097ba&id=61594c5764" target="_blank">April 2014</a></li>
                    <li><a href="http://us3.campaign-archive1.com/?u=4bbf97a920c7865dcf7b097ba&id=a0f96e92a3" target="_blank">May 2014</a></li>
                    <li><a href="http://us3.campaign-archive2.com/?u=4bbf97a920c7865dcf7b097ba&id=906ffa93b6" target="_blank">July 2014</a></li>
                    <li><a href="http://us3.campaign-archive2.com/?u=4bbf97a920c7865dcf7b097ba&id=6195685a5e" target="_blank">September 2014</a></li>
                    <li><a href="http://us3.campaign-archive2.com/?u=4bbf97a920c7865dcf7b097ba&id=c3eae2f63f" target="_blank">February 2015</a></li>
                    <li><a href="http://us3.campaign-archive1.com/?u=4bbf97a920c7865dcf7b097ba&id=ddcb098582" target="_blank">July 2015</a></li>
                    <li><a href="http://us3.campaign-archive2.com/?u=4bbf97a920c7865dcf7b097ba&id=cd1f8a001b" target="_blank">January 2016</li>
                </ul>
            </div>
        </div>
    </form>
</div>
<!--End mc_embed_signup-->

<a href="/fundraising/" class="fundraiser-display">
    <div class="fundraiser-advert">
        Are you looking for a challenge?
    </div>
    <img src="http://rememberingnottoforget.org.uk/wp-content/uploads/2015/01/IMG1024.jpg" alt="challenge" class="img-responsive" />
</a>

<h3>Join us on social media</h3>
<a href="https://www.facebook.com/pages/Remembering-Not-To-Forget/235169236658679">
	<span class="social-icon iconfbook"></span>
</a>
<a href="https://twitter.com/rnf_uk">
	<span class="social-icon icontwitter"></span>
</a>
<a href="https://plus.google.com/103483767799511460203/videos?pageId=108152448772708944610">
	<span class="social-icon icongooglep"></span>
</a>
<a href="https://www.youtube.com/channel/UCsNKdIv9jMVGGJ8RLT2GDeQ">
    <span class="social-icon iconyoutube"></span>
</a>

<a href="http://www.dementiafriends.org.uk/" target="_blank">
    <img src="/wp-content/themes/rnf/images/dementiafriends.png" alt="dementia friends" style="padding:  10px;" />
</a>
<div class="col-sm-12">
<p>Dementia Friends is a nationwide initiative run by the Alzheimer's Society and funded by the government. It aims to improve people's understanding of dementia and its effects.</p>
<p>Find out how you, your business or organisation can get involved in Dementia Friends and help change the way people think, talk and act about dementia. Visit the <a href="http://www.dementiafriends.org.uk/" target="_blank">Dementia Friends website</a>.</p>
<p><a href="/">Remembering Not to Forget</a> runs <a href="http://www.dementiafriends.org.uk/" target="_blank">Dementia Friends</a> sessions - if you would like us to run one near you please <a href="/contact-us/">let us know</a>.</p>
</div>
<!-- SIDEBAR END -->
