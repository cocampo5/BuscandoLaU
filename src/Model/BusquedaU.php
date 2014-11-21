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
        <script>var universidades = 0;</script>
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
                <div class="col-md-3" id="panelIzquierdo" name="panelIzquierdo">
                   
                </div>
            <div class="col-md-9" id="resultados">
            <br>
<?php
        $busqueda = $_POST["busqueda"];
        $consultaUniversidades = "SELECT *  FROM `universidad` WHERE (CONVERT(`nombre` USING utf8) LIKE '%$busqueda%')";
        $consultaPregrados = "SELECT *  FROM `pregrados` WHERE (CONVERT(`nombre` USING utf8) LIKE '%$busqueda%')";

        $resultadosUniversidades = mysqli_query($objeConexion->conectarse(), $consultaUniversidades) or die(mysqli_error());
        $resultadosPregrados = mysqli_query($objeConexion->conectarse(), $consultaPregrados) or die(mysqli_error());
        $universidades[] = "";
        $pregrados[] = "";
        while($row = mysqli_fetch_array($resultadosUniversidades)){
            $universidades[] = new Universidad($row['iduniversidad'],$row['nombre'],$row['ubicacion'],$row['descripcion'],$row['tipo'], $row['web']);
        }
        while($row = mysqli_fetch_array($resultadosPregrados)){
            $objeConexion2 = new Conexion();
            $search2 = $row['iduniversidad'];
            $query2 = "SELECT *  FROM `universidad` WHERE `iduniversidad` = $search2";
            $conex = $objeConexion2->conectarse();
            $result2 = mysqli_query($conex, $query2) or die(mysqli_error($conex));
            $row2 = mysqli_fetch_array($result2);
            //$U = new Universidad($row2['iduniversidad'],$row2['nombre'],$row2['ubicacion'],$row2['descripcion'],$row2['tipo'], $row2['web']);
            $pregrados[] = new Pregrado($row['idpregrado'],$row['nombre'],$row['precio'],$row['titulo'],$row['duracion'],$row2['nombre']);
        }
        if(count($universidades)>count($pregrados)){
            echo "<script>universidades = -1;</script>";
            for ($i=1; $i<count($universidades);$i++) {
                $universidades[$i]->mostrarInicial();
            }
        }else{
            echo "<script>universidades++;</script>";
            for ($i=1; $i<count($pregrados);$i++) {
                $pregrados[$i]->mostrarInicial();
            }
        }
?>  
</div>
</div>
<script>
if(universidades==1){
    document.getElementById("panelIzquierdo").innerHTML ="<br><br><div class='panel panel-primary'>"+
    "<div class='panel-heading'>Lo que te interesa</div><ul class='list-group' id='intereses'></ul>"+
    "</div><div class='modal-footer'>"+
    "<button class='btn btn-primary center-block' id='comparar' name='comparar' type='button' onclick='comparar();'>Comparar</button></div>";
}
var x;
x=$("#resultados");
var t = x.html();
t = t.replace(/<br><br><br>/g, ""); 
x.html(t);

function comparar(){
    document.getElementById('comparar').value ='Comparando...';
    var url = 'Intereses.php'; 
            $.ajax({
                type: 'POST',
                url: url,
                data: 'int='+intereses,
                success: function(data){
                    data = data.replace(/<br><br><br>/g, ""); 
                  $('#resultados').html(data);
                    //window.alert(data);
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
                    data = data.replace(/<br><br><br>/g, ""); 
                  $('#resultados').html(data);
                  document.getElementById('buscar').value ='Buscar';
                  if(universidades == 1){
    document.getElementById("panelIzquierdo").innerHTML ="<br><br><div class='panel panel-primary'>"+
    "<div class='panel-heading'>Lo que te interesa</div><ul class='list-group' id='intereses'></ul>"+
    "</div><div class='modal-footer'>"+
    "<button class='btn btn-primary center-block' id='comparar' name='comparar' type='button' onclick='comparar();'>Comparar</button></div>";
}
                }
             });
        return false;
        });
    });
</script>

		</div>	
	</body>
</html>