<?php 
		class Universidad{
			var $id;
			var $nombre;
			var $ubicacion;
			var $descripcion;
			var $tipo;
			var $web;
			
			function Universidad($id,$nombre,$ubicacion,$descripcion,$tipo,$web){
				$this->id = $id; 
				$this->nombre = utf8_encode($nombre); 
				$this->ubicacion = utf8_encode($ubicacion); 
				$this->descripcion = utf8_encode($descripcion);
				$this->tipo = $tipo;
				$this->web = $web;
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
				echo "<div class='row'>
					<div class='col-md-11'>
				    	<div class='panel panel-primary'>
				    		<div class='panel-heading'>
				    		<div class='row'>
				    			<div class='col-md-8'>".$this->nombre." </div> <div class='col-md-1 col-md-offset-3'>
				    			<button type='button' class='btn btn-primary'id='".$this->id."' onclick='pegar".$this->id."();' aria-label='Left Align'>
  									<span class='glyphicon glyphicon-list' aria-hidden='true'></span>
								</button>
							</div>
							</div>	
				    		</div>
				    			<div class='panel-body'>
				    				<div class='row'>
				    					<div class='col-xs-3'>
				    						<img src='../web/imagenes/".$this->id."1.png' width='100%' height='100%'>
				    					</div>
				    					<div class='col-xs-9'>
				    						".$this->descripcion." 
				    					</div>
				    				</div>
				    				<br>
					    			<div class='row'>
					    				<div class='col-xs-7'>
					    					<h6 class='text-left'>Sitio web:  <a href='".$this->web."'>".$this->nombre."</a> </h6>
					    				</div>
					    				<div class='col-xs-3 col-xs-offset-2'>
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
		        ".$this->descripcion."
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
	

function pegar".$this->id."(){
	var url = 'PregradosPorU.php'; 
            $.ajax({
                type: 'POST',
                url: url,
                data: 'id=+".$this->id."',
                success: function(data){
                	data = data.replace(/<br><br><br>/g, ''); 
					$('#panelIzquierdo').html(data);
                }
             });
}
</script>";
			}

		}
?>