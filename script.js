var RnfApp = {
	replaceLowResImages: function(){
		var placeholders = $('.placeholder');

		$.each(placeholders, function(i, val){
			var placeholder = $(val);
			var small = placeholder.find('.img-small')

			// 1: load small image and show it
			var img = new Image();
			img.src = small.attr("src");
			img.onload = function () {
				small.addClass('loaded');
			};

			// 2: load large image
			var imgLarge = new Image();
			imgLarge.src = placeholder.data('large'); 
			imgLarge.onload = function () {
				imgLarge.classList.add('loaded');
			};
			placeholder.append(imgLarge);
		});
	},
	initTotalDistanceChart: function(){

		var getDistanceCovered = function(){
			return $.ajax({
	            type: "GET",
	            url: "https://rememberingnottoforget.org.uk/wp-content/themes/rnf/RoundTheWorld.json",
	            contentType: "application/json; charset=utf-8",
	            dataType: "json"
	        }).error(function(err, e){
	        	console.log(err, e);
	        });
		};

		getDistanceCovered().then(function(result){
			var spreadsheetDistances = result.spreadsheetDistances;
			var stravaDistances = result.stravaDistances;
			var lastUpdateTime = result.lastUpdateTime;

			var distanceCovered = stravaDistances + spreadsheetDistances;
			var totalDistance = 40076;
			var distanceRemaining = totalDistance - distanceCovered;

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

			var distance = document.getElementById("divTotalDistance").getContext("2d");
		    new Chart(distance).Pie(distanceData, chartOptions);

	    	var addKilometers = function(distance) {
	    		return distance.toLocaleString() + ' km';
	    	}

	    	var addMiles = function(distance) {
				var convertToMiles = 1.609344;
	    		return Math.round(distance/convertToMiles).toLocaleString() + ' mi';
	    	}

		    $("#distanceTotal").html(addKilometers(totalDistance) + "<br>" + addMiles(totalDistance));
		    $("#distanceCovered").html(addKilometers(distanceCovered) + "<br>" + addMiles(distanceCovered));
		    $("#distanceRemaining").html(addKilometers(distanceRemaining) + "<br>" + addMiles(distanceRemaining));
		    $("#lastActivity").html("<small class='text-muted'>Last updated: " + lastUpdateTime + "</small>");

		});

	},
	initChart: function(){
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
	},
	initIsotopeFilter: function(){
		// challenge page mosaic
		var $container = $('.portfolio');
	    $container.isotope({
	        filter: '*',
	        animationOptions: {
	            duration: 750,
	            easing: 'linear',
	            queue: false
	        }
	    });

	    $('nav.primary ul a').click(function () {
	        var selector = $(this).attr('data-filter');
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

	    var $optionSets = $('nav.primary ul'),
	    $optionLinks = $optionSets.find('a');

	    $optionLinks.click(function () {
	        var $this = $(this);
	        if ($this.hasClass('selected')) {
	            return false;
	        }
	        var $optionSet = $this.parents('nav.primary ul');
	        $optionSet.find('.selected').removeClass('selected');
	        $this.addClass('selected');
	    });
	},
	initGalleryCarousel: function(){
		var gallery = $(".gallery");
		var carousel = $("<div />").attr({"id": "gallery-carousel", "data-ride": "carousel"}).addClass("carousel");
		gallery.after(carousel);
		carousel.append(gallery);

		carousel.find(".gallery").addClass("carousel-inner").find(".gallery-item").addClass("item");

		var items = carousel.find(".item");
		items.eq(0).addClass("active");

		var indicators = $("<ol />").addClass("carousel-indicators");
		for (var i = 0; i < items.length; i++) {
			indicators.append($("<li />").attr({"data-target": "#gallery-carousel", "data-slide-to": i}).addClass(i === 0 ? "active" : ""));
		}
		carousel.prepend(indicators);
	},
	init: function(){
		this.replaceLowResImages();
		if ( $( "#charities" ).length ) {
			this.initChart();
		}
		this.initIsotopeFilter();
		this.initGalleryCarousel();
		if ( $( '#divTotalDistance').length) {
			this.initTotalDistanceChart();
		}
	}
};

(function(){
	RnfApp.init();
})();


