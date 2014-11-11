var u1=new google.maps.LatLng(6.267186,-75.569153);
var u2=new google.maps.LatLng(6.20122,-75.57843);
var u3=new google.maps.LatLng(6.24204,-75.5895);
var u4=new google.maps.LatLng(6.2295797,-75.6079949);
var u5=new google.maps.LatLng(6.244711,-75.550232);

var posActual;

function initialize()
{



  var mapProp = {
    //center:new google.maps.LatLng(6.27018,-75.598095),
    zoom:13,
    panControl:true,
    zoomControl:true,
    mapTypeControl:true,
    scaleControl:true,
    streetViewControl:true,
    overviewMapControl:true,
    rotateControl:true,    
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };

  var map=new google.maps.Map(document.getElementById("googleMap")
    ,mapProp);

  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
       position.coords.longitude);

      posActual = new google.maps.LatLng(position.coords.latitude,
       position.coords.longitude);

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

  var uni2=new google.maps.Marker({
    position:u2,
  });

  var uni3=new google.maps.Marker({
    position:u3,
  });

  var uni4=new google.maps.Marker({
    position:u4,
  });

  var uni5=new google.maps.Marker({
    position:u5,
  });

  var casa=new google.maps.Marker({
    position:posActual,
  });

  uni1.setMap(map);
  uni2.setMap(map);
  uni3.setMap(map);
  uni4.setMap(map);
  uni5.setMap(map);
  casa.setMap(map);

}

function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }

  var options = {
    map: map,
    position: new google.maps.LatLng(60, 105),
    content: content
  };

  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);
}



google.maps.event.addDomListener(window, 'load', initialize);