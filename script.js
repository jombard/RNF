(function(rnfApp, jQuery) {

	function replaceLowResImages(){
		var placeholders = jQuery('.placeholder');
		var th = 0;

		var unveil = function() {

			var inview = placeholders.filter(function(){
				var placeholder = jQuery(this);
				if (placeholder.hasClass("loaded")) return;
			
				var wt = jQuery(window).scrollTop(),
				wb = wt + jQuery(window).height(),
				et = placeholder.offset().top,
				eb = et + placeholder.height();

				return eb >= wt - th && et <= wb + th;
			});

			jQuery.each(inview, function(i, val){
				var pholder = jQuery(val);
				var small = pholder.find('.img-small')

				// load large image
				var imgLarge = new Image();
				imgLarge.src = pholder.data('large'); 
				imgLarge.onload = function () {
					imgLarge.classList.add('loaded');
				};
				pholder.append(imgLarge);
				pholder.addClass('loaded');
			});
		};

		jQuery(window).on("scroll resize lookup", unveil);

		unveil();
	};

	function initTotalDistanceChart(){

		var addKilometers = function(distance) {
			return distance.toLocaleString() + ' km';
		};

		var addMiles = function(distance) {
			var convertToMiles = 1.609344;
			return Math.round(distance/convertToMiles).toLocaleString() + ' mi';
		};

		var getDistanceCovered = function(){
			return jQuery.ajax({
	            type: "GET",
	            url: "https://rememberingnottoforget.org.uk/wp-content/themes/rnf/RoundTheWorld.json",
	            contentType: "application/json; charset=utf-8",
	            dataType: "json"
	        }).error(function(err, e){
	        	console.log(err, e);
	        });
		};

		var buildChart = function(distanceCovered, distanceRemaining){
			var distanceData = [
				{
					value: distanceCovered,
					color: "#7F3F98",
					highlight: "#9E5FB7",
					label: "Total distance covered in kilometers"
				},
				{
					value: distanceRemaining,
					color: "#00A4E4",
					highlight: "#59C2EB",
					label: "Total distance remaining in kilometers"
				}
			];

			var chartOptions = {
			    segmentShowStroke : true,
			    animateScale : true,
		        responsive : true
		    }

			var chartElement = document.getElementById("divTotalDistance").getContext("2d");
		    new Chart(chartElement).Pie(distanceData, chartOptions);
		};

		var buildContributorsTable = function(contributors){
			var div = jQuery("<div />");
			jQuery("#lastActivity").after(div);

			var contributorsDiv = jQuery("<div />");
			div.append(contributorsDiv);
			contributorsDiv.hide();

			for(var athlete in contributors) {
				var divRow = jQuery("<div />").addClass("row");
				var divAthlete = jQuery("<div />").addClass("col-sm-4").html(athlete);
				var divKm = jQuery("<div />").addClass("col-sm-4").html(addKilometers(Math.round(contributors[athlete].total / 1000)));
				var divMi = jQuery("<div />").addClass("col-sm-4").html(addMiles(contributors[athlete].total / 1000));
				contributorsDiv.append(divRow.append(divAthlete).append(divKm).append(divMi))
			}

			var viewContributorsLink = jQuery("<a />").attr("href", "#").html("View Contributions <i class='glyphicon glyphicon-chevron-down'></i>");
			viewContributorsLink.on("click", function(e){
				jQuery(this).find(".glyphicon").toggleClass("glyphicon-chevron-down glyphicon-chevron-up")
				e.preventDefault();
				contributorsDiv.slideToggle();
			});
		};

		var buildDistanceStatsTable = function(totalDistance, distanceCovered, distanceRemaining, lastUpdateTime){
			jQuery("#distanceTotal").html(addKilometers(totalDistance) + "<br>" + addMiles(totalDistance));
		    jQuery("#distanceCovered").html(addKilometers(distanceCovered) + "<br>" + addMiles(distanceCovered));
		    jQuery("#distanceRemaining").html(addKilometers(distanceRemaining) + "<br>" + addMiles(distanceRemaining));
		    jQuery("#lastActivity").html("<small class='text-muted'>Last updated: " + lastUpdateTime.toLocaleDateString() + "</small>");
		};

		getDistanceCovered().then(function(result){
			var lastUpdateTime = new Date(result.lastUpdateTime);
			var distanceCovered = result.totalDistance;
			var totalDistance = 80152;
			var distanceRemaining = totalDistance - distanceCovered;

			if(distanceRemaining < 0) {
				distanceRemaining = 0;
			}

			buildChart(distanceCovered, distanceRemaining);
			buildContributorsTable(result.athletes);
			buildDistanceStatsTable(totalDistance, distanceCovered, distanceRemaining, lastUpdateTime)
		});

	};

	function initChart(){
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
	};

	function initIsotopeFilter(){
		// challenge page mosaic
		var $container = jQuery('.portfolio');
	    $container.isotope({
	        filter: '*',
	        animationOptions: {
	            duration: 750,
	            easing: 'linear',
	            queue: false
	        }
	    });

	    jQuery('nav.primary ul a').click(function () {
	        var selector = jQuery(this).attr('data-filter');
	        $container.isotope({
	            filter: selector,
	            animationOptions: {
	                duration: 750,
	                easing: 'linear',
	                queue: false
	            }
	        });
	        return false;
	    });

	    var $optionSets = jQuery('nav.primary ul'),
	    $optionLinks = $optionSets.find('a');

	    $optionLinks.click(function () {
	        var $this = jQuery(this);
	        if ($this.hasClass('selected')) {
	            return false;
	        }
	        var $optionSet = $this.parents('nav.primary ul');
	        $optionSet.find('.selected').removeClass('selected');
	        $this.addClass('selected');
	    });
	};

	function initGalleryCarousel(){
		var gallery = jQuery(".gallery");
		var carousel = jQuery("<div />").attr({"id": "gallery-carousel", "data-ride": "carousel"}).addClass("carousel");
		gallery.after(carousel);
		carousel.append(gallery);

		carousel.find(".gallery").addClass("carousel-inner").find(".gallery-item").addClass("item");

		var items = carousel.find(".item");
		items.eq(0).addClass("active");

		var indicators = jQuery("<ol />").addClass("carousel-indicators");
		for (var i = 0; i < items.length; i++) {
			indicators.append(jQuery("<li />").attr({"data-target": "#gallery-carousel", "data-slide-to": i}).addClass(i === 0 ? "active" : ""));
		}
		carousel.prepend(indicators);

		var leftControl = jQuery("<a />").addClass("left carousel-control").attr({"href": "#gallery-carousel", "role": "button", "data-slide": "prev"}).html("<span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>");
		var rightControl = jQuery("<a />").addClass("right carousel-control").attr({"href": "#gallery-carousel", "role": "button", "data-slide": "next"}).html("<span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>");
		carousel.append(leftControl).append(rightControl);
	};
	
	function initStickyNav() {
		var navbar = document.getElementById("navbar");

		var sticky = navbar.offsetTop;

		function stickyNav() {
			if (window.pageYOffset >= sticky) {
				navbar.classList.add("sticky")
			} else {
				navbar.classList.remove("sticky");
			}
		}

		window.addEventListener("scroll", stickyNav);
	};

	rnfApp.init = function(){
		replaceLowResImages();
		if ( jQuery("#charities").length ) {
			this.initChart();
		}
		initIsotopeFilter();
		initGalleryCarousel();
		if ( jQuery('#divTotalDistance').length ) {
			initTotalDistanceChart();
		}

		initStickyNav();
	};
})(window.rnfApp = window.rnfApp || {}, window.jQuery = jQuery || {});

(function(){
	window.rnfApp.init();
})();


