

//Recent donations, recent at the top
var recentDonations = [
	{
		name: "Kathryn Simpson",
		amount: 100.00,
		giftaid: true,
		date: "03/06/2015",
		comment: "Well done Fi. Sorry for being a tardy sponsor-er..."
	},
	{
		name: "Amy Durham",
		amount: 20.00,
		giftaid: true,
		date: "03/06/2015",
		comment: "Cracking Achievement Fiona. Well Done x"
	},
	{
		name: "Natalie Smith",
		amount: 5.00,
		giftaid: true,
		date: "02/06/2015",
		comment: ""
	},
	{
		name: "Natalie Barb",
		amount: 225.00,
		giftaid: true,
		date: "01/06/2015",
		comment: ""
	},
	{
		name: "Helen Wright",
		amount: 55.00,
		giftaid: true,
		date: "01/06/2015",
		comment: ""
	},
	{
		name: "Tom Duggan",
		amount: 1000.00,
		giftaid: true,
		date: "01/06/2015",
		comment: ""
	},
	{
		name: "Matthew Haworth",
		amount: 70.00,
		giftaid: true,
		date: "31/05/2015",
		comment: ""
	},
	{
		name: "Sophie Lunt",
		amount: 30.00,
		giftaid: true,
		date: "31/05/2015",
		comment: ""
	},
	{
		name: "Lisa Liakakou",
		amount: 10.00,
		giftaid: true,
		date: "31/05/2015",
		comment: "Loads of luck for a tough challenge in dreadful weather! Well, it is here anyway. Great cause x Looking forward to seeing you next week x"
	},
	{
		name: "Georgia Chapman",
		amount: 10.00,
		giftaid: true,
		date: "31/05/2015",
		comment: ""
	},
	{
		name: "Louise Barker",
		amount: 10.00,
		giftaid: true,
		date: "31/05/2015",
		comment: ""
	},
	{
		name: "Philippa Cantwell",
		amount: 50.00,
		giftaid: true,
		date: "29/05/2015",
		comment: "Good luck, Fiona, you daft bat. Keep away from the tarmac, and stay upright at all times. Pip x"
	},
	{
		name: "Adriaan Commandeur",
		amount: 30.00,
		giftaid: true,
		date: "29/05/2015",
		comment: ""
	},
	{
		name: "Illuminated Canvas Ltd",
		amount: 20.00,
		giftaid: true,
		date: "28/05/2015",
		comment: ""
	},
	{
		name: "Smita Sidher",
		amount: 55.00,
		giftaid: true,
		date: "25/05/2015",
		comment: "Good Luck, Fiona. ☺☺☺ Smita, Sunil and Sidharth"
	},
	{
		name: "K J van Dam",
		amount: 10.00,
		giftaid: true,
		date: "25/05/2015",
		comment: ""
	},
	{
		name: "Rebecca Milligan",
		amount: 100.00,
		giftaid: true,
		date: "25/05/2015",
		comment: ""
	},
	{
		name: "Kirsty Howland",
		amount: 10.00,
		giftaid: true,
		date: "23/05/2015",
		comment: ""
	},
	{
		name: "Jo",
		amount: 30.00,
		giftaid: true,
		date: "22/05/2015",
		comment: "Good luck with the big cycle ride! Well done to you for doing this. Jo"
	},
	{
		name: "Kym Aston",
		amount: 55.00,
		giftaid: false,
		date: "21/05/2015",
		comment: ""
	},
	{
		name: "Jane Simmons",
		amount: 20.00,
		giftaid: true,
		date: "21/05/2015",
		comment: "Good Luck Fiona! Love from the Simmons Family"
	},
	{
		name: "Heidi Peachey",
		amount: 20.00,
		giftaid: true,
		date: "20/05/2015",
		comment: "You go, Fiona! The chariot of shame doesn't stand a chance of catching you.....xxx"
	},
	{
		name: "Polly Carpenter-O'Driscoll",
		amount: 10.00,
		giftaid: true,
		date: "20/05/2015",
		comment: ""
	},
	{
		name: "Kate Oake",
		amount: 20.00,
		giftaid: true,
		date: "20/05/2015",
		comment: ""
	},
	{
		name: "Tom Duggan",
		amount: 250.00,
		giftaid: true,
		date: "20/05/2015",
		comment: "May I wish you the very best of luck, Fiona, we need young people like you. Yours, David Cameron"
	},
	{
		name: "Astrid Heidenreich",
		amount: 30.00,
		giftaid: true,
		date: "20/05/2015",
		comment: ""
	},
	{
		name: "Fabiola & Sing Sing",
		amount: 20.00,
		giftaid: true,
		date: "20/05/2015",
		comment: ""
	},
	{
		name: "Ian O'Reilly",
		amount: 50.00,
		giftaid: true,
		date: "20/05/2015",
		comment: "Good Luck Fiona. love Ian, Faye and Chester x"
	},
	{
		name: "Sophie Roell",
		amount: 100.00,
		giftaid: true,
		date: "20/05/2015",
		comment: "Go for it Fi, from Charlie and me."
	},
	{
		name: "Jon & Laura",
		amount: 20.00,
		giftaid: true,
		date: "12/05/2015",
		comment: "Good luck Fi!"
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
	var hiddenDon = 30;
	if(recentDonations.length > 30) {
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