function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(9.2129689,-65.9966358),
    zoom:18,
    scrollwheel: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);

function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(9.2129689,-65.9966358),
    zoom:18,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap2"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);