<?php
$resultado = "";
/* Filtrar los datos */
$nombre = addslashes(htmlspecialchars($_POST["nombre"]));

/* Crear un Array. Simulando una consulta a una base de datos */
$array = array("antonio", "pedro", "alberto");

/*Buscar en el array */
for ($x=0; $x<count($array); $x++)
{
if ($nombre == $array[$x])
{
$resultado = "<p>El nombre ".$array[$x]." <b>SI</b> se encuentra en la base de datos</p>";
}
}
if($resultado == "")
{
echo "<p>El nombre ".$nombre." <b>NO</b> se encuentra en la base de datos</p>";
}
else
{
echo $resultado;
}
?>