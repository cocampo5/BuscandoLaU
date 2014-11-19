<?php
		class Pregrado{
			var $id;
			var $nombre;
			var $costo;
			var $titulo;
			var $duracion;
			var $universidad;
			var $pensum;

			function Pregrado($id,$nombre,$costo,$titulo,$duracion,$universidad){
				$this->id = $id; 
				$this->nombre = utf8_encode($nombre); 
				$this->costo = $costo; 
				$this->titulo = utf8_encode($titulo);
				$this->duracion = $duracion;
				$this->$universidad = $universidad;
				//$this->pensum = $pensum;
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

			function getPensum(){
				return $this->pensum;
			}
			function mostrarInicial(){
				echo "<div class='row'>
					<div class='col-md-11'>
				    	<div class='panel panel-primary'>
				    		<div class='panel-heading'>
				    		<div class='row'>
				    			<div class='col-md-8'>".$this->nombre." - ".$this->universidad." </div> <div class='col-md-1 col-md-offset-3'>
				    			<button type='button' class='btn btn-primary'id='".$this->id."' onclick='pegar".$this->id."();' aria-label='Left Align'>
  									<span class='glyphicon glyphicon-pushpin' aria-hidden='true'></span>
								</button>
							</div>
							</div>	
				    		</div>
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
					    				<div class='col-xs-3 col-xs-offset-8'>
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
		      <div id='cuerpo' class='modal-body'>
		       Cuerpo
		      </div>
		      <div class='modal-footer'>
		      	<div class='row'>
					<div class='col-md-12'>
		        		<input type='submit' class='btn btn-info' value='Contacto' data-toggle='modal' data-target='#modalC".$this->id."'>
		        	</div>
		        </div>	
		      </div>
		    </div>
		  </div>
		</div>

		<div class='modal fade' id='modalC".$this->id."' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
		  <div class='modal-dialog'>
		    <div class='modal-content'>
		      <div class='modal-header'>
		        <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
		        <h4 class='modal-title' id='myModalLabel'>".$this->nombre."</h4>
		      </div>
		      <div id='cuerpoCorreo".$this->id."' class='modal-body'>
		        <div class='row'>
					<div class='col-md-12'>
						<form id='correo".$this->id."'>
							&nbsp;&nbsp;&nbsp;<input class='form-control' name='email' type='text' placeholder='Escribe aquí tu correo'>
							<br>Escribe aquí tu inquietud o la información que deseas solicitar:<br>
          					<textarea class='form-control' name='duda' rows='5' cols='40'></textarea>

    				</div>
				</div>
		      </div>
		      <div id='pie".$this->id."' class='modal-footer'>	      	
		        	<input type='submit' class='btn btn-primary' id='enviar".$this->id."' value='Enviar'>
		       	</form>
		      </div>
		    </div>
		  </div>
		</div>
		
<script>
    $(function(){
        $('#correo".$this->id."').submit(function(){
        	document.getElementById('enviar".$this->id."').value ='Enviando...';
            var url = '../Controler/enviarCorreo.php'; 
            $.ajax({
                type: 'POST',
                url: url,
                data: $('#correo".$this->id."').serialize(),
                success: function(data){
                  $('#cuerpoCorreo".$this->id."').html(data);
                  document.getElementById('enviar".$this->id."').value ='Aceptar';
                }
             });
		
		//$('#modalC".$this->id."').modal('hide');
        return false;
        });
    });
	
var intereses;
function pegar".$this->id."(){
	var s = document.getElementById('intereses').innerHTML;
	//document.getElementById('intereses').innerHTML =s+'<li class=\'list-group-item\'>".$this->nombre."</li>';
	var url = 'Comparar.php'; 
            $.ajax({
                type: 'POST',
                url: url,
                data: 'id=+".$this->id."',
                success: function(data){
                	if(data != 0){
                		intereses = data;
						document.getElementById('intereses').innerHTML =s+'<li class=\'list-group-item\'>".$this->nombre."</li>';
                	}
                	//window.alert(data);
                }
             });
}
</script>";
			}

		}
?>