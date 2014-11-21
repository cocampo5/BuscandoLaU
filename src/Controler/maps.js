var pos;
var map;
var u1=new google.maps.LatLng(6.20122,-75.57843); //Coordenadas de EAFIT
function initialize()
{
  var mapProp = {
    //center:new google.maps.LatLng(6.27018,-75.598095),
    zoom:13,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };

  map=new google.maps.Map(document.getElementById("googleMap")
    ,mapProp);


  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      pos = new google.maps.LatLng(position.coords.latitude,
       position.coords.longitude);
      //alert(pos);
      
      var show = google.maps.geometry.spherical.computeDistanceBetween(pos,u1);
      alert(show);

      var h = new google.maps.Marker({
        position:pos,
      });
      h.setMap(map);
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
}

function markers(){

    var u2=new google.maps.LatLng(6.157372,-75.516751); //EIA
    var u3=new google.maps.LatLng(6.20122,-75.57843); //EAFIT
    var u4=new google.maps.LatLng(6.24204,-75.5895); //UPB
    var u5=new google.maps.LatLng(6.293875,-75.568888); //ITM
    var u6=new google.maps.LatLng(6.2085137,-75.5534149); //CES
    var u7=new google.maps.LatLng(6.27557,-75.59162); //Nacho
    var u8=new google.maps.LatLng(6.2110075,-75.5772149); //Jaime Isaza Cadavid
    var u9=new google.maps.LatLng(6.251126,-75.573947); //UNAULA
    var u10=new google.maps.LatLng(6.250869,-75.568427); //Remington
    var u11=new google.maps.LatLng(6.23193,-75.61094); //U de M


    var markers = [];

    markers.push(u2);
    markers.push(u3);
    markers.push(u4);
    markers.push(u5);
    markers.push(u6);
    markers.push(u7);
    markers.push(u8);
    markers.push(u9);
    markers.push(u10);
    markers.push(u11);

    var distancia = [];

    for (var i = 0; i < markers.length; i++) {
      //var minor = markers[i];
      var interno = google.maps.geometry.spherical.computeDistanceBetween(pos,markers[i]);
      alert(interno);
    };
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