

//Recent donations, recent at the top
var recentDonations = [
	{
		name: "Elizabeth Grimsey",
		amount: 30.00,
		giftaid: true,
		date: "04/06/2015",
		comment: ""
	},
	{
		name: "Mary Maskell",
		amount: 25.00,
		giftaid: true,
		date: "01/06/2015",
		comment: ""
	},
	{
		name: "Paul Murphy",
		amount: 10.00,
		giftaid: true,
		date: "29/05/2015",
		comment: ""
	},
	{
		name: "Emma Davey",
		amount: 20.00,
		giftaid: true,
		date: "17/05/2015",
		comment: ""
	},
	{
		name: "Gillian Earle",
		amount: 15.00,
		giftaid: false,
		date: "14/05/2015",
		comment: ""
	},
	{
		name: "Mark Miller",
		amount: 50.00,
		giftaid: true,
		date: "13/05/2015",
		comment: ""
	},
	{
		name: "Michelle Frangos",
		amount: 20.00,
		giftaid: true,
		date: "11/05/2015",
		comment: ""
	},
	{
		name: "Marcus Read",
		amount: 10.00,
		giftaid: true,
		date: "10/05/2015",
		comment: ""
	},
	{
		name: "Simon Turnbull",
		amount: 24.00,
		giftaid: true,
		date: "03/05/2015",
		comment: ""
	},
	{
		name: "Lauren Kemble",
		amount: 10.00,
		giftaid: true,
		date: "03/05/2015",
		comment: ""
	},
	{
		name: "Alex",
		amount: 5.00,
		giftaid: true,
		date: "03/05/2015",
		comment: ""
	},
	{
		name: "Charlotte Butterfield",
		amount: 10.00,
		giftaid: true,
		date: "30/04/2015",
		comment: ""
	},
	{
		name: "Anne Corrick",
		amount: 40.00,
		giftaid: true,
		date: "30/04/2015",
		comment: ""
	},
	{
		name: "Heather Miller",
		amount: 30.00,
		giftaid: true,
		date: "27/04/2015",
		comment: ""
	},
	{
		name: "Tim Corrick",
		amount: 250.00,
		giftaid: true,
		date: "26/04/2015",
		comment: ""
	},
	{
		name: "Susan Sheridan",
		amount: 100.00,
		giftaid: true,
		date: "22/04/2015",
		comment: ""
	},
	{
		name: "Chris Brockway",
		amount: 10.00,
		giftaid: true,
		date: "22/04/2015",
		comment: ""
	},
	{
		name: "Kate Simpson",
		amount: 100.00,
		giftaid: true,
		date: "21/04/2015",
		comment: "Well done on the skydive. The mere idea terrifies me. Kate xx"
	},
	{
		name: "Camilla Groom",
		amount: 10.00,
		giftaid: true,
		date: "21/04/2015",
		comment: ""
	},
	{
		name: "Alison Baird",
		amount: 50.00,
		giftaid: true,
		date: "20/04/2015",
		comment: ""
	},
	{
		name: "Kristina Wilton",
		amount: 25.00,
		giftaid: true,
		date: "20/04/2015",
		comment: "It was fantastic jumping out of that plane with you guys :)"
	},
	{
		name: "Katy Mecklenburgh",
		amount: 20.00,
		giftaid: true,
		date: "19/04/2015",
		comment: ""
	},
	{
		name: "Iva Dixon",
		amount: 15.00,
		giftaid: true,
		date: "19/04/2015",
		comment: ""
	},
	{
		name: "Jennifer Groom",
		amount: 25.00,
		giftaid: false,
		date: "19/04/2015",
		comment: ""
	},
	{
		name: "Johanna Armstrong",
		amount: 15.00,
		giftaid: true,
		date: "18/04/2015",
		comment: ""
	},
	{
		name: "Mrs P Wright",
		amount: 100.00,
		giftaid: false,
		date: "17/04/2015",
		comment: ""
	},
	{
		name: "Sarah Naughton",
		amount: 10.00,
		giftaid: true,
		date: "17/04/2015",
		comment: ""
	},
	{
		name: "Bev Greenbank",
		amount: 5.00,
		giftaid: true,
		date: "17/04/2015",
		comment: ""
	},
	{
		name: "Vivienne Thomas",
		amount: 30.00,
		giftaid: false,
		date: "16/04/2015",
		comment: "Best of Luck! Full of admiration.x"
	},
	{
		name: "Jennifer Simons",
		amount: 20.00,
		giftaid: true,
		date: "16/04/2015",
		comment: ""
	},
	{
		name: "Nicola Evans",
		amount: 10.00,
		giftaid: true,
		date: "16/04/2015",
		comment: ""
	},
	{
		name: "Natasha White",
		amount: 50.00,
		giftaid: true,
		date: "16/04/2015",
		comment: ""
	},
	{
		name: "Jon Lombard",
		amount: 10.00,
		giftaid: true,
		date: "16/04/2015",
		comment: "Crazy!"
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
	var hiddenDon = 20;
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