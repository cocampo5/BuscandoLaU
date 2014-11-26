<?php
require "Universidad.php";
require "Pregrado.php";
/*
Se incluye el archivo de la conexión y se instancia una nueva
*/
require "../Controler/conexion.php";
$objeConexion = new Conexion();
$busqueda ="";
$filtros = $_REQUEST['filtros'];
for ($i=0; $i<strlen($filtros);$i++){ 
    if(!is_numeric($filtros[$i])){
        $busqueda = $busqueda.$filtros[$i];
    }else{
        $f[] =$filtros[$i]; 
    }
}
        
        $consultaPregrados = "SELECT *  FROM `pregrados` WHERE (CONVERT(`nombre` USING utf8) LIKE '%$busqueda%')";
        $resultadosPregrados = mysqli_query($objeConexion->conectarse(), $consultaPregrados) or die(mysqli_error());
        $pregrados[] = "";

        while($row = mysqli_fetch_array($resultadosPregrados)){
            $objeConexion2 = new Conexion();
            $search2 = $row['iduniversidad'];
            $query2 = "SELECT *  FROM `universidad` WHERE `iduniversidad` = $search2";
            $conex = $objeConexion2->conectarse();
            $result2 = mysqli_query($conex, $query2) or die(mysqli_error($conex));
            $row2 = mysqli_fetch_array($result2);
            //$U = new Universidad($row2['iduniversidad'],$row2['nombre'],$row2['ubicacion'],$row2['descripcion'],$row2['tipo'], $row2['web']);
            if($f[0]==1){
                 $pregrados[] = new Pregrado($row['idpregrado'],$row['nombre'],$row['precio'],$row['titulo'],$row['duracion'],
                    $row2['nombre']);
            }else{
                if($f[1]==1){
                    if($row['precio']<2000000){
                        $pregrados[] = new Pregrado($row['idpregrado'],$row['nombre'],$row['precio'],$row['titulo'],$row['duracion'],
                    $row2['nombre']);
                    }
                }
                if($f[2]==1){
                    if($row['precio']>2000000 & $row['precio']<3000000){
                        $pregrados[] = new Pregrado($row['idpregrado'],$row['nombre'],$row['precio'],$row['titulo'],$row['duracion'],
                    $row2['nombre']);
                    }
                }
                if($f[3]==1){
                    if($row['precio']>4000000 & $row['precio']<5000000){
                        $pregrados[] = new Pregrado($row['idpregrado'],$row['nombre'],$row['precio'],$row['titulo'],$row['duracion'],
                    $row2['nombre']);
                    }
                }
                if($f[4]==1){
                    if($row['precio']>6000000){
                        $pregrados[] = new Pregrado($row['idpregrado'],$row['nombre'],$row['precio'],$row['titulo'],$row['duracion'],
                    $row2['nombre']);
                    }
                }
            }
           

        }

            echo "<script>
            if(universidades==-1){
                universidades = 1;
                intereses = '';
                reset();
            }else{
                universidades++;
            }
            $('#label').html('<div class=\'col-md-7 alert alert-success\' >&nbsp;&nbsp;&nbsp;Se encontraron <b>".(count($pregrados)-1)."</b> pregrados</div>');
            </script>";
            for ($i=1; $i<count($pregrados);$i++) {
                $pregrados[$i]->mostrarInicial();
            }
        
?>´+