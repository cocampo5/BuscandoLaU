<?php
require "src/Controler/conexion.php";
$conexion = new Conexion();
$coor
?>

<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
		//var pront = <?php echo json_encode("Hola mundo desde PHP en JS, usando json");?>;
		//alert(pront);
		var interna = <?php echo (json_encode($coor)); ?>;
		var u1 = new google.maps.LatLng(interna);
		alert(interna);
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

	uni1.setMap(map);

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

</script>
	<title>Prueba mapa</title>
	<link href="src/web/imagenes/Birrete.png" rel="icon" type="image/x-icon" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="src/web/bootstrap-3.2.0-dist/css/bootstrap.css" rel="stylesheet">

	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBYb54ePljJW4Vm7MgvYyWAXs7K_0m0R7Q&sensor=true">
	</script>
	
</head>
<body>
	<form action="mapau.php" method="post">
		<input type='text' name='busqueda' value="" class='form-control'>
		<button type="submit">Aceptar</button>
	</form>
	<?php
	$vari = $_POST['busqueda'];
	$query = "SELECT *  FROM `universidad` WHERE (CONVERT(`nombre` USING utf8) LIKE '%$vari%')";
	$result = mysqli_query($conexion->conectarse(), $query) or die(mysqli_error());
	while($row = mysqli_fetch_array($result)){
		$coor = $row['coordenadas'];    
	}

	?>
	
	<div id="googleMap" style="width:500px;height:380px;">
		<?php 
		echo $coor;
		?>
	</div>
</body>

<?php

?>


</html>