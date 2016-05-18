

//Recent donations, recent at the top
var recentDonations = [
	{
		name: "Adriaan Commandeur",
		amount: 20.00,
		giftaid: true,
		date: "04/01/2016",
		comment: "Been meaning to do this for ages. A valiant performance!!! Xx"
	},
	{
		name: "Offline donations",
		amount: 200.00,
		giftaid: true,
		date: "18/11/2015",
		comment: ""
	},
	{
		name: "Jessica Barclay",
		amount: 20.00,
		giftaid: true,
		date: "18/11/2015",
		comment: ""
	},
	{
		name: "Katherine Storey",
		amount: 20.00,
		giftaid: true,
		date: "16/11/2015",
		comment: ""
	},
	{
		name: "Sally Singer",
		amount: 50.00,
		giftaid: true,
		date: "16/11/2015",
		comment: ""
	},
	{
		name: "Nicola Evans",
		amount: 55.00,
		giftaid: true,
		date: "15/11/2015",
		comment: ""
	},
	{
		name: "Duncan Short",
		amount: 20.00,
		giftaid: true,
		date: "15/11/2015",
		comment: ""
	},
	{
		name: "Peter Wright",
		amount: 100.00,
		giftaid: true,
		date: "15/11/2015",
		comment: ""
	},
	{
		name: "Yassir Mahmood",
		amount: 5.00,
		giftaid: true,
		date: "15/11/2015",
		comment: ""
	},
	{
		name: "Amanda Collier",
		amount: 20.00,
		giftaid: true,
		date: "15/11/2015",
		comment: ""
	},
	{
		name: "Dot Hare",
		amount: 10.00,
		giftaid: true,
		date: "15/11/2015",
		comment: "Hi Helen, best of luck for today -hope you enjoy it! Dot"
	},
	{
		name: "Rachael Skinner",
		amount: 20.00,
		giftaid: true,
		date: "15/11/2015",
		comment: "Hi Helen, best of luck tomorrow. Loved your blog, catch up soon? Rachael xx"
	},
	{
		name: "Terry Morrison-Wells",
		amount: 20.00,
		giftaid: false,
		date: "14/11/2015",
		comment: ""
	},
	{
		name: "Heather McClory",
		amount: 40.00,
		giftaid: true,
		date: "14/11/2015",
		comment: ""
	},
	{
		name: "Fiona Herm",
		amount: 50.00,
		giftaid: true,
		date: "14/11/2015",
		comment: "We haven't seen each other for years, but my dad also has early on-set dementia and I find the various things you post on Facebook very helpful. Your blog posts are so well written and usually make me cry! Wishing you all the best with your run. Fiona R x"
	},
	{
		name: "Jemma Read",
		amount: 20.00,
		giftaid: true,
		date: "14/11/2015",
		comment: ""
	},
	{
		name: "Christopher Bates",
		amount: 20.00,
		giftaid: true,
		date: "14/11/2015",
		comment: ""
	},
	{
		name: "Pamela Wright",
		amount: 50.00,
		giftaid: false,
		date: "13/11/2015",
		comment: "Thank you for your recent blog Helen. Good luck to your knees in the run, the rest of you will manage fine."
	},
	{
		name: "Susan Sheridan",
		amount: 100.00,
		giftaid: true,
		date: "13/11/2015",
		comment: ""
	},
	{
		name: "Catherine Young",
		amount: 50.00,
		giftaid: true,
		date: "13/11/2015",
		comment: "From Beth and Maurice"
	},
	{
		name: "Nicholas Carter",
		amount: 30.00,
		giftaid: true,
		date: "13/11/2015",
		comment: "All the best! :)"
	},
	{
		name: "Camilla Groom",
		amount: 10.00,
		giftaid: true,
		date: "12/11/2015",
		comment: ""
	},
	{
		name: "Heather Francis",
		amount: 25.00,
		giftaid: true,
		date: "12/11/2015",
		comment: ""
	},
	{
		name: "Gillian Earle",
		amount: 15.00,
		giftaid: false,
		date: "12/11/2015",
		comment: ""
	},
	{
		name: "Sharan Kaur Clair",
		amount: 10.00,
		giftaid: true,
		date: "12/11/2015",
		comment: ""
	},
	{
		name: "Elizabeth Bury",
		amount: 50.00,
		giftaid: true,
		date: "11/11/2015",
		comment: ""
	},
	{
		name: "Richard Dudley",
		amount: 20.00,
		giftaid: true,
		date: "11/11/2015",
		comment: ""
	},
	{
		name: "Jacqui Hill",
		amount: 30.00,
		giftaid: true,
		date: "09/11/2015",
		comment: ""
	},
	{
		name: "Jennifer Groom",
		amount: 25.00,
		giftaid: true,
		date: "09/11/2015",
		comment: ""
	},
	{
		name: "Lizzie Daniell",
		amount: 100.00,
		giftaid: false,
		date: "09/11/2015",
		comment: "Good luck Helen - you go girl! Thinking of you Lots of love Peter and Lizzie xx"
	},
	{
		name: "Glen Knott",
		amount: 20.00,
		giftaid: true,
		date: "09/11/2015",
		comment: ""
	},
	{
		name: "Esme Longbottom",
		amount: 20.00,
		giftaid: true,
		date: "09/11/2015",
		comment: ""
	},
	{
		name: "Amanda Horton-Mastin",
		amount: 30.00,
		giftaid: true,
		date: "09/11/2015",
		comment: ""
	},
	{
		name: "Charlotte Ashton",
		amount: 25.00,
		giftaid: true,
		date: "09/11/2015",
		comment: ""
	},
	{
		name: "David Hesketh",
		amount: 50.00,
		giftaid: true,
		date: "09/11/2015",
		comment: ""
	},
	{
		name: "Richard Phillips",
		amount: 50.00,
		giftaid: true,
		date: "09/11/2015",
		comment: ""
	},
	{
		name: "Andrew Derry",
		amount: 20.00,
		giftaid: true,
		date: "09/11/2015",
		comment: ""
	},
	{
		name: "Jill Healey",
		amount: 30.00,
		giftaid: true,
		date: "08/11/2015",
		comment: ""
	},
	{
		name: "Marcus Norton",
		amount: 20.00,
		giftaid: true,
		date: "08/11/2015",
		comment: ""
	},
	{
		name: "Sarah Jenkins",
		amount: 20.00,
		giftaid: true,
		date: "08/11/2015",
		comment: ""
	},
	{
		name: "Nick Campsie",
		amount: 50.00,
		giftaid: true,
		date: "08/11/2015",
		comment: ""
	},
	{
		name: "Jon Lombard",
		amount: 10.00,
		giftaid: true,
		date: "08/11/2015",
		comment: "Good luck with the run and enjoy the day!"
	},
	{
		name: "Sara Turnbull",
		amount: 30.00,
		giftaid: true,
		date: "08/11/2015",
		comment: "I admire you enormously Helena - all the best and hope you don't get too many blisters. All love Sara"
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