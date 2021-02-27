//Nav
const navSlide = () => {
	// = () => is equal to anonymous function
	const burger = document.querySelector(".burger");
	const nav = document.querySelector(".nav-links");
	const navLinks = document.querySelectorAll(".nav-links li");

	burger.addEventListener("click", () => {
		//Toggle
		nav.classList.toggle("nav-active");

		//Animation
		navLinks.forEach((link, index) => {
			if (link.style.animation) {
				link.style.animation = "";
			} else {
				link.style.animation = `navLinkFade 0.5s ease forwards ${
					index / 7 + 0.5
				}s`;
			}
		});
		//Burger Animate
		burger.classList.toggle("toggle");
	});
};
navSlide();

//Map

var locations = [
	["<b>Makati Hope Christian School</b>", 14.5325, 121.0227],
	["<b>Pasay City South High School</b>", 14.5299, 121.0215],
	["<b>Polytechnic University of the Philippines</b>", 14.4882, 121.0518],
	["<b>Paranaque City Hall Complex</b>", 14.4706, 121.0222],
	["<b>UP Diliman</b>", 14.657, 121.0652],
];

var mymap = L.map("mapid").setView([14.531, 121.0215], 15);

var marker = L.marker([14.531, 121.0215]).addTo(mymap);
marker.bindPopup("<b>Asia Pacific College</b>").openPopup();

L.tileLayer(
	"https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}",
	{
		attribution:
			'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		maxZoom: 20,
		id: "mapbox/streets-v11",
		tileSize: 512,
		zoomOffset: -1,
		accessToken:
			"sk.eyJ1IjoibWFyYy1uZWVkcy1mcmVlLXRva2VuIiwiYSI6ImNrbGRvbHVrZDExZWUyd3M0YjdtdHVub3MifQ.lJVSBC8lVr_mS7jilwQL4A",
	}
).addTo(mymap);

for (var i = 0; i < locations.length; i++) {
	marker = new L.marker([locations[i][1], locations[i][2]])
		.bindPopup(locations[i][0])
		.addTo(mymap);
}

var goToStation = function (s) {
	if (s == "s1") {
		mymap.setView(new L.LatLng(14.531, 121.0215), 30);
	} else if (s == "s2") {
		mymap.setView(new L.LatLng(14.5325, 121.0227), 30);
	} else if (s == "s3") {
		mymap.setView(new L.LatLng(14.5299, 121.0215), 30);
	} else if (s == "s4") {
		mymap.setView(new L.LatLng(14.4882, 121.0518), 30);
	} else if (s == "s5") {
		mymap.setView(new L.LatLng(14.4706, 121.0222), 30);
	} else if (s == "s6") {
		mymap.setView(new L.LatLng(14.657, 121.0652), 30);
	} else {
		console.log("Error input");
	}
};
