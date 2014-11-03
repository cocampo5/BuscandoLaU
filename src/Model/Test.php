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
                nombre : "Debatir y Liderazgo",
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
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo2 = {
                descarte : false,
                nombre : "Relaciones Públicas",
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
                        
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo3 = {
                descarte : false,
                nombre : "Memoria",
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
    
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo4 = {
                descarte : false,
                nombre : "Temor a la sangre",
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "¿La siguiente imagen que le causa?";
                 document.getElementById("a").innerHTML ="Ganas de desmayarse";
                 document.getElementById("b").innerHTML ="Repulsión y asco";
                 document.getElementById("c").innerHTML ="Interes por lo que pudo haber causado esa lesión";
                 document.getElementById("d").innerHTML ="No le genera ninguna sensación de asco";
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
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo5 = {
                nombre : "Adaptación",
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "En el país se acostumbra a manejar por la derecha, ¿Sí de un"+
"momento a otro se cambiara a la izquierda usted?";
                 document.getElementById("a").innerHTML ="Dejaría de usar auto hasta que vuelva todo a la normalidad, un cambio"+
"tan brusco no esta para su estilo de vida";
                 document.getElementById("b").innerHTML ="Lo intentaría pero probablemente sea de los que cause mas accidentes"+
"porque le cuesta asimilar la nueva norma";
                 document.getElementById("c").innerHTML ="No le molestaría en absoluto y se adaptaría rapidamente";
                 document.getElementById("d").innerHTML ="No sabe no responde";
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
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo6 = {
                nombre : "Pedagogía",
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "¿Cuando sabes de un tema de clase y tus compañeros te preguntan?";
                 document.getElementById("a").innerHTML ="Usted se molesta y se niega a responder";
                 document.getElementById("b").innerHTML ="No te molesta, pero respondes porque si";
                 document.getElementById("c").innerHTML ="Muestras el esfuerzo, te agrada y te gusta que te pregunten porque quieres"+
"que tu compañero aprenda de ti y ademas lo hacen";
                 document.getElementById("d").innerHTML ="Te gusta hacerlo pero por mucho esfuerzo que hagas parecen no entenderte";
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
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo7 = {
                descarte : false,
                nombre : "Cultura",
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "¿Te gustaria conocer otras culturas?";
                 document.getElementById("a").innerHTML ="Tal vez hay uno o dos países que me llamen la atencíon pueden ser tres o"+
"cinco máximo depende de muchas cosas";
                 document.getElementById("b").innerHTML ="No quiero salir de mi barrio en lo posible";
                 document.getElementById("c").innerHTML ="Quiero conocer hasta las ultimas tendencias en riego de plantas en marte";
                 document.getElementById("d").innerHTML ="Lo Clásico ir a europa occidental (Francia,Espa~na,Inglaterra,Suecia) tal"+
"vez India,China o Japón y no me molesta ningun país del centro o sur de América";
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
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo8 = {
                nombre : "Innovación",
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "¿Te gustaría ser el primero en ensayar productos nuevos, o ser"+
"el primero en crearlos?";
                 document.getElementById("a").innerHTML ="Crearlos";
                 document.getElementById("b").innerHTML ="Probarlos";
                 document.getElementById("c").innerHTML ="Ambas";
                 document.getElementById("d").innerHTML ="Ninguna de las anteriores ";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){

                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
                        this.descarte = true;
                        }
                    }
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo9 = {
                descarte : false,
                nombre : "Trabajo en equipo",
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Si tienes que realizar un trabajo en una empresa. ¿Qué "+
                    "preferirías?";
                 document.getElementById("a").innerHTML ="Trabajar solo";
                 document.getElementById("b").innerHTML ="Trabajar en grupos de dos o máximo tres personas";
                 document.getElementById("c").innerHTML ="Trabajar preferiblemente en equipos de más de tres personas";
                 document.getElementById("d").innerHTML ="No sabe/ No responde";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo10 = {
                descarte : false,
                nombre : "Razonamiento Matemático",
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Que número sigue en la siguiente secuencia?1, 11, 21, 1211,"+
                                                            "111221, 312211";
                 document.getElementById("a").innerHTML ="311211";
                 document.getElementById("b").innerHTML ="13112221";
                 document.getElementById("c").innerHTML ="32211321";
                 document.getElementById("d").innerHTML ="133221";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        
                      }else if((elementos[i].checked)&(i==1)){
                        //this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo11 = {
                descarte : false,
                nombre : "Idiomas",
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Si viajas a otro país y tienes que aprender otro idioma";
                 document.getElementById("a").innerHTML ="No te molestaría";
                 document.getElementById("b").innerHTML ="Preferiría ir a un país donde se hable español";
                 document.getElementById("c").innerHTML ="No sabe";
                 document.getElementById("d").innerHTML ="No responde";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){

                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo12 = {
                nombre : "Niños",
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "¿Tienes facilidad y te gustaría trabajar en un empleo"+
                    " que tengas que tratar con niños?";
                 document.getElementById("a").innerHTML ="Si";
                 document.getElementById("b").innerHTML ="No";
                 document.getElementById("c").innerHTML ="quizás";
                 document.getElementById("d").innerHTML ="No sabe, no responde";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo13 = {
                nombre : "Indoor Outdoors",
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "De las siguientes opciones, ¿Cuál prefieres?";
                 document.getElementById("a").innerHTML ="Prefieres estar en casa, trabajar en una empresa en una oficina"+
"tranquilo no te molesta un cubículo y hasta te parece agradable(Indoor)";
                 document.getElementById("b").innerHTML ="Te gusta estar en un lugar activo y moviendote preferiblemente"+
                 "al aire libre (Outdoor)";
                 document.getElementById("c").innerHTML ="No sabe";
                 document.getElementById("d").innerHTML ="No responde";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        //this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        //this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo14 = {
                descarte : false,
                nombre : "Oratoria",
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Si van a hacer un homenaje a un amigo tuyo y te "+
                    "encargaran a hacer el discurso...";
                 document.getElementById("a").innerHTML ="La gente se dormiria apenas diga 'hola'";
                 document.getElementById("b").innerHTML ="Sería un discurso sencillo y no muy emocional pero cumpliria con lo pedido";
                 document.getElementById("c").innerHTML ="La gente lloraría de la emoción";
                 document.getElementById("d").innerHTML ="Tu amigo sería nominado al nobel, y como persona del a~no por la "+
                 "revista Times";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo15 = {
                descarte : false,
                nombre : "Naturaleza",
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "¿Te gustaría trabajar en un ambiente rodeado por naturaleza?";
                 document.getElementById("a").innerHTML ="Si, me encantaría es mi trabajo ideal";
                 document.getElementById("b").innerHTML ="No, preferiblemente mientras este en una ciudad sería feliz";
                 document.getElementById("c").innerHTML ="No me molestaría, pero tampoco es mi sueño";
                 document.getElementById("d").innerHTML ="No sabe / No responde";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo16 = {
                nombre : "Deporte",
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "¿Eres bueno (como para nivel semi o profesional)"+
                    " en algun deporte?";
                 document.getElementById("a").innerHTML ="Si";
                 document.getElementById("b").innerHTML ="No";
                 document.getElementById("c").innerHTML ="No sabe";
                 document.getElementById("d").innerHTML ="No responde";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo17 = {
                nombre : "Habilidades Artisticas",
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "¿Haces alguna de las siguientes cosas o tienes interes en ellas?"+"(marca todas las que sí)";
                 document.getElementById("a").innerHTML ="Dibujo,Pintura,Dise~no, Arquitectua";
                 document.getElementById("b").innerHTML ="Música,Canto,Baile";
                 document.getElementById("c").innerHTML ="Escritura, Poesía, Oratoria";
                 document.getElementById("d").innerHTML ="Fotografía,Historietas, Actuación";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        //this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        //this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo18 = {
                nombre : "Empresarismo",
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Cuando te gradues, ¿Qué quisieras hacer?";
                 document.getElementById("a").innerHTML ="Trabajar en una empresa en lo que sea pero que de mucho mucho dinero";
                 document.getElementById("b").innerHTML ="Trabajar con un salario con lo necesario para sobrevivir pero que "+
                 "sea en lo que me guste";
                 document.getElementById("c").innerHTML ="Crear una empresa y generar empleo";
                 document.getElementById("d").innerHTML ="No trabajar para una empresa, tu sueño es la academia y la investigación"+
                 "o una ONG";
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
                        this.descarte = true;
                        }
                    }
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo = {
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
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo = {
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
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            function evaluar(){
                var descartados = [];
                var i = 0;
                if(campo1.descarte){
                    descartados[i] = campo1.getNombre();
                    i++;
                }
                if(campo2.descarte){
                    descartados[i] = campo2.getNombre();
                    i++;
                }
                if(campo3.descarte){
                    descartados[i] = campo3.getNombre();
                    i++;
                }
                if(campo4.descarte){
                    descartados[i] = campo4.getNombre();
                    i++;
                }
                if(campo5.descarte){
                    descartados[i] = campo5.getNombre();
                    i++;
                }
                if(campo6.descarte){
                    descartados[i] = campo6.getNombre();
                    i++;
                }
                if(campo7.descarte){
                    descartados[i] = campo7.getNombre();
                    i++;
                }
                if(campo8.descarte){
                    descartados[i] = campo8.getNombre();
                    i++;
                }
                if(campo9.descarte){
                    descartados[i] = campo9.getNombre();
                    i++;
                }
                if(campo10.descarte){
                    descartados[i] = campo10.getNombre();
                    i++;
                }
                if(campo11.descarte){
                    descartados[i] = campo11.getNombre();
                    i++;
                }
                if(campo12.descarte){
                    descartados[i] = campo12.getNombre();
                    i++;
                }
                if(campo13.descarte){
                    descartados[i] = campo13.getNombre();
                    i++;
                }
                if(campo14.descarte){
                    descartados[i] = campo14.getNombre();
                    i++;
                }
                if(campo15.descarte){
                    descartados[i] = campo15.getNombre();
                    i++;
                }
                if(campo16.descarte){
                    descartados[i] = campo16.getNombre();
                    i++;
                }
                if(campo17.descarte){
                    descartados[i] = campo17.getNombre();
                    i++;
                }
                if(campo18.descarte){
                    descartados[i] = campo18.getNombre();
                    i++;
                }
                var text = "Se descartaron: ";
                for (j=0;j<descartados.length;j++) { 
                    text = text +" - "+ descartados[j]+" ";
                }
                document.getElementById("test").innerHTML = text;
            }

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
                    //campo19.preguntar();
                    evaluar();
                }else if(con==18){
                    con++;
                    //campo19.evaluar();
                   // campo20.preguntar();
                }else if(con==19){
                   // con++;
                   // campo20.evaluar();
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
