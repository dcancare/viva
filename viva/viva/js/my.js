 $(document).on('scroll', function (e) {
 	
 	if (window.scrollY < 1 || window.scrollY > 200) 
 	{
 		 $('.navbar').css('opacity', 1);
 	}
 	else
 	{
   		 $('.navbar').css('opacity', ($(document).scrollTop() / 450));
 	}
 });


$('#hotelModal').on('shown.bs.modal', function () {
	var center = map.getCenter();   
    google.maps.event.trigger(map, "resize");
	map.setCenter(center); 
});





// $(document).ready(function() {

// var map;
// function initialize() {
//   var mapOptions = {
//     zoom: 8,
//     center: new google.maps.LatLng(-34.397, 150.644),
//     mapTypeId: google.maps.MapTypeId.ROADMAP
//   };
//   map = new google.maps.Map(document.getElementById('map-canvas'),
//                             mapOptions);
// }

// google.maps.event.addDomListener(window, 'load', initialize);

// });

