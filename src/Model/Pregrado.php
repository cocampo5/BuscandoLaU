<?php 
		class Pregrado{
			var $id;
			var $nombre;
			var $costo;
			var $titulo;
			var $duracion;
			var $universidad;

			function Pregrado($id,$nombre,$costo,$titulo,$duracion,$universidad){
				$this->id = $id; 
				$this->nombre = utf8_encode($nombre); 
				$this->costo = $costo; 
				$this->titulo = utf8_encode($titulo);
				$this->duracion = $duracion;
				$this->$universidad = $universidad;
			}

			function getId(){
				return $this->id;
			}
			
			function getNombre(){
				return $this->nombre;
			}

			function getCosto(){
				return $this->costo;
			}

			function getTitulo(){
				return $this->titulo;
			}

			function getDuracion(){
				return $this->duracion;
			}

			function getIdUniversidad(){
				return $this->universidad;
			}
			function mostrarInicial(){
				echo "
				<div class='row'>
					<div class='col-md-7 col-md-offset-4'>
				    	<div class='panel panel-primary'>
				    		<div class='panel-heading'>".$this->nombre."</div>
				    			<div class='panel-body'>
				    				<div class='row'>
				    					<div class='col-xs-6'>
				    						<b>Título:</b> ".$this->titulo." <br><br>
				    						<b>Duración:</b> ".$this->duracion." Semestres
				    					</div>
				    					<div class='col-xs-6'>
				    						<b>Costo:</b> ".$this->costo." $<br><br>
				    					</div>
				    				</div>
				    				<br>
					    			<div class='row'>
					    				<div class='col-xs-5'>
					    					 
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
		        ".$this->titulo."
		      </div>
		      <div class='modal-footer'>
		        <button type='button' class='btn btn-info' data-dismiss='modal'>Ver Página Completa</button>
		      </div>
		    </div>
		  </div>
		</div>
				";
			}

		}
?>