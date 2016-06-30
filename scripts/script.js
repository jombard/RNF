$(document).ready(function(){
	$(".gallery a").attr({
		"rel": "prettyPhoto[gal]",
		"class": "thumbnail",
		"title": function(){return $(this).parent().parent().find("figcaption").text();}
	});
	$("a[rel^='prettyPhoto']").prettyPhoto();

	//Isotope Filter
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
});