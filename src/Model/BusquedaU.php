<?php 
  require "../Controler/conexion.php";
  require "Universidad.php";
  require "ModalU.php";
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
    	 <script src="http://code.jquery.com/jquery.js"></script>
    	<script src="../web/bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
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
    						}	else{
    							echo "<input type='text' name='busqueda' class='form-control'>";
    						}
    										?>
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
        $result = mysqli_query($objeConexion->conectarse(), $query) or die(mysqli_error());

        while($row = mysqli_fetch_array($result)){
        	$universidades[] = new Universidad($row['iduniversidad'],$row['nombre'],$row['ubicacion'],$row['descripcion'],$row['tipo'], $row['web']);
        }

        for ($i=0; $i<count($universidades);$i++) {
        	$universidades[$i]->mostrarInicial();
               
		/*	echo "<div class='row'>
					<div class='col-md-7 col-md-offset-4'>
				    	<div class='panel panel-primary'>
				    		<div class='panel-heading'>".$universidades[$i]->getNombre()."</div>
				    			<div class='panel-body'>
				    					<div class='row'>
				    					<div class='col-xs-12'>
				    						".$universidades[$i]->getDescripcion()." 
				    					</div>
				    				</div>
				    				<br>
					    			<div class='row'>
					    				<div class='col-xs-5'>
					    					<h6 class='text-left'>Sitio web:  <a href='".$universidades[$i]->getWeb()."'>".$universidades[$i]->getNombre()."</a> </h6>
					    				</div>
					    				<div class='col-xs-3 col-xs-offset-4'>
					    					<input type='submit' class='btn btn-info' id='".$universidades[$i]->getId()."' value='Mas información' data-toggle='modal' data-target='#".$universidades[$i]->getNombre()."'>
					    				</div>
					    			</div>
					    			<br> 	
				    			</div>		
						</div>
					</div>
				</div>

		<div class='modal fade' id='".$universidades[$i]->getNombre()."' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
		  <div class='modal-dialog'>
		    <div class='modal-content'>
		      <div class='modal-header'>
		        <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
		        <h4 class='modal-title' id='myModalLabel'>".$universidades[$i]->getNombre()."</h4>
		      </div>
		      <div class='modal-body'>
		        ".$universidades[$i]->getDescripcion()."
		      </div>
		      <div class='modal-footer'>
		        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
		        <button type='button' class='btn btn-primary'>Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>;
*/

		}
	}else{

		$search = $_POST["busqueda"];
        $query = "SELECT *  FROM `hoja1` WHERE (CONVERT(`nombre` USING utf8) LIKE '%$search%')";
        $result = mysqli_query($objeConexion->conectarse(), $query) or die(mysqli_error());

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
	//include_once('test.php');
?>



		</div>	
	</body>
</html>