

//Recent donations, recent at the top
var recentDonations = [
	{
		name: "Offline donations",
		amount: 496.00,
		giftaid: true,
		date: "10/05/2015",
		comment: ""
	},
	{
		name: "Martin Bluemel",
		amount: 20.00,
		giftaid: true,
		date: "10/05/2015",
		comment: ""
	},
	{
		name: "Lucy Turner",
		amount: 50.00,
		giftaid: true,
		date: "28/04/2015",
		comment: ""
	},
	{
		name: "Pippa Vile",
		amount: 10.00,
		giftaid: true,
		date: "26/04/2015",
		comment: ""
	},
	{
		name: "Sue Challacombe",
		amount: 10.00,
		giftaid: true,
		date: "25/04/2015",
		comment: ""
	},
	{
		name: "Timothy Waller",
		amount: 20.00,
		giftaid: true,
		date: "25/04/2015",
		comment: ""
	},
	{
		name: "Caroline Carreau",
		amount: 5.00,
		giftaid: true,
		date: "25/04/2015",
		comment: ""
	},
	{
		name: "Shirlene Hudgell",
		amount: 20.00,
		giftaid: true,
		date: "23/04/2015",
		comment: ""
	},
	{
		name: "Alison Collins",
		amount: 10.00,
		giftaid: true,
		date: "22/04/2015",
		comment: ""
	},
	{
		name: "Kate Evans",
		amount: 30.00,
		giftaid: true,
		date: "04/04/2015",
		comment: ""
	},
	{
		name: "Amanda Tubb",
		amount: 10.00,
		giftaid: true,
		date: "04/04/2015",
		comment: ""
	},
	{
		name: "Saba Harrison",
		amount: 10.00,
		giftaid: true,
		date: "03/04/2015",
		comment: ""
	},
	{
		name: "Judy Armstrong",
		amount: 10.00,
		giftaid: true,
		date: "21/03/2015",
		comment: "Good luck Jo. Love Auntie Judy & Uncle Peter"
	},
	{
		name: "Michelle Hawkings",
		amount: 10.00,
		giftaid: true,
		date: "20/03/2015",
		comment: "You go girl!! What an amazing thing u r doing xxxxx"
	},
	{
		name: "Claire Southcott",
		amount: 10.00,
		giftaid: true,
		date: "11/03/2015",
		comment: "Good luck Aunty Jo!!!! Love from Naomi xxxxxxx I hope you win!!!!!! Love from Oliver xxxxxxxxxxxxxx"
	},
	{
		name: "Claire Southcott",
		amount: 26.00,
		giftaid: true,
		date: "11/03/2015",
		comment: ""
	},
	{
		name: "Sue Treseder",
		amount: 20.00,
		giftaid: true,
		date: "15/02/2015",
		comment: ""
	},
	{
		name: "Hayley Mortimer",
		amount: 30.00,
		giftaid: true,
		date: "15/02/2015",
		comment: ""
	},
	{
		name: "Lucy Turner",
		amount: 30.00,
		giftaid: true,
		date: "15/02/2015",
		comment: ""
	},
	{
		name: "Emma Louise Harper",
		amount: 10.00,
		giftaid: true,
		date: "15/02/2015",
		comment: ""
	},
	{
		name: "Laura & Jon",
		amount: 10.00,
		giftaid: true,
		date: "02/02/2015",
		comment: "You're amazing Jo - thank you! Enjoy the awesome experience!"
	},
	{
		name: "Helen Turnbull",
		amount: 50.00,
		giftaid: true,
		date: "18/01/2015",
		comment: "Good luck Jo! Thanks so much for choosing RNF, it means a lot xx"
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
	},
	{
		value: moneyRemaining,
		color: "#00A4E4",
		highlight: "#59C2EB",
		label: "Remaining"
	}/*,
	{
		value: moneyRemaining,
		color: "#EECB04",
		highlight: "#EDD238",
		label: "Remaining"
	}*/
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
document.getElementById('fundsTotal').innerHTML = moneyTotal.toFixed(2);


$(document).ready(function () {
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
	if(listDonations > 10) {
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