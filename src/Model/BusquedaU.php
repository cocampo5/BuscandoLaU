<?php
require "Universidad.php";
require "Pregrado.php";
/*
Se incluye el archivo de la conexión y se instancia una nueva
*/
require "../Controler/conexion.php";
$objeConexion = new Conexion();
$search;
/*if(!empty($_SESSION['intereses'])){
    session_destroy();    
}*/
   session_start();
   $_SESSION['intereses'] = "";
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
                            <a href="../../index.html"><img src="../web/imagenes/logo.png" width="100%" height="100%"></a>
						</div>
					</div>
    			</div>
    			<div class="col-md-8">
    				<br>
    				<br>
    				<br>
    				<div class="row">
    					<div class="col-xs-7 col-md-offset-1">	
    						<form action="BusquedaU.php" id="buscando" method="post">
    						<?php
    						if ($_POST['buscar'] && ($_POST["busqueda"]!="")) {
    							echo "<input type='text' name='busqueda' value=".$_POST['busqueda']." class='form-control'>";
    						}	else{

    							echo "<input type='text' name='busqueda' value='' class='form-control'>";

    						}
    						?>
							&nbsp; <b>¿Qué deseas buscar?</b>&nbsp;&nbsp;&nbsp;
							<?php 
								if($_POST["tipoBusqueda"]=="Universidades"){
									echo "<input type='radio' name='tipoBusqueda' value='Pregrados'>&nbsp;&nbsp;Pregrados&nbsp;&nbsp;
                        	<input type='radio' name='tipoBusqueda' checked='checked' value='Universidades'>&nbsp;&nbsp;Universidades";
								}else{
									echo "<input type='radio' name='tipoBusqueda' checked='checked' value='Pregrados'>&nbsp;&nbsp;Pregrados&nbsp;&nbsp;
                        	<input type='radio' name='tipoBusqueda' value='Universidades'>&nbsp;&nbsp;Universidades";
								}
							?>
                        	 
    					</div>
    					<div id="b" class="col-xs-3">
    							<input type="submit" class="btn btn-primary center-block" id="buscar" name="buscar" value="Buscar" style="width:80%">
							</form>
    					</div>
    				</div>
    			</div>
    		</div>
			<br>
			<div class="row">
                <div class="col-md-4">
                    <br><br>
                    <div class="panel panel-primary">
                        <div class="panel-heading">Lo que te interesa</div>
                        <ul class="list-group" id="intereses">
                            <!--<br><br><p class="text-center">
                            Aquí apareceran los pregrados que vayas seleccionando.</p>
                            <br><br>-->
                        </ul>
                    </div>
                    <div class='modal-footer'>
                        <button class="btn btn-primary center-block" id="comparar" name="comparar" type="button" onclick="comparar();">Comparar</button>
                    </div>
                </div>

                <div class="col-md-8" id="resultados">
                    
                

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
        }
    }else{

        $search = $_POST["busqueda"];
        $query = "SELECT *  FROM `pregrado` WHERE (CONVERT(`nombre` USING utf8) LIKE '%$search%')";
        $result = mysqli_query($objeConexion->conectarse(), $query) or die(mysqli_error());

        while($row = mysqli_fetch_array($result)){
            $objeConexion2 = new Conexion();
            $search2 = $row['iduniversidad'];
            $query2 = "SELECT *  FROM `universidad` WHERE `iduniversidad` = $search2";
            $conex = $objeConexion2->conectarse();
            $result2 = mysqli_query($conex, $query2) or die(mysqli_error($conex));
            $row2 = mysqli_fetch_array($result2);
            $U = new Universidad($row2['iduniversidad'],$row2['nombre'],$row2['ubicacion'],$row2['descripcion'],$row2['tipo'], $row2['web']);
            $pregrados[] = new Pregrado($row['idpregrado'],$row['nombre'],$row['costo'],$row['titulo'],$row['duracion'],$row['iduniversidad'],$row['pensum']);
              
        }
        
        for ($i=0; $i<count($pregrados);$i++) {
            $pregrados[$i]->mostrarInicial();
        }

    }
?>
</div>
</div>
<script>
function comparar(){
    document.getElementById('comparar').value ='Comparando...';
    var url = 'Intereses.php'; 
            $.ajax({
                type: 'POST',
                url: url,
                data: 'int='+intereses,
                success: function(data){
                    window.alert(data);
                }
             });
}

    $(function(){
        $('#buscando').submit(function(){
            document.getElementById('buscar').value ='Buscando...';
            var url = 'busqueda.php'; 
            $.ajax({
                type: 'POST',
                url: url,
                data: $('#buscando').serialize(),
                success: function(data){
                  $('#resultados').html(data);
                }
             });
        return false;
        });
    });
</script>

		</div>	
	</body>
</html>