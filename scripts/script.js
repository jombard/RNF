$(document).ready(function(){
	$(".gallery a").attr({
		"rel": "prettyPhoto[gal]",
		"class": "thumbnail",
		"title": function(){return $(this).parent().parent().find("figcaption").text();}
	});
	$("a[rel^='prettyPhoto']").prettyPhoto();
});