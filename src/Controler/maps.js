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
    
    var u2=new google.maps.LatLng(6.267186,-75.569153);
    var u3=new google.maps.LatLng(6.20122,-75.57843);
    var u4=new google.maps.LatLng(6.24204,-75.5895);
    var u5=new google.maps.LatLng(6.2295797,-75.6079949);
    var u6=new google.maps.LatLng(6.244711,-75.550232);

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

    var uni6=new google.maps.Marker({
      position:u6,
    });

    var markers = [];

    //markers.push(u1);
    markers.push(u2);
    markers.push(u3);
    markers.push(u4);
    markers.push(u5);
    markers.push(u6);
    alert(markers);
     uni6.setMap(map);
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