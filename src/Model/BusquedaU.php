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
   <title>BuscandoLaU</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="../web/bootstrap-3.2.0-dist/css/bootstrap.css" rel="stylesheet">        
    </head>
    <body>
    	 <script src="../Controler/jquery.js"></script>
    	<script src="../web/bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
          <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBYb54ePljJW4Vm7MgvYyWAXs7K_0m0R7Q&sensor=true"></script>
  <script src="http://maps.googleapis.com/maps/api/js?libraries=geometry&sensor=true"></script>
        <script>var universidades = 0;</script>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="col-md-2">
                    <a href="../../index.html"><img alt="Algo" src="../web/imagenes/Birrete.png"width="1000%" height="1000%"></a>
                </div>
                
            </div>
            <div class="col-md-6">
                <form class="navbar-form navbar-left" role="search" action="BusquedaU.php" id="buscando" method="post">
                    <div class="form-group">
                        <?php
                            if ($_POST['buscar'] && ($_POST["busqueda"]!="")) {
                                echo "<input type='text' name='busqueda' id='busqueda' value=".$_POST['busqueda']." class='form-control'>";
                            }   else{

                                echo "<input type='text' name='busqueda' id='busqueda' placeholder='¿Qué quieres buscar?' class='form-control'>";

                            }
                            ?>
                    </div>
                    <button type="submit" id="buscar" name="buscar" class="btn btn-default">Buscar</button>
                </form>
            </div>
            <div class="col-md-4">
            <div class="col-md-12">
            <div class="col-md-4">
                <a href="index.html"><h5 id='universidades'><font color="#ffffff"><b>Universidades</b></a>
                </font></h5>
            </div>
            <div class="col-md-4">
                <a href="index.html"><h5 id='universidades'><b><font color="#ffffff">Pregrados</a>
                </b></font></h5>
            </div>
            <div class="col-md-4">
                <a href="index.html"><h5 id='universidades'><b><font color="#ffffff">Contáctenos</a>
                </b></font></h5>
            </div>
           </div> 
           </div>
        </div>
    </nav>
<div class="container-fluid">
    <br><br><br>
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-2"><center>    
                <img src="../web/imagenes/bom.png" width="60%" height="60%"></center>                        
                </div>
                <div class="col-md-9" id="bombillo" name="bombillo">
                    Que carrera estudiar es una de las deciciones más importantes que tomarás en tu vida, así que no lo tomes a la ligera
                    y analiza bien todas las opciones. Acontinuación encontrarás los pregrados que coiciden con tu búsqueda, si hay 
                    te interesa puedes añadirlo a tus intereses y luego compararlo con otras carreas.
                </div>
            </div>
        </div>
        </div>
        <div class="col-md-3">
            <a href="../../index.html"><img src="../web/imagenes/logo.png" width="100%" height="100%"></a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-8 col-md-offset-3" id="label" name="label">
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-3" id="panelIzquierdo" name="panelIzquierdo">
            <div class='panel panel-primary'>
                <div class='panel-heading'>Pregrados</div>
                    <h5>Selecciona una universidad y se mostrarán todos sus pregrados aquí.</h5>
            </div>
        </div>
        <div class="col col-md-9" id="centro">
            <div class="col-md-8" id="resultados">
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
            echo "<script>if(universidades!=-1){
                universidades = -1;
                intereses = '';
                reset();
            }
            $('#bombillo').html('A continuación encontrarás las universidades que coiciden con tu criterio de búsqueda, puedes '+
                'consultar toda su información y si te queda alguna duda puedes comunicarte directamente con la universidad,'+
                'lo único que tienes que hacer es utilizar la opción contacto de la ventana de <i> \"Más información \" </i>'+
                'escribe tu correo, tu pregunta y recibirá una respuesta directamente de la universidad en las próximas horas.');
            $('#label').html('<div class=\'col-md-7 alert alert-success\' >&nbsp;&nbsp;&nbsp;Se encontraron <b>".(count($universidades)-1)."</b> universidades</div>');
            </script>";
            for ($i=1; $i<count($universidades);$i++) {
                $universidades[$i]->mostrarInicial();
            }
        }else{
            echo "<script>if(universidades==-1){
                universidades = 1;
            }else{
                universidades++;
            }
            $('#label').html('<div class=\'col-md-7 alert alert-success\' >&nbsp;&nbsp;&nbsp;Se encontraron <b>".(count($pregrados)-1)."</b> pregrados</div>');
            </script>";
            for ($i=1; $i<count($pregrados);$i++) {
                $pregrados[$i]->mostrarInicial();
            }
        }
?>
        </div>
        <div class='col-md-4'><br>
            <div class='panel panel-primary'>
                <div class='panel-heading'><center><b>Filtros</b></center>  </div>  
                    <ul class='list-group'>
                        <li class='list-group-item'>
                            <b>Costo matrícula</b><br>
                            &nbsp;&nbsp;&nbsp;<input type="checkbox" id="todos">&nbsp;&nbsp;&nbsp;Todos <br>
                            &nbsp;&nbsp;&nbsp;<input type="checkbox" id="p1">&nbsp;&nbsp;&nbsp;1.000.000$ - 2.000.000$ <br>
                            &nbsp;&nbsp;&nbsp;<input type="checkbox" id="p2">&nbsp;&nbsp;&nbsp;2.000.000$ - 3.000.000$ <br>
                            &nbsp;&nbsp;&nbsp;<input type="checkbox" id="p3">&nbsp;&nbsp;&nbsp;4.000.000$ - 5.000.000$ <br>
                            &nbsp;&nbsp;&nbsp;<input type="checkbox" id="p4">&nbsp;&nbsp;&nbsp;6.000.000$ o más
                        </li>
                        <li class='list-group-item'>
                            <b>Disciplinas</b><br>
                            &nbsp;&nbsp;&nbsp;<input type="checkbox" id="economia">&nbsp;&nbsp;&nbsp;Economía <br>
                            &nbsp;&nbsp;&nbsp;<input type="checkbox" id="humanidades">&nbsp;&nbsp;&nbsp;Ciencias sociales y humanas<br>
                            &nbsp;&nbsp;&nbsp;<input type="checkbox" id="ingenieria">&nbsp;&nbsp;&nbsp;Ingeniería<br>
                            &nbsp;&nbsp;&nbsp;<input type="checkbox" id="csociales">&nbsp;&nbsp;&nbsp;Ciencias Naturales y Matemáticas<br>
                            &nbsp;&nbsp;&nbsp;<input type="checkbox" id="ciencias">&nbsp;&nbsp;&nbsp;Artes<br>
                            &nbsp;&nbsp;&nbsp;<input type="checkbox" id="artes">&nbsp;&nbsp;&nbsp;Administración <br>
                            &nbsp;&nbsp;&nbsp;<input type="checkbox" id="cnaturales">&nbsp;&nbsp;&nbsp;Ciencias de la salud <br>
                            &nbsp;&nbsp;&nbsp;<input type="checkbox" id="admin">&nbsp;&nbsp;&nbsp;Ciencias Ambientales<br>
                            &nbsp;&nbsp;&nbsp;<input type="checkbox" id="csociales y humanas">&nbsp;&nbsp;&nbsp;Ciencias de educación<br>

                        </li>
                    </ul>
                </div>
    </div>
</div>
        </div>

<script>
var filtros = "";
$("#todos").change(function(){
    filtrar();
});
$("#p1").change(function(){
    filtrar();
});
$("#p2").change(function(){
    filtrar();
});
$("#p3").change(function(){
    filtrar();
});
$("#p4").change(function(){
    filtrar();
});
$("#economia").change(function(){
    filtrar();
});
$("#humanidades").change(function(){
    filtrar();
});
$("#ingenieria").change(function(){
    filtrar();
});
$("#csociales").change(function(){
    filtrar();
});
$("#ciencias").change(function(){
    filtrar();
});
$("#artes").change(function(){
    filtrar();
});
$("#cnaturales").change(function(){
    filtrar();
});
$("#admin").change(function(){
    filtrar();
});
$("#csociales y humanas").change(function(){
    filtrar();
});

function filtrar(){
    filtros = document.getElementById("busqueda").value;
if(document.getElementById("todos").checked){
filtros = filtros+"1";
}else{
    filtros = filtros+"0";
}
if(document.getElementById("p1").checked){
filtros = filtros+"1";
}else{
    filtros = filtros+"0";
}
if(document.getElementById("p2").checked){
filtros = filtros+"1";
}else{
    filtros = filtros+"0";
}
if(document.getElementById("p3").checked){
filtros = filtros+"1";
}else{
    filtros = filtros+"0";
}
if(document.getElementById("p4").checked){
filtros = filtros+"1";
}else{
    filtros = filtros+"0";
}

////////////////////////////////////////////

if(document.getElementById("economia").checked){
filtros = filtros+"1";
}else{
    filtros = filtros+"0";
}
if(document.getElementById("humanidades").checked){
filtros = filtros+"1";
}else{
    filtros = filtros+"0";
}
if(document.getElementById("ingenieria").checked){
filtros = filtros+"1";
}else{
    filtros = filtros+"0";
}
if(document.getElementById("csociales").checked){
filtros = filtros+"1";
}else{
    filtros = filtros+"0";
}
if(document.getElementById("ciencias").checked){
filtros = filtros+"1";
}else{
    filtros = filtros+"0";
}
if(document.getElementById("artes").checked){
filtros = filtros+"1";
}else{
    filtros = filtros+"0";
}
if(document.getElementById("cnaturales").checked){
filtros = filtros+"1";
}else{
    filtros = filtros+"0";
}
if(document.getElementById("admin").checked){
filtros = filtros+"1";
}else{
    filtros = filtros+"0";
}
if(document.getElementById("csociales y humanas").checked){
filtros = filtros+"1";
}else{
    filtros = filtros+"0";
}
//alert(filtros);
$.ajax({
                type: 'POST',
                url: 'BusquedaFiltros.php',
                data: 'filtros='+filtros,
                success: function(data){
                    data = data.replace(/<br><br><br>/g, ""); 
                    $('#resultados').html(data);
                }
            });
}

if(universidades==1){
    document.getElementById("panelIzquierdo").innerHTML ="<br><div class='panel panel-primary'>"+
    "<div class='panel-heading'><div class='row'><div class='col-md-8'><b>Lo que te interesa</b></div>"+
    "<div class='col-md-2 col-md-offset-1'>"+
    "<button type='button' class='btn btn-primary'id='' onclick='reset();' aria-label='Left Align'>"+
    "<span class='glyphicon glyphicon-remove-circle' aria-hidden='true'></span></button></div></div></div>"+
    "<div><ul class='list-group' id='intereses'></ul></div><div class='modal-footer'>"+
    "<button class='btn btn-primary center-block' id='comparar' name='comparar' type='button' onclick='comparar();'>"+
    "Comparar</button></div>";
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
                  $('#centro').html(data);
                  universidades = -1;
                  $('#label').html("<b>Tabla de Comparación</b>");
                  $('#bombillo').html("En la siguente tabla encontrarás un resumen de las principales características de los pregrados que"+
                    " seleccionaste; también hemos construido un mapa que muestra tu ubicación y la de las universidades que dictan los "+
                    "pregrados que seleccionaste para que mires cuál te universidad te queda más cerca. Analíza los datos con atención, "+
                    "saca tus conclusiones y selecciona el que que más se adapte a ti.");
                }
             });
}

function reset(){
    var url = 'Comparar.php'; 
            $.ajax({
                type: 'POST',
                url: url,
                data: 'id=-2',
                success: function(data){
                    intereses = "";
                  document.getElementById("panelIzquierdo").innerHTML ="<br><div class='panel panel-primary'>"+
    "<div class='panel-heading'><div class='row'><div class='col-md-8'><b>Lo que te interesa</b></div>"+
    "<div class='col-md-2 col-md-offset-1'>"+
    "<button type='button' class='btn btn-primary'id='' onclick='reset();' aria-label='Left Align'>"+
    "<span class='glyphicon glyphicon-remove-circle' aria-hidden='true'></span></button></div></div></div>"+
    "<div><ul class='list-group' id='intereses'></ul></div><div class='modal-footer'>"+
    "<button class='btn btn-primary center-block' id='comparar' name='comparar' type='button' onclick='comparar();'>"+
    "Comparar</button></div>";   
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
                    $('#centro').html("<div class='col-md-8' id='resultados'></div>"+
"<div class='col-md-4'><br><div class='panel panel-primary'><div class='panel-heading'><center><b>Filtros</b></center></div>"+  
"<ul class='list-group'><li class='list-group-item'><b>Costo matrícula</b><br>"+
 "&nbsp;&nbsp;&nbsp;<input type='checkbox' id='todos'>&nbsp;&nbsp;&nbsp;Todos <br>"+
                            "&nbsp;&nbsp;&nbsp;<input type='checkbox' id='p1'>&nbsp;&nbsp;&nbsp;1.000.000$ - 2.000.000$ <br>"+
                            "&nbsp;&nbsp;&nbsp;<input type='checkbox' id='p2'>&nbsp;&nbsp;&nbsp;2.000.000$ - 3.000.000$ <br>"+
                            "&nbsp;&nbsp;&nbsp;<input type='checkbox' id='p3'>&nbsp;&nbsp;&nbsp;4.000.000$ - 5.000.000$ <br>"+
                            "&nbsp;&nbsp;&nbsp;<input type='checkbox' id='p4'>&nbsp;&nbsp;&nbsp;6.000.000$ o más"+
                        "</li>"+
                        "<li class='list-group-item'>"+
                            "<b>Disciplinas</b><br>"+
                            "&nbsp;&nbsp;&nbsp;<input type='checkbox' id='economia'>&nbsp;&nbsp;&nbsp;Economía <br>"+
                            "&nbsp;&nbsp;&nbsp;<input type='checkbox' id='humanidades'>&nbsp;&nbsp;&nbsp;Ciencias sociales y humanas<br>"+
                            "&nbsp;&nbsp;&nbsp;<input type='checkbox' id='ingenieria'>&nbsp;&nbsp;&nbsp;Ingeniería<br>"+
                            "&nbsp;&nbsp;&nbsp;<input type='checkbox' id='csociales'>&nbsp;&nbsp;&nbsp;Ciencias Naturales y Matemáticas<br>"+
                            "&nbsp;&nbsp;&nbsp;<input type='checkbox' id='ciencias'>&nbsp;&nbsp;&nbsp;Artes<br>"+
                            "&nbsp;&nbsp;&nbsp;<input type='checkbox' id='artes'>&nbsp;&nbsp;&nbsp;Administración <br>"+
                            "&nbsp;&nbsp;&nbsp;<input type='checkbox' id='cnaturales'>&nbsp;&nbsp;&nbsp;Ciencias de la salud <br>"+
                            "&nbsp;&nbsp;&nbsp;<input type='checkbox' id='admin'>&nbsp;&nbsp;&nbsp;Ciencias Ambientales<br>"+
                            "&nbsp;&nbsp;&nbsp;<input type='checkbox' id='csociales y humanas'>&nbsp;&nbsp;&nbsp;Ciencias de educación<br>"+
                        "</li>"+
                    "</ul>"+
                "</div>"+
    "</div>");
                  $('#resultados').html(data);
                  document.getElementById('buscar').value ='Buscar';
                  if(universidades == 1){
    document.getElementById("panelIzquierdo").innerHTML ="<br><div class='panel panel-primary'>"+
    "<div class='panel-heading'><div class='row'><div class='col-md-8'><b>Lo que te interesa</b></div>"+
    "<div class='col-md-2 col-md-offset-1'>"+
    "<button type='button' class='btn btn-primary'id='' onclick='reset();' aria-label='Left Align'>"+
    "<span class='glyphicon glyphicon-remove-circle' aria-hidden='true'></span></button></div></div></div>"+
    "<div><ul class='list-group' id='intereses'></ul></div><div class='modal-footer'>"+
    "<button class='btn btn-primary center-block' id='comparar' name='comparar' type='button' onclick='comparar();'>"+
    "Comparar</button></div>"
    $('#bombillo').html('Que carrera estudiar es una de las deciciones más importantes que tomarás en tu vida,'+
        'así que no lo tomes a la ligera y analiza bien todas las opciones. Acontinuación encontrarás los pregrados'+
        'que coiciden con tu búsqueda, si hay te interesa puedes añadirlo a tus intereses y luego compararlo con otras carreas.');
}else if(universidades==-1){
document.getElementById("panelIzquierdo").innerHTML ="<div class='panel panel-primary'><div class='panel-heading'>"+
"Pregrados</div><h5>Selecciona una universidad y se mostrarán todos sus pregrados aquí.</h5></div>";
$('#bombillo').html('A continuación encontrarás las universidades que coiciden con tu criterio de búsqueda, puedes '+
                'consultar toda su información y si te queda alguna duda puedes comunicarte directamente con la universidad,'+
                'lo único que tienes que hacer es utilizar la opción contacto de la ventana de <i> \"Más información \" </i>'+
                'escribe tu correo, tu pregunta y recibirá una respuesta directamente de la universidad en las próximas horas.');
}
                }
             });
        return false;
        });
    });
</script>
</body>
</html>