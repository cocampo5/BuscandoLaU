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
                    "<button class='btn btn-primary center-block' type='button' onclick='preguntar();'>Siguiente</button>";
            };

            var c1 = new Campo1();
            var c = 0;
            function preguntar(){

                var elementos = document.getElementsByName("co");
                if(c==1){
                    c++;
                     document.getElementById("test").innerHTML = "Jmmmmmm";
                 for(var i=0; i<elementos.length; i++) {
                       alert(" Elemento: " + elementos[i].value + "\n Seleccionado: " + elementos[i].checked);
                    }
                }else{
                    c++;
                    //c1.pregunta();
                }
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
            <br>
            <br>
            <div class="row">
                <div id="test" class="col-md-4 col-md-offset-4">
                    A conticuación responderás unas preguntas: <br>
                    <button class="btn btn-primary center-block" type="button" onclick="c1.pregunta();">Empezar</button>
                </div>
            </div>
    </body>
</html>
