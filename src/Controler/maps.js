var u1=new google.maps.LatLng(6.20122,-75.57843);
var home;
function initialize()
{
  var mapProp = {
    //center:new google.maps.LatLng(6.27018,-75.598095),
    zoom:13,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };

  var map=new google.maps.Map(document.getElementById("googleMap")
    ,mapProp);

  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
       position.coords.longitude);
      alert(pos);
      
      home = new google.maps.Marker({
        position:pos,
      });

      var infowindow = new google.maps.InfoWindow({
        map: map,
        position: pos,
        content: 'Esta es tu ubicación'
      });

      map.setCenter(pos);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    handleNoGeolocation(false);
  }

  var uni1=new google.maps.Marker({
    position:u1,
  });

  uni1.setIcon('http://maps.google.com/mapfiles/ms/icons/green-dot.png');
  uni1.setMap(map);

  home.setMap(map);
}

function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }

  var options = {
    map: map,
    position: new google.maps.LatLng(0, 0),
    content: content
  };

  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);
}



google.maps.event.addDomListener(window, 'load', initialize);