<?php

get_header(); ?>
	<!-- PAGE START -->
	<!-- <?php the_ID(); ?> -->

	<div class="row">
    	<div class="col-md-8">

    		<?php if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('<p id="breadcrumbs" class="breadcrumb">','</p>');
			} ?>
			
	        <h2>Where is your money going?</h2>

            <div class="alert alert-info">
                <p>Would your organisation like to benefit from the funds that <a href="/">Remembering Not to Forget</a> 
                    raises?</p>
                <p>Contact us with your details <a href="/contact-us/">here</a>.</p>
            </div>

            <p>Our fundraising income (before Gift Aid) for 2014 was a fantastic £12,502.31! All donations from 
                individuals raised during 2014 have been/ are in the process of being donated directly to organisations 
                supporting people impacted by dementia. We have shared these donations between our chosen organisations 
                in the proportions set out below.</p>
            
            <p>For 2014 there are then some specific costs associated with the Kilimanjaro trek which have been covered 
                from gift aid claims and specific fundraising undertaken by Laura and Jon.</p>
    
            <p>Any surplus from the gift aid / specific fundraising will be shared between our nominated charities in 
                the same proportions.</p>

            <p>If you have any questions about how funds are being distributed please <a href="/contact-us/">contact us</a>.</p>

            <p><a href="http://rememberingnottoforget.org.uk/wp-content/uploads/2015/11/RNF_accounts-2014-combined-signed.pdf" 
                target="_blank">Our accounts to 31 December 2014</a></p>

            <p>The recipient organisations for funds raised in 2015 will be agreed by trustees early in 2016, and 
                details shared here.</p>      

	        <h3 class="text-center">Share of funds raised in 2014</h3>
            
	        <canvas id="charities"></canvas>

            <hr />

            <div class="row"><!--Charity 1-->
                
                <div class="col-sm-4 text-center">
                	<h3 class="media-heading">Alzheimers Society</h3>
                    <a href="http://www.alzheimers.org.uk/" target="_blank" title="Alzheimers Society">
                        <img width="160" height="68" src="/wp-content/themes/rnf/images/In_aid_of_Alzheimers_logo.jpg" 
                        class="charitylogospacer" alt="Charity Alzheimers">
                    </a>
                    <br /><small>Charity Reg: 296645</small>
                	<p class="lead">£3,750.69 (30%)</p>
                </div>
                <div class="col-sm-8">
                    <p>National organisation providing information and local support services, research, training, 
                        campaigning and awareness raising. Our donation will be going to support campaigning and
                        research work as well as providing direct services in Somerset &amp; Dorset such as vital social 
                        support networks like Memory cafes, Singing for the Brain groups and groups for younger people 
                        living with dementia. 14% of all donations goes into general funds to support the vital 
                        administration and fundraising functions that support the rest of their fantastic work.</p>
                </div>
            </div>

            <hr />

            <div class="row"><!--Charity 2-->
                
                <div class="col-sm-4 text-center">
                	<h3 class="media-heading">Brace</h3>
                    <a href="http://www.alzheimers-brace.org/" target="_blank" title="Brace">
                        <img width="122" height="58" src="/wp-content/themes/rnf/images/brace_logo_112x48.jpg" 
                        alt="Brace Logo" class="charitylogospacer">
                    </a>
                    <br /><small>Charity Reg: 297965</small>
                	<p class="lead">£3,750.69 (30%)</p>
                </div>
                <div class="col-sm-8">
                    <p>Supports dementia research at universities in the West of England and Cardiff, aiming to 
                        help medical science understand the causes of dementia, find ways of diagnosing it earlier 
                        and more accurately, and develop more effective treatments. Ultimately, they want to help 
                        science beat dementia. Our donation will be supporting this work. 
                        <a href="http://www.alzheimers-brace.org/" target="_blank">Read more about the research 
                            they support</a>.</p>
                </div>
            </div>

            <hr />

            <div class="row"><!--Charity 3-->
                
                <div class="col-sm-4 text-center">
                	<h3 class="media-heading">Reminiscence Learning</h3>
                    <a href="http://reminiscencelearning.co.uk/" target="_blank" title="Reminiscence Learning">
                        <img width="200" src="/wp-content/themes/rnf/images/REm001small.jpg" 
                        alt="Reminiscence Learning Logo" class="charitylogospacer">
                    </a>
                    <br /><small>Charity Reg: 1105488</small>
                	<p class="lead">£1,250.23 (10%)</p>
                </div>
                <div class="col-sm-8">
                    <p>Somerset based charity providing training for dementia care to individuals and professionals 
                        and leading the <a href="http://www.reminiscencelearning.co.uk/archie" 
                        target="_blank">Archie Project</a> - an innovative, award winning intergenerational dementia 
                        awareness community project. The majority of the funds raised will support the launch of the 
                        Archie project in Wiveliscombe (Ali and Helen’s home town).</p>
                </div>
            </div>

            <hr />

            <div class="row"><!--Charity 4-->
                
                <div class="col-sm-4 text-center">
                	<h3 class="media-heading">Dementia UK</h3>
                    <a href="https://www.dementiauk.org/" target="_blank" title="Dementia UK">
                        <img width="160" height="58" src="/wp-content/themes/rnf/images/charity_dementiauk_150x48.jpg" 
                        alt="Charity Dementiauk" class="charitylogospacer">
                    </a>
                    <br /><small>Charity Reg: 1039404</small>
                	<p class="lead">£625.11 (5%)</p>
                </div>
                <div class="col-sm-8">
                    <p>Provides dementia care nurses who support the person with dementia and family carers. 
                        Our donation will provide a specialist nurse to offer practical and emotional support to 
                        thirty one families affected by dementia.</p>
                </div>
            </div>

            <hr />

            <div class="row"><!--Charity 5-->
                
                <div class="col-sm-4 text-center">
                	<h3 class="media-heading">Alzheimer's Research</h3>
                    <a href="http://www.alzheimersresearchuk.org/" target="_blank" title="Alzheimer's Research">
                        <img width="142" height="60" src="/wp-content/themes/rnf/images/aruk_logo.png" 
                        alt="Alzheimer's Research UK Logo" class="charitylogospacer">
                    </a>
                    <br /><small>Charity Reg: 1077089</small>
                	<p class="lead">£625.11 (5%)</p>
                </div>
                <div class="col-sm-8">
                    <p>Working to find preventions, causes, treatments and cures for dementia. They aim to energise 
                        a movement across society to support, fund and take part in dementia research. They aim to 
                        empower people across all generations through a greater understanding of dementia. 
                        Our donation will support this work.</p>
                </div>
            </div>

            <hr />

            <div class="row"><!--Charity 6-->
                
                <div class="col-sm-4 text-center">
                	<h3 class="media-heading">Playlist for Life</h3>
                    <a href="http://www.playlistforlife.org.uk/" target="_blank" title="Playlist for Life">
                        <img width="211" height="55" src="/wp-content/themes/rnf/images/playlistforlife_logo2.png" 
                            alt="Playlist for Life Logo" class="charitylogospacer">
                    </a>
                    <br /><small>Charity Reg: SC044072</small>
                	<p class="lead">£625.11 (5%)</p>
                </div>
                <div class="col-sm-8">
                    <p>Encourage the use of personally meaningful music in the care and treatment of people with 
                        dementia.</p>
                    <p>Charity set up by Sally Magnusson, author of <a href="http://www.tworoadsbooks.com/non-fiction/where-memories-go-sally-magnusson/" 
                        target="_blank">Where Memories Go</a>, a moving and honest account of caring for someone 
                        living with dementia (recommended reading!). They encourage and support the use of music 
                        in the care and treatment of people with dementia, helping families to create a playlist 
                        of personally meaningful music to help unlock memories. Our donation will be used to develop 
                        and train volunteers to support this work.</p>
                </div>
            </div>

            <hr />

            <div class="row"><!--Charity 7-->
                <div class="col-sm-4 text-center">
                	<h3 class="media-heading">Local Services in Chard and Wiveliscombe</h3>
                	<p class="lead">£1875.33 15%</p>
                </div>
                <div class="col-sm-8">
                    <p>£461 was used to buy resources for the Memory Cafe and Singing for the Brain groups run by the 
                        Alzheimer’s Society in Taunton; art supplies, a Wii fit and games and some musical handbells. 
                        The Memory Cafe and Singing for the Brain run on alternate weeks offering activities and a 
                        social space for people living with dementia and their carers to meet up.</p>
                    <p>£461 was donated to Braemar house day care centre in Taunton to support activities for people 
                        living with dementia; a karaoke machine and CDs and craft materials, as well as a contribution 
                        of just over £100 to the entertainments fund for future events. Ali and Helen’s mum attends 
                        these services and they have been a lifeline; you have helped us to strengthen this vital 
                        provision for people living with dementia in the Taunton area. Thank you!</p>
                    <p>£937.67 was donated to 'The Acorns' suite at Oaklodge Care Centre in Chard, Somerset (Laura's 
                        home town). The money has been used to spruce up the outside areas so that residents can 
                        safely enjoy the outdoors - this includes furniture, bird tables and raised garden beds. 
                        Also, games and pictures for the communal lounge areas have been purchased so residents can 
                        enjoy time with staff, family and each other. They do a wonderful job and the residents are 
                        well looked after so thank you!</p>
                </div>
            </div>

            <hr />

    </div><!-- .col-md-8 -->
    
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div><!-- .col-md-4 -->
    </div><!-- .row -->

<script type="text/javascript">
	    
    var pieData = [
	    {
		    value: 30,
		    color:"#00A4E4",
            highlight: "#45C6F9",
            label: "Alzheimer's Society"
	    },
	    {
		    value : 30,
		    color : "#ED1651",
            highlight: "#ED4371",
            label: "Brace"
	    },
	    {
		    value : 10,
		    color : "#926A81",
            highlight: "#927D89",
            label: "Reminiscence Learning"
	    },
	    {
		    value : 5,
		    color : "#0E538E",
            highlight: "#3895E6",
            label: "Dementia UK"
	    },
	    {
		    value : 5,
		    color : "#A7A8AB",
            highlight: "#D4D5D6",
            label: "Alzheimer's Research UK"
	    },
	    {
		    value : 5,
		    color : "#8CC63F",
            highlight: "#BCDE90",
            label: "Playlist For Life"
	    },
	    {
		    value : 15,
		    color : "#7F3F98",
            highlight: "#9F6CB3",
            label: "Other"
	    }
    ];

    var pieOptions = {
	    segmentShowStroke : true,
	    animateScale : true,
        responsive : true
    }

    var charities = document.getElementById("charities").getContext("2d");
    new Chart(charities).Pie(pieData, pieOptions);

    
</script>

	<!-- PAGE END -->
<?php get_footer(); ?>