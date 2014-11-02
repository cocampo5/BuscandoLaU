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
            function dormir() {
                document.getElementById("demo").innerHTML = "Paragraph changed";
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
            <br>
            <br>
            <div class="row">
                <center><div id="test" class="col-md-12">
                    1.) ¿Cuál es tú color favorito? <br><br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type='radio' name='tipoBusqueda'>&nbsp;&nbsp;&nbsp;Amarillo
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type='radio' name='tipoBusqueda'>&nbsp;&nbsp;&nbsp;Rojo
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type='radio' name='tipoBusqueda'>&nbsp;&nbsp;&nbsp;Azul
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type='radio' name='tipoBusqueda'>&nbsp;&nbsp;&nbsp;Verde
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><center>
                    <button class="btn btn-primary" type="button" onclick="dormir();">Siguiente</button>
                </div>
            </div>
        </div>
    </body>
</html>
