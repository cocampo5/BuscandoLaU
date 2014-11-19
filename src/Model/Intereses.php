
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
					$intereses[] = $d.$int[$i];
				}else{
					$intereses[] = $d;
				}
			}else{
				$intereses[] = $d;
			}
		}
	}
$l1 = "";
$l2 = "";
$l3 = "";
$l4 = "";
$l5 = "";


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
                </div>";

echo $tabla;


?>
