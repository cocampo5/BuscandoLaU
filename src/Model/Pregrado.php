<?php 
		class Pregrado{
			var $id;
			var $nombre;
			var $costo;
			var $descripcion;
			var $duracion;
			var $idUniversidad;
			

			function Universidad($id,$nombre,$costo,$descripcion,$duracion,$idUniversidad){
				$this->id = $id; 
				$this->nombre = utf8_encode($nombre); 
				$this->costo = $costo; 
				$this->descripcion = utf8_encode($descripcion);
				$this->duracion = $duracion;
				$this-$idUniversidad = $idUniversidad;
			}

			function getId(){
				return $this->id;
			}
			
			function getNombre(){
				return $this->nombre;
			}

			function getUbicacion(){
				return $this->ubicacion;
			}

			function getDescripcion(){
				return $this->descripcion;
			}

			function getTipo(){
				return $this->tipo;
			}

			function getWeb(){
				return $this->web;
			}
			function mostrarInicial(){
				echo "
				<div class='row'>
					<div class='col-md-7 col-md-offset-4'>
				    	<div class='panel panel-primary'>
				    		<div class='panel-heading'>".$this->nombre."</div>
				    			<div class='panel-body'>
				    				<div class='row'>
				    					<div class='col-xs-3'>
				    						<img src='../web/imagenes/eafit1.jpg' width='100%' height='100%'>
				    					</div>
				    					<div class='col-xs-9'>
				    						".$this->descripcion." 
				    					</div>
				    				</div>
				    				<br>
					    			<div class='row'>
					    				<div class='col-xs-5'>
					    					<h6 class='text-left'>Sitio web:  <a href='".$this->web."'>'".$this->nombre."'</a> </h6>
					    				</div>
					    				<div class='col-xs-3 col-xs-offset-4'>
					    					<input type='submit' class='btn btn-info' value='Mas informacion' data-toggle='modal' data-target='#modalU".$this->id."'>
					    				</div>
					    			</div>
					    			<br> 	
				    			</div>		
						</div>
					</div>
				</div>

	<div class='modal fade' id='modalU".$this->id."' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
		  <div class='modal-dialog'>
		    <div class='modal-content'>
		      <div class='modal-header'>
		        <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
		        <h4 class='modal-title' id='myModalLabel'>".$this->nombre."</h4>
		      </div>
		      <div class='modal-body'>
		        ".$this->descripcion."
		      </div>
		      <div class='modal-footer'>
		        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
		        <button type='button' class='btn btn-primary'>Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>


				";
			}

		}
?>