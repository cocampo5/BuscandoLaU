<?php 
		class Conexion{
			var $host;
			var $usuario;
			var $contrasena;
			var $baseDatos;
			

			function Conexion(){
				$this->host = 'localhost'; 
				$this->usuario = 'root'; 
				$this->contrasena = ''; 
				$this->baseDatos = 'buscandolau';
				
			}
			
			function conectarse(){
				$enlace = mysqli_connect($this->host, $this->usuario, $this->contrasena, $this->baseDatos);
				if($enlace){
					//echo "Conexion exitosa";
					echo "<br>";
				}else{
					die('Error de Conexión (' . mysqli_connect_errno() . ') '.mysqli_connect_error());
				}
				return($enlace);
								mysqli_close($enlace);
			}
		}
?>
