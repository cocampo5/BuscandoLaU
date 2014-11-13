<?php
require "Universidad.php";
require "Pregrado.php";
/*
Se incluye el archivo de la conexión y se instancia una nueva
*/
require "../Controler/conexion.php";
$objeConexion = new Conexion();
$search;

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