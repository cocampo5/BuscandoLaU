<?php 
  require "../Controler/conexion.php";
  $objeConexion = new Conexion();
  $search;
?>
<!DOCTYPE html>
<html type="es">
<head>
	<link href="../web/imagenes/Birrete.png" rel="icon" type="image/x-icon" />
   <title>BuscadoLaU</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="../web/bootstrap-3.2.0-dist/css/bootstrap.css" rel="stylesheet">        
    </head>
    <body>
		<div class="container-fluid">
			<br>
			<div class="row">
    			<div class="col-md-4">
					<div class="row">
						<div class="col-xs-12 col-md-offset-1">
							<img src="../web/imagenes/logo.png" width="100%" height="100%">	
						</div>
					</div>
    			</div>
    			<div class="col-md-8">
    				<br>
    				<br>
    				<br>
    				<div class="row">
    					<div class="col-xs-7 col-md-offset-1">	
    						<form action="BusquedaU.php" method="post">
    						<?php
    						if ($_POST['buscar']) {
    							echo "<input type='text' name='busqueda' value=".$_POST['busqueda']." class='form-control'>";
    						}		
							?>
    					</div>
    					<br><br>
                    	<div class="col-md-9 col-md-offset-1">
                        	&nbsp; <b>¿Qué deseas buscar?</b>&nbsp;&nbsp;&nbsp;
                       		<input type="radio" name="tipoBusqueda" checked="checked" value="Pregrados">&nbsp;&nbsp;Pregrados&nbsp;&nbsp;
                     		<input type="radio" name="tipoBusqueda" value="Universidades">&nbsp;&nbsp;Universidades 
                   		</div>
    					<div class="col-xs-3">
    							<input type="submit" class="btn btn-primary center-block" name="buscar" value="Buscar" style="width:80%"> 
							</form>
    					</div>
    				</div>
    			</div>
    		</div>
			<br>
			
<?php
	if($_POST["tipoBusqueda"]=="Universidades"){
      	$search = $_POST["busqueda"];
        $query = "SELECT *  FROM `universidad` WHERE (CONVERT(`nombre` USING utf8) LIKE '%$search%')";
        $result = mysqli_query($objeConexion->conectarse(), $query) or die(mysqli_error());;
        
        while($row = mysqli_fetch_array($result)){
               
			echo "<div class='row'>
					<div class='col-md-7 col-md-offset-4'>
				    	<div class='panel panel-primary'>
				    		<div class='panel-heading'>".$row['nombre']."</div>
				    			<div class='panel-body'>
				    				<div class='row'>
				    					<div class='col-xs-12'>
				    						".utf8_encode($row['descripcion'])." 
				    					</div>
				    				</div>
				    				<br>
					    			<div class='row'>
					    				<div class='col-xs-5'>
					    					<h6 class='text-left'>Sitio web:  <a href='www.google.com'>www.universidadx.edu.co</a> </h6>
					    				</div>
					    				<div class='col-xs-3 col-xs-offset-4'>
					    					<input type='submit' class='btn btn-info' value='Mas informacion'>	
					    				</div>
					    			</div>
					    			<br> 	
				    			</div>		
						</div>
					</div>
				</div>";
		}
	}else{

		$search = $_POST["busqueda"];
        $query = "SELECT *  FROM `hoja1` WHERE (CONVERT(`nombre` USING utf8) LIKE '%$search%')";
        $result = mysqli_query($objeConexion->conectarse(), $query) or die(mysqli_error());;
        
        while($row = mysqli_fetch_array($result)){
               
			echo "<div class='row'>
					<div class='col-md-7 col-md-offset-4'>
				    	<div class='panel panel-primary'>
				    		<div class='panel-heading'>".$row['nombre']."</div>
				    			<div class='panel-body'>
				    				<div class='row'>
				    					<div class='col-xs-12'>
				    						".utf8_encode($row['descripcion'])." 
				    					</div>
				    				</div>
				    				<br>
					    			<div class='row'>
					    				<div class='col-xs-5'>
					    					<h6 class='text-left'>Sitio web:  <a href='www.google.com'>www.universidadx.edu.co/".$row['nombre']."</a> </h6>
					    				</div>
					    				<div class='col-xs-3 col-xs-offset-4'>
					    					<input type='submit' class='btn btn-info' value='Mas informacion'>	
					    				</div>
					    			</div>
					    			<br> 	
				    			</div>		
						</div>
					</div>
				</div>";
		}	

	}	
?>


		</div>	
	</body>
</html>