<?php 
require "../Controler/conexion.php";
require "Pregrado.php";
require "Universidad.php";
$objeConexion = new Conexion();
$id = $_REQUEST['id'];
$consultaPregrados = "SELECT *  FROM `pregrados` WHERE `iduniversidad` = $id";
$resultadosPregrados = mysqli_query($objeConexion->conectarse(), $consultaPregrados) or die(mysqli_error());
$pregrados[] = "";
$li = "";
while($row = mysqli_fetch_array($resultadosPregrados)){
            $objeConexion2 = new Conexion();
            $search2 = $row['iduniversidad'];
            $query2 = "SELECT *  FROM `universidad` WHERE `iduniversidad` = $search2";
            $conex = $objeConexion2->conectarse();
            $result2 = mysqli_query($conex, $query2) or die(mysqli_error($conex));
            $row2 = mysqli_fetch_array($result2);
            //$U = new Universidad($row2['iduniversidad'],$row2['nombre'],$row2['ubicacion'],$row2['descripcion'],$row2['tipo'], $row2['web']);
            //$pregrados[] = new Pregrado($row['idpregrado'],$row['nombre'],$row['precio'],$row['titulo'],$row['duracion'],$row2['nombre']);
        	$li = $li."<li class='list-group-item'>".$row['nombre']."</li>";
        }

$lista = "<br><br><div class='panel panel-primary'>
<div class='panel-heading'>Pregrados</div><ul class='list-group' id='intereses'>".utf8_encode($li)."</ul></div>";
echo $lista;
?>
