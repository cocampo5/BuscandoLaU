<?php
require "Universidad.php";
require "Pregrado.php";
/*
Se incluye el archivo de la conexión y se instancia una nueva
*/
require "../Controler/conexion.php";
$objeConexion = new Conexion();
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
            echo "<script>
            if(universidades!=-1){
                universidades = -1;
                intereses = '';
                reset();
            }
            $('#bombillo').html('A continuación encontrarás las universidades que coiciden con tu criterio de búsqueda, puedes '+
                'consultar toda su información y si te queda alguna duda puedes comunicarte directamente con la universidad,'+
                'lo único que tienes que hacer es utilizar la opción contacto de la ventana de <i> \"Más información \" </i>'+
                'escribe tu correo, tu pregunta y recibirá una respuesta directamente de la universidad en las próximas horas.');
            $('#label').html('<h6>&nbsp;&nbsp;&nbsp;Se encontraron <b>".(count($universidades)-1)."</b> universidades</h6>');
            </script>";
            for ($i=1; $i<count($universidades);$i++) {
                $universidades[$i]->mostrarInicial();
            }
        }else{
            echo "<script>
            if(universidades==-1){
                universidades = 1;
                intereses = '';
                reset();
            }else{
                universidades++;
            }
            $('#label').html('<h6>&nbsp;&nbsp;&nbsp;Se encontraron <b>".(count($pregrados)-1)."</b> pregrados</h6>');
            </script>";
            for ($i=1; $i<count($pregrados);$i++) {
                $pregrados[$i]->mostrarInicial();
            }
        }
?>´+