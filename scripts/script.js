var RnfApp = {
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
	initPrettyPhoto: function(){
		$("a[rel^='prettyPhoto']").prettyPhoto();
	},
	setPhotoTitle: function(){
		$(".gallery a").attr({
			"rel": "prettyPhoto[gal]",
			"class": "thumbnail",
			"title": function(){return $(this).parent().parent().find("figcaption").text();}
		});
	},
	aboutUsScripts: function(){
        var hash = window.location.hash;
        var mbm = "#btnmember";
        if (hash === "#lauracorrick" 
            || hash === "#aliturnbull" 
            || hash === "#helenturnbull" 
            || hash === "#mattcorrick" 
            || hash === "#katesimpson") {
            mbm && $('ul.nav a[href="' + mbm + '"]').tab('show');
        }
        hash && $('ul.nav a[href="' + hash + '"]').tab('show');
	},
	init: function(){
		this.initChart();
		this.initIsotopeFilter();
		this.initPrettyPhoto();
		this.setPhotoTitle();
		this.aboutUsScripts();
	}
};

(function(){
	RnfApp.init();
})();

