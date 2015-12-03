if ($('#googleMap').length)  {
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

}

if ($('#googleMap2').length)  {
function initialize2() {
  var mapProp2 = {
    center:new google.maps.LatLng(9.2129689,-65.9966358),
    zoom:18,
    scrollwheel: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map2=new google.maps.Map(document.getElementById("googleMap2"),mapProp2);
}
google.maps.event.addDomListener(window, 'load', initialize2);

}