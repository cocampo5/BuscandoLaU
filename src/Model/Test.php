<!DOCTYPE html>
<html lang="es">
    <head>
    <link href="../web/imagenes/Birrete.png" rel="icon" type="image/x-icon" />
   <title>BuscadoLaU</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="../web/bootstrap-3.2.0-dist/css/bootstrap.css" rel="stylesheet">        
    </head>
    <body>
         <script src="http://code.jquery.com/jquery.js"></script>
        <script src="../web/bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            function Campo1() {
                this.descartar = false;
            }

            Campo1.prototype.pregunta = function() {
                 document.getElementById("test").innerHTML = "<center>1.) ¿Cuál es tú color favorito? <br><br></center>"+
"<div class='col-md-8 col-md-offset-4'><input type='radio' name='co'>&nbsp;&nbsp;&nbsp;Amarillo<br>"+
    "<input type='radio' name='co'>&nbsp;&nbsp;&nbsp;Rojo<br><input type='radio' name='co'>&nbsp;&nbsp;&nbsp;Verde<br>"+
    "<input type='radio' name='co'>&nbsp;&nbsp;&nbsp;Azul<br><br></div>"+
 "<button class='btn btn-primary center-block' type='button' onclick='pre();'>Siguiente</button>"+
"<script>function pre(){"+
"var elementos = document.getElementsByName('co');"+
 "for(var i=0; i<elementos.length; i++) {"+
  "alert(' Elemento: '+ elementos[i].value  +'\n Seleccionado:' + elementos[i].checked);}}</script>";
            };

            var c1 = new Campo1();

            function preguntar(){
                c1.pregunta();
            }


        </script>

        <div class="container-fluid">
            <br>
            <div class="row">
                <div class = "col-md-6">
                    <img src="../web/imagenes/logo.png" width="100%" height="100%">
                </div>
                <div class="col-md-6">
                    <h1 class="text-right">TEST DE APTITUD</h1>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div id="test" class="col-md-6   col-md-offset-3">
                        <center>1.) Supón que en tu colegio hay una niña que está embarazada y va a ser expulsada.<br>
                        ¿Qué harías?<br><br></center>
                        <div class='col-md-8 col-md-offset-1'>
                            <input type='radio' name='co'>&nbsp;&nbsp;&nbsp;A) Nada, porque no me interesa<br>
                            <input type='radio' name='co'>&nbsp;&nbsp;&nbsp;B) Nada, porque aunque si me interesa no 
                            siento la necesidad de hacer algo al respecto<br>
                            <input type='radio' name='co'>&nbsp;&nbsp;&nbsp;C) Crearía una discusión donde se debatiera 
                            porqué debe o no la nina ser expulsada<br>
                            <input type='radio' name='co'>&nbsp;&nbsp;&nbsp;D) Iniciaría una protesta a favor (o en contra) 
                            de los derechos de la niña a seguir estudiando<br><br>
                         </div>
                         <button class="btn btn-primary center-block" type="button" onclick="preguntar();">Empezar</button>
                </div>
            </div>
    </body>
</html>
