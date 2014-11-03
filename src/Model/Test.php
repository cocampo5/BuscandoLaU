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

            var campo1 = {
                descarte : false,
                evaluar : function(c) {
                var elementos = document.getElementsByName("opciones");
 
                for(var i=0; i<elementos.length; i++) {
                  if((elementos[i].checked)&(i==0)){
                    this.descarte = true;
                  }else if((elementos[i].checked)&(i==1)){
                    this.descarte = true;
                  }else if((elementos[i].checked)&(i==2)){
                   this.descarte = false;
                  }else if((elementos[i].checked)&(i==3)){
                    this.descarte = false;
                  }
                }
                },
                getDescarte : function(c) {
                    return this.descarte;
                }
            };

            var campo2 = {
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Es el primer día de la Universidad y hacen una mesa redonda"+
                    "para conocercen mejor. ¿En esa mesa usted quien sería?";
                 document.getElementById("a").innerHTML ="La primera persona que hable";
                 document.getElementById("b").innerHTML ="Preferiría no hacerlo";
                 document.getElementById("c").innerHTML ="No me encantaría, pero no me molestaria hacerlo";
                 document.getElementById("d").innerHTML ="Si lo veo adecuado participaría activamente";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                }
            };

            var campo3 = {
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Respecto a cumpleaños";
                 document.getElementById("a").innerHTML ="No me acuerdo ni de el mío";
                 document.getElementById("b").innerHTML ="Me se de los de mi familia";
                 document.getElementById("c").innerHTML ="Me se hasta los de los gatos de la vecina";
                 document.getElementById("d").innerHTML ="No sabe/ No responde";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                }
            };

            var campo4 = {
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "¿La siguiente imagen que le causa?";
                 document.getElementById("a").innerHTML ="La primera persona que hable";
                 document.getElementById("b").innerHTML ="Preferiría no hacerlo";
                 document.getElementById("c").innerHTML ="No me encantaría, pero no me molestaria hacerlo";
                 document.getElementById("d").innerHTML ="Si lo veo adecuado participaría activamente";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                }
            };

            var campo2 = {
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Es el primer día de la Universidad y hacen una mesa redonda"+
                    "para conocercen mejor. ¿En esa mesa usted quien sería?";
                 document.getElementById("a").innerHTML ="La primera persona que hable";
                 document.getElementById("b").innerHTML ="Preferiría no hacerlo";
                 document.getElementById("c").innerHTML ="No me encantaría, pero no me molestaria hacerlo";
                 document.getElementById("d").innerHTML ="Si lo veo adecuado participaría activamente";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                }
            };

            var campo2 = {
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Es el primer día de la Universidad y hacen una mesa redonda"+
                    "para conocercen mejor. ¿En esa mesa usted quien sería?";
                 document.getElementById("a").innerHTML ="La primera persona que hable";
                 document.getElementById("b").innerHTML ="Preferiría no hacerlo";
                 document.getElementById("c").innerHTML ="No me encantaría, pero no me molestaria hacerlo";
                 document.getElementById("d").innerHTML ="Si lo veo adecuado participaría activamente";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                }
            };

            var campo2 = {
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Es el primer día de la Universidad y hacen una mesa redonda"+
                    "para conocercen mejor. ¿En esa mesa usted quien sería?";
                 document.getElementById("a").innerHTML ="La primera persona que hable";
                 document.getElementById("b").innerHTML ="Preferiría no hacerlo";
                 document.getElementById("c").innerHTML ="No me encantaría, pero no me molestaria hacerlo";
                 document.getElementById("d").innerHTML ="Si lo veo adecuado participaría activamente";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                }
            };

            var campo2 = {
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Es el primer día de la Universidad y hacen una mesa redonda"+
                    "para conocercen mejor. ¿En esa mesa usted quien sería?";
                 document.getElementById("a").innerHTML ="La primera persona que hable";
                 document.getElementById("b").innerHTML ="Preferiría no hacerlo";
                 document.getElementById("c").innerHTML ="No me encantaría, pero no me molestaria hacerlo";
                 document.getElementById("d").innerHTML ="Si lo veo adecuado participaría activamente";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                }
            };

            var campo2 = {
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Es el primer día de la Universidad y hacen una mesa redonda"+
                    "para conocercen mejor. ¿En esa mesa usted quien sería?";
                 document.getElementById("a").innerHTML ="La primera persona que hable";
                 document.getElementById("b").innerHTML ="Preferiría no hacerlo";
                 document.getElementById("c").innerHTML ="No me encantaría, pero no me molestaria hacerlo";
                 document.getElementById("d").innerHTML ="Si lo veo adecuado participaría activamente";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                }
            };

            var campo2 = {
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Es el primer día de la Universidad y hacen una mesa redonda"+
                    "para conocercen mejor. ¿En esa mesa usted quien sería?";
                 document.getElementById("a").innerHTML ="La primera persona que hable";
                 document.getElementById("b").innerHTML ="Preferiría no hacerlo";
                 document.getElementById("c").innerHTML ="No me encantaría, pero no me molestaria hacerlo";
                 document.getElementById("d").innerHTML ="Si lo veo adecuado participaría activamente";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                }
            };

            var campo2 = {
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Es el primer día de la Universidad y hacen una mesa redonda"+
                    "para conocercen mejor. ¿En esa mesa usted quien sería?";
                 document.getElementById("a").innerHTML ="La primera persona que hable";
                 document.getElementById("b").innerHTML ="Preferiría no hacerlo";
                 document.getElementById("c").innerHTML ="No me encantaría, pero no me molestaria hacerlo";
                 document.getElementById("d").innerHTML ="Si lo veo adecuado participaría activamente";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                }
            };

            var campo2 = {
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Es el primer día de la Universidad y hacen una mesa redonda"+
                    "para conocercen mejor. ¿En esa mesa usted quien sería?";
                 document.getElementById("a").innerHTML ="La primera persona que hable";
                 document.getElementById("b").innerHTML ="Preferiría no hacerlo";
                 document.getElementById("c").innerHTML ="No me encantaría, pero no me molestaria hacerlo";
                 document.getElementById("d").innerHTML ="Si lo veo adecuado participaría activamente";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                }
            };

            var campo2 = {
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Es el primer día de la Universidad y hacen una mesa redonda"+
                    "para conocercen mejor. ¿En esa mesa usted quien sería?";
                 document.getElementById("a").innerHTML ="La primera persona que hable";
                 document.getElementById("b").innerHTML ="Preferiría no hacerlo";
                 document.getElementById("c").innerHTML ="No me encantaría, pero no me molestaria hacerlo";
                 document.getElementById("d").innerHTML ="Si lo veo adecuado participaría activamente";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                }
            };

            var campo2 = {
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Es el primer día de la Universidad y hacen una mesa redonda"+
                    "para conocercen mejor. ¿En esa mesa usted quien sería?";
                 document.getElementById("a").innerHTML ="La primera persona que hable";
                 document.getElementById("b").innerHTML ="Preferiría no hacerlo";
                 document.getElementById("c").innerHTML ="No me encantaría, pero no me molestaria hacerlo";
                 document.getElementById("d").innerHTML ="Si lo veo adecuado participaría activamente";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                }
            };

            var campo2 = {
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Es el primer día de la Universidad y hacen una mesa redonda"+
                    "para conocercen mejor. ¿En esa mesa usted quien sería?";
                 document.getElementById("a").innerHTML ="La primera persona que hable";
                 document.getElementById("b").innerHTML ="Preferiría no hacerlo";
                 document.getElementById("c").innerHTML ="No me encantaría, pero no me molestaria hacerlo";
                 document.getElementById("d").innerHTML ="Si lo veo adecuado participaría activamente";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                }
            };

            var campo2 = {
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Es el primer día de la Universidad y hacen una mesa redonda"+
                    "para conocercen mejor. ¿En esa mesa usted quien sería?";
                 document.getElementById("a").innerHTML ="La primera persona que hable";
                 document.getElementById("b").innerHTML ="Preferiría no hacerlo";
                 document.getElementById("c").innerHTML ="No me encantaría, pero no me molestaria hacerlo";
                 document.getElementById("d").innerHTML ="Si lo veo adecuado participaría activamente";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                }
            };

            var campo2 = {
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Es el primer día de la Universidad y hacen una mesa redonda"+
                    "para conocercen mejor. ¿En esa mesa usted quien sería?";
                 document.getElementById("a").innerHTML ="La primera persona que hable";
                 document.getElementById("b").innerHTML ="Preferiría no hacerlo";
                 document.getElementById("c").innerHTML ="No me encantaría, pero no me molestaria hacerlo";
                 document.getElementById("d").innerHTML ="Si lo veo adecuado participaría activamente";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                }
            };

            var campo2 = {
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Es el primer día de la Universidad y hacen una mesa redonda"+
                    "para conocercen mejor. ¿En esa mesa usted quien sería?";
                 document.getElementById("a").innerHTML ="La primera persona que hable";
                 document.getElementById("b").innerHTML ="Preferiría no hacerlo";
                 document.getElementById("c").innerHTML ="No me encantaría, pero no me molestaria hacerlo";
                 document.getElementById("d").innerHTML ="Si lo veo adecuado participaría activamente";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                }
            };

            var campo2 = {
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Es el primer día de la Universidad y hacen una mesa redonda"+
                    "para conocercen mejor. ¿En esa mesa usted quien sería?";
                 document.getElementById("a").innerHTML ="La primera persona que hable";
                 document.getElementById("b").innerHTML ="Preferiría no hacerlo";
                 document.getElementById("c").innerHTML ="No me encantaría, pero no me molestaria hacerlo";
                 document.getElementById("d").innerHTML ="Si lo veo adecuado participaría activamente";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                }
            };

            var campo2 = {
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Es el primer día de la Universidad y hacen una mesa redonda"+
                    "para conocercen mejor. ¿En esa mesa usted quien sería?";
                 document.getElementById("a").innerHTML ="La primera persona que hable";
                 document.getElementById("b").innerHTML ="Preferiría no hacerlo";
                 document.getElementById("c").innerHTML ="No me encantaría, pero no me molestaria hacerlo";
                 document.getElementById("d").innerHTML ="Si lo veo adecuado participaría activamente";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                }
            };


            var con = 0;
            function preguntar(){
                if(con==0){
                    con++;
                    campo1.evaluar();
                    campo2.preguntar();
                }else if(con==1){
                    con++;
                    campo2.evaluar();
                    campo3.preguntar();
                }else if(con==2){
                    con++;
                    campo3.evaluar();
                    campo4.preguntar();
                }else if(con==3){
                    con++;
                    campo4.evaluar();
                    campo5.preguntar();
                }else if(con==4){
                    con++;
                    campo5.evaluar();
                    campo6.preguntar();
                }else if(con==5){
                    con++;
                    campo6.evaluar();
                    campo7.preguntar();
                }else if(con==6){
                    con++;
                    campo7.evaluar();
                    campo8.preguntar();
                }else if(con==7){
                    con++;
                    campo8.evaluar();
                    campo9.preguntar();
                }else if(con==8){
                    con++;
                    campo9.evaluar();
                    campo10.preguntar();
                }else if(con==9){
                    con++;
                    campo10.evaluar();
                    campo11.preguntar();
                }else if(con==10){
                    con++;
                    campo11.evaluar();
                    campo12.preguntar();
                }else if(con==11){
                    con++;
                    campo12.evaluar();
                    campo13.preguntar();
                }else if(con==12){
                    con++;
                    campo13.evaluar();
                    campo14.preguntar();
                }else if(con==13){
                    con++;
                    campo14.evaluar();
                    campo15.preguntar();
                }else if(con==14){
                    con++;
                    campo15.evaluar();
                    campo16.preguntar();
                }else if(con==15){
                    con++;
                    campo16.evaluar();
                    campo17.preguntar();
                }else if(con==16){
                    con++;
                    campo17.evaluar();
                    campo18.preguntar();
                }else if(con==17){
                    con++;
                    campo18.evaluar();
                    campo19.preguntar();
                }else if(con==18){
                    con++;
                    campo19.evaluar();
                   // campo.preguntar();
                }else if(con==19){
                   // con++;
                   // campo.evaluar();
                   // campo.preguntar();
                }
            }

        </script>

        <div class="container-fluid">
            <br>
            <div class="row">
                <div class = "col-md-6">
                    <a href="../../index.html"><img src="../web/imagenes/logo.png" width="100%" height="100%"></a>

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
                <div id="test" class="col-md-7   col-md-offset-3">
                        <center><div id="enunciado">Supón que en tu colegio hay una niña que está embarazada 
                            y va a ser expulsada. ¿Qué harías?</div>
                        <br></center>
                        <div class='col-md-8 col-md-offset-2'>
                        <ol type="a">
                            <div class="row"><li>
                                <div class="col-md-1"><input type='radio' checked="checked" name='opciones'></div>
                                <div class="col-md-11" id="a">Nada, porque no me interesa</div>
                            </div>
                            </li><br>
                            <div class="row"><li>
                                <div class="col-md-1"><input type='radio' name='opciones'></div>
                                <div class="col-md-11" id="b">Nada, porque aunque si me interesa no siento la necesidad 
                                    de hacer algo al respecto</div>
                            </div>
                            </li><br>
                            <div class="row"><li>
                                <div class="col-md-1"><input type='radio' name='opciones'></div>
                                <div class="col-md-11" id="c">Crearía una discusión donde se debatiera porqué debe o no la niña ser expulsada</div>
                            </div>
                            </li><br>
                            <div class="row"><li>
                                <div class="col-md-1"><input type='radio' name='opciones'></div>
                                <div class="col-md-11" id="d">Iniciaría una protesta a favor (o en contra) de los derechos de la niña a seguir estudiando</div>
                            </div>
                            </li><br>
                        </ol>
                         </div>
                         <br>
                </div>
            </div>
            <div class="row">
                <button class="btn btn-primary center-block" id="boton" type="button" onclick="preguntar();">Siguiente</button>
                <br>
                <br>
                <br>
            </div>
    </body>
</html>
