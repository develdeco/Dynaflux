$( document ).ready(function() {
  $('.bxslider').bxSlider({
  	mode: 'fade',
    pagerCustom: '#bx-pager',
    captions: true,
    auto: true
  });

  $('.bxslider-projects').bxSlider({
  	pager: false,
  	auto: true
  });

  $('#bx-pager').serialScroll({
		items:'a img', // Selector to the items ( relative to the matched elements, '#sections' in this case )
		prev:'a.prev',// Selector to the 'prev' button (absolute!, meaning it's relative to the document)
		next:'a.next',// Selector to the 'next' button (absolute too)
		axis:'y',// The default is 'y' scroll on both ways
		duration:300,// Length of the animation (if you scroll 2 axes and use queue, then each axis take half this time)
		force:true, // Force a scroll to the element specified by 'start' (some browsers don't reset on refreshes)
		step:1 // How many items to scroll each time ( 1 is the default, no need to specify )
	});

  $('#news-images-list').serialScroll({
    items:'ul li', // Selector to the items ( relative to the matched elements, '#sections' in this case )
    prev:'span.prev',// Selector to the 'prev' button (absolute!, meaning it's relative to the document)
    next:'span.next',// Selector to the 'next' button (absolute too)
    axis:'x',// The default is 'y' scroll on both ways
    duration:300,// Length of the animation (if you scroll 2 axes and use queue, then each axis take half this time)
    force:true, // Force a scroll to the element specified by 'start' (some browsers don't reset on refreshes)
    step:3 // How many items to scroll each time ( 1 is the default, no need to specify )
  });
  
  $('#news-images-list a img').click(function() {
    $(this).colorbox({href: $(this).attr('src')});
  });
  
  var geocoder;
  var map;
  function initialize() {
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(-34.397, 150.644);
    var mapOptions = {
      zoom: 8,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
  }

  function codeAddress() {
    var address = 'Calle Las Cascadas 325, Urb. La Encalada - La Molina';
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location
        });
      } else {
        alert("Geocode was not successful for the following reason: " + status);
      }
    });
  }
  google.maps.event.addDomListener(window, 'load', initialize);

});