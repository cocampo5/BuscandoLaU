
<?php 
require "../Controler/conexion.php";
require "Pregrado.php";
require "Universidad.php";
$objeConexion = new Conexion();
	$int = $_REQUEST['int'];
	for ($i=0; $i<strlen($int);$i++) { 
		if(is_numeric($int[$i])){
			$d = $int[$i]; 
			if(($i+1)<strlen($int)){
				$i++;
				if(is_numeric($int[$i])){
					$d = $d.$int[$i];
          if(($i+1)<strlen($int)){
            $i++;
            if(is_numeric($int[$i])){
              $d = $d.$int[$i];
            }
          }
				}
			}
      $intereses[] = $d;
		}
	}
$l1 = "";
$l2 = "";
$l3 = "";
$l4 = "";
$l5 = "";

echo "<script>var ids = [];</script>";

for ($i=0; $i<count($intereses); $i++) {
	$busqueda = $intereses[$i];
	$consultaPregrados = "SELECT *  FROM `pregrados` WHERE `idpregrado` = $busqueda";
	$resultadosPregrados = mysqli_query($objeConexion->conectarse(), $consultaPregrados) or die(mysqli_error());
	$pregrados[] = "";

	while($row = mysqli_fetch_array($resultadosPregrados)){
            $objeConexion2 = new Conexion();
            $search2 = $row['iduniversidad'];
            $query2 = "SELECT *  FROM `universidad` WHERE `iduniversidad` = $search2";
            $conex = $objeConexion2->conectarse();
            $result2 = mysqli_query($conex, $query2) or die(mysqli_error($conex));
            $row2 = mysqli_fetch_array($result2);
            $U = new Universidad($row2['iduniversidad'],$row2['nombre'],$row2['ubicacion'],$row2['descripcion'],$row2['tipo'], $row2['web']);
            //$pregrados[] = new Pregrado($row['idpregrado'],$row['nombre'],$row['precio'],$row['titulo'],$row['duracion'],$row['iduniversidad']);
            $l1 = $l1."<td><b>".$row['nombre']."</b></td>";
            $l2 = $l2."<td>".$row['titulo']."</td>";
            $l3 = $l3."<td>".$row2['nombre']."</td>";
            $l4 = $l4."<td>".$row['precio']."</td>";
            $l5 = $l5."<td>".$row['duracion']."</td>";
            echo "<script>
            var esta = false;
            for(var i=0;i<ids.length;i++){
                if(ids[i]==".$row2['iduniversidad']."){
                    esta = true;
                }
            }
            if(!esta){
                ids.push(".$row2['iduniversidad'].");
            }

            </script>";
        }

}

$tabla = "<div class='table-responsive'>
                        <table class='table'>
                            <tr><td></td>".utf8_encode($l1)."</tr>
                            <tr><td><b>Título</b></td>".utf8_encode($l2)."</tr>
                            <tr class='info'><td><b>Universidad</b></td>".utf8_encode($l3)."</tr>
                            <tr><td><b>Costo matrícula</b></td>".$l4."</tr>
                            <tr class='info'><td><b>Duración</b></td>".utf8_encode($l5)."</tr>
                        </table>
                </div>
<br>
<b>Ubicación de las universidades respecto a la tuya: </b><br>
<div class='col-md-8'>
    <div id='mapa' style='width:520px;height:380px;'></div>
</div>
<div class='col-md-4'>
    <br><br><br><br><br>
    <ul class='list-group' id='nombres'>
        <li class='list-group-item'><img src='http://maps.google.com/mapfiles/ms/icons/green-dot.png'>Tu ubicación</li>     
    </ul>
</div>
<br><br><br><br>
<script>
var pos;
var map;
var iconos = [];
iconos.push('http://maps.google.com/mapfiles/ms/icons/blue-dot.png');
iconos.push('http://maps.google.com/mapfiles/ms/icons/orange-dot.png');
iconos.push('http://maps.google.com/mapfiles/ms/icons/yellow-dot.png');
iconos.push('http://maps.google.com/mapfiles/ms/icons/purple-dot.png');
iconos.push('http://maps.google.com/mapfiles/ms/icons/pink-dot.png');

var nombres = [];
nombres.push('Universidad EAFIT');
nombres.push('UPB');
nombres.push('Universidad Autónoma Latinoamericana');
nombres.push('Universidad CES');
nombres.push('Escuela de Ingeniería de Antioquia');
nombres.push('Universidad Nacional');
nombres.push('Corporacion Universitaria Remington');
nombres.push('Universidad de Medellin');
nombres.push('ITM');
nombres.push('Politécnico Jaime Isaza Cadavid');

var posiciones = [];
u1 = new google.maps.LatLng(6.20122,-75.57843);
posiciones.push(u1);
u2 = new google.maps.LatLng(6.24204,-75.5895);
posiciones.push(u2);
u3 = new google.maps.LatLng(6.251126,-75.573947);
posiciones.push(u3);
u4 = new google.maps.LatLng(6.2085137,-75.5534149);
posiciones.push(u4);
u5 = new google.maps.LatLng(6.157372,-75.516751);
posiciones.push(u5);
u6 = new google.maps.LatLng(6.27557,-75.59162);
posiciones.push(u6);
u7 = new google.maps.LatLng(6.250869,-75.568427);
posiciones.push(u7);
u8 = new google.maps.LatLng(6.23193,-75.61094);
posiciones.push(u8);
u9 = new google.maps.LatLng(6.293875,-75.568888);
posiciones.push(u9);
//u10 = new google.maps.LatLng(6.20122,-75.57843);
//posiciones.push(u10);

for(var i=0;i<ids.length;i++) {
    var s = document.getElementById('nombres').innerHTML;
    document.getElementById('nombres').innerHTML =s+'<li class=\'list-group-item\'> <img src=\' '+iconos[i]+' \' >'+nombres[ids[i]-1]+'</li>';
};

  var mapProp = {
    zoom:13,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };

  map=new google.maps.Map(document.getElementById('mapa')
    ,mapProp);


  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      pos = new google.maps.LatLng(position.coords.latitude,
       position.coords.longitude);
      var h = new google.maps.Marker({
        position:pos,
      });
      h.setIcon('http://maps.google.com/mapfiles/ms/icons/green-dot.png');
      h.setMap(map);

      map.setCenter(pos);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    handleNoGeolocation(false);
  }
for (var i= 0;i<ids.length;i++) {
  var uni1=new google.maps.Marker({
    position:posiciones[ids[i]-1],
  });
  uni1.setIcon(iconos[i]);
  uni1.setMap(map);
};
</script>
";

echo $tabla;


?>
