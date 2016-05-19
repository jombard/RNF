

//Recent donations, recent at the top
var recentDonations = [
	{
		name: "Holly Lewis",
		amount: 10.00,
		giftaid: true,
		date: "06/04/2016",
		comment: ""
	},
	{
		name: "Susan Sheridan",
		amount: 100.00,
		giftaid: true,
		date: "02/04/2016",
		comment: ""
	},
	{
		name: "Samantha Saunders",
		amount: 20.00,
		giftaid: true,
		date: "02/04/2016",
		comment: "Sarah and family, so sorry for your loss. Sam xx"
	},
	{
		name: "Gavin Sinkowski",
		amount: 10.00,
		giftaid: true,
		date: "01/04/2016",
		comment: ""
	},
	{
		name: "Vicky Hannaford",
		amount: 10.00,
		giftaid: true,
		date: "31/03/2016",
		comment: "Keep up your good work"
	},
	{
		name: "Katherine Cooper",
		amount: 30.00,
		giftaid: true,
		date: "31/03/2016",
		comment: ""
	},
	{
		name: "Katherine Cooper",
		amount: 30.00,
		giftaid: true,
		date: "31/03/2016",
		comment: ""
	},
	{
		name: "Sarah Simons",
		amount: 50.00,
		giftaid: true,
		date: "31/03/2016",
		comment: ""
	},
	{
		name: "Jennifer Simons",
		amount: 50.00,
		giftaid: true,
		date: "30/03/2016",
		comment: "Keep up the fantastic work."
	}
];

//Total money raised - sums amount value from object array
var moneyRaised = 0; 
var giftAid = 0;

for (var i in recentDonations){
	moneyRaised += recentDonations[i].amount;
	if(recentDonations[i].giftaid){
		giftAid += ((recentDonations[i].amount * 25) / 100);
	}
};

//moneyRaised += giftAid;

//Total money goal - updates graph and label
var moneyTotal = 1000; 
var moneyRemaining = moneyTotal - moneyRaised;


//Build Chart
var pieData = [
	{
		value: moneyRaised,
		color: "#7F3F98",
		highlight: "#9E5FB7",
		label: "Raised"
	}
];

//Chart Options
window.onload = function(){
	var ctx = document.getElementById("chart-area").getContext("2d");
	window.myPie = new Chart(ctx).Pie(pieData,{
		showTooltips: true,
		animateScale: true
	});
};

//Add decimals to values
document.getElementById('fundsRaised').innerHTML = moneyRaised.toFixed(2);
//document.getElementById('fundsTotal').innerHTML = moneyTotal.toFixed(2);


$(document).ready(function () {
$('#fundsTotal').parent().parent().hide();

	//Build list of donors and place on commentcontainer class
	function listDonations() {
		var newHTML = [];
		for (var i = 0; i < recentDonations.length; i++) {
			newHTML.push('<div class="donationfrom donation' + [i] + '" ">'
	    	+ '<p class="col-xs-6 col-md-6"><strong>' + recentDonations[i].name + '</strong></p>' 
	    	+ '<p class="col-xs-6 col-md-6 donationamount">' + '£' + recentDonations[i].amount.toFixed(2) + '</p>'
	    	+ '<p class="col-xs-12 col-md-12"><strong>'+ recentDonations[i].date +'</strong> '+  recentDonations[i].comment +'</p>' 
	    	+ '<div class="clearfix"></div>'
	    	+ '</div>');
		}
		$(".commentcontainer").html(newHTML.join(""));
	};
	listDonations();

	//Hide donors when list gets too big
	var hiddenDon = 10;
	if(recentDonations.length > 10) {
	$("#unhidedonations").click(function(){
		hiddenDon = recentDonations.length;
		unhideDonations();
		$("#unhidedonations").hide();
	})
	} else {
		$("#unhidedonations").hide();
	}
	function unhideDonations(){
		for (var j = 0; j < hiddenDon; j++){
			$(".donation" + [j]).fadeIn(500);
		}
	}
	unhideDonations();
	
});