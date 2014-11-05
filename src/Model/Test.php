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

            var pregrado1 = {
                descarte : false,
                nombre : "Planeación y desarrollo social",
                c1 : false,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : true,
                c7 : true,
                c8 : false,
                c9 : true,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : false,
                c14 : true,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : true,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado2 = {
                descarte : false,
                nombre : "Administración de Empresas turísticas",
                c1 : false,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : false,
                c7 : true,
                c8 : false,
                c9 : true,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : true,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado3 = {
                descarte : false,
                nombre : "Ingeniería Ambiental",
                c1 : false,
                c2 : true,
                c3 : false,
                c4 : false,
                c5 : true,
                c6 : true,
                c7 : false,
                c8 : false,
                c9 : true,
                c10 : true,
                c11 : true,
                c12 : false,
                c13 : false,
                c14 : true,
                c15 : false,
                c16 : true,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : true,
                c21 : false,
                c22 : false,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado4 = {
                descarte : false,
                nombre : "Construcciones civiles",
                c1 : false,
                c2 : false,
                c3 : false,
                c4 : false,
                c5 : true,
                c6 : false,
                c7 : true,
                c8 : true,
                c9 : true,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : true,
                c17 : true,
                c18 : true,
                c19 : false,
                c20 : true,
                c21 : false,
                c22 : false,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado5 = {
                descarte : false,
                nombre : "Arquitectura",
                c1 : false,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : false,
                c7 : false,
                c8 : true,
                c9 : true,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : true,
                c19 : false,
                c20 : true,
                c21 : false,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado6 = {
                descarte : false,
                nombre : "Bacteriología y Laboratorio clínico",
                c1 : false,
                c2 : false,
                c3 : false,
                c4 : true,
                c5 : true,
                c6 : false,
                c7 : false,
                c8 : false,
                c9 : false,
                c10 : true,
                c11 : false,
                c12 : false,
                c13 : true,
                c14 : true,
                c15 : false,
                c16 : true,
                c17 : false,
                c18 : false,
                c19 : false,
                c20 : true,
                c21 : true,
                c22 : false,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado7 = {
                descarte : false,
                nombre : "Contaduría pública",
                c1 : false,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : false,
                c7 : false,
                c8 : true,
                c9 : false,
                c10 : true,
                c11 : false,
                c12 : false,
                c13 : true,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado8 = {
                descarte : false,
                nombre : "Ingeniería de Sistemas",
                c1 : true,
                c2 : false,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : true,
                c7 : false,
                c8 : true,
                c9 : true,
                c10 : true,
                c11 : true,
                c12 : false,
                c13 : false,
                c14 : true,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : true,
                getNombre : function(c) {
                    return this.nombre;
                }
            };var pregrado9 = {
                descarte : false,
                nombre : "Derecho",
                c1 : true,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : true,
                c7 : true,
                c8 : true,
                c9 : true,
                c10 : false,
                c11 : true,
                c12 : false,
                c13 : true,
                c14 : false,
                c15 : true,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : true,
                c21 : true,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };var pregrado10 = {
                descarte : false,
                nombre : "Administración de Empresas",
                c1 : false,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : false,
                c7 : true,
                c8 : false,
                c9 : true,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : true,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };var pregrado11 = {
                descarte : false,
                nombre : "Negocios Internacionales",
                c1 : false,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : false,
                c7 : true,
                c8 : false,
                c9 : true,
                c10 : false,
                c11 : true,
                c12 : false,
                c13 : true,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };var pregrado12 = {
                descarte : false,
                nombre : "Ingeniería Informática",
                c1 : true,
                c2 : false,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : true,
                c7 : false,
                c8 : true,
                c9 : true,
                c10 : true,
                c11 : true,
                c12 : false,
                c13 : false,
                c14 : true,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : true,
                getNombre : function(c) {
                    return this.nombre;
                }
            };var pregrado13 = {
                descarte : false,
                nombre : "Administración de Empresas Agropecuarias",
                c1 : false,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : false,
                c7 : true,
                c8 : false,
                c9 : true,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : true,
                c14 : true,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };var pregrado14 = {
                descarte : false,
                nombre : "Industrias Pecuarias",
                c1 : false,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : false,
                c7 : true,
                c8 : false,
                c9 : true,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : true,
                c14 : true,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };var pregrado15 = {
                descarte : false,
                nombre : "Medicina Veterinaria",
                c1 : false,
                c2 : false,
                c3 : true,
                c4 : true,
                c5 : true,
                c6 : true,
                c7 : true,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : true,
                c13 : true,
                c14 : true,
                c15 : false,
                c16 : true,
                c17 : true,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : false,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };var pregrado16 = {
                descarte : false,
                nombre : "Zootecnia",
                c1 : false,
                c2 : false,
                c3 : true,
                c4 : true,
                c5 : true,
                c6 : true,
                c7 : true,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : true,
                c13 : true,
                c14 : true,
                c15 : false,
                c16 : true,
                c17 : true,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : false,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };var pregrado17 = {
                descarte : false,
                nombre : "Comunicación y periodismo",
                c1 : true,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : true,
                c7 : true,
                c8 : false,
                c9 : true,
                c10 : false,
                c11 : true,
                c12 : false,
                c13 : true,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : true,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };var pregrado18 = {
                descarte : false,
                nombre : "Licenciatura en Educación Básica con Énfasis en Ética, Valores Humanos y Educación Religiosa",
                c1 : true,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : true,
                c7 : true,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : true,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : true,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };var pregrado19 = {
                descarte : false,
                nombre : "Licenciatura en Educación Religiosa",
                c1 : true,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : true,
                c7 : true,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : true,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : true,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };var pregrado20 = {
                descarte : false,
                nombre : "Licenciatura en Preescolar",
                c1 : true,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : true,
                c7 : true,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : true,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : true,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };var pregrado21 = {
                descarte : false,
                nombre : "Psicología",
                c1 : true,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : true,
                c7 : true,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : true,
                c13 : false,
                c14 : false,
                c15 : true,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : true,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };var pregrado22 = {
                descarte : false,
                nombre : "Ingeniería de alimentos",
                c1 : true,
                c2 : false,
                c3 : true,
                c4 : true,
                c5 : true,
                c6 : true,
                c7 : false,
                c8 : true,
                c9 : true,
                c10 : true,
                c11 : true,
                c12 : false,
                c13 : true,
                c14 : true,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };
            var pregrado23 = {
                descarte : false,
                nombre : "Ingeniería Industrial",
                c1 : true,
                c2 : false,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : true,
                c7 : false,
                c8 : true,
                c9 : true,
                c10 : true,
                c11 : true,
                c12 : false,
                c13 : false,
                c14 : true,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado24 = {
                descarte : false,
                nombre : "Medicina",
                c1 : false,
                c2 : false,
                c3 : true,
                c4 : true,
                c5 : true,
                c6 : true,
                c7 : true,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : true,
                c13 : true,
                c14 : true,
                c15 : false,
                c16 : true,
                c17 : true,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : false,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };
            var pregrado25 = {
                descarte : false,
                nombre : "Ingeniería Administrativa",
                c1 : true,
                c2 : false,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : true,
                c7 : false,
                c8 : true,
                c9 : true,
                c10 : true,
                c11 : true,
                c12 : false,
                c13 : true,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };
            var pregrado26 = {
                descarte : false,
                nombre : "Biología",
                c1 : false,
                c2 : false,
                c3 : true,
                c4 : true,
                c5 : true,
                c6 : true,
                c7 : true,
                c8 : false,
                c9 : false,
                c10 : true,
                c11 : false,
                c12 : true,
                c13 : true,
                c14 : true,
                c15 : false,
                c16 : true,
                c17 : true,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : false,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };
            var pregrado27 = {
                descarte : false,
                nombre : "Ingeniería Biomédica",
                c1 : false,
                c2 : false,
                c3 : true,
                c4 : true,
                c5 : true,
                c6 : true,
                c7 : true,
                c8 : false,
                c9 : false,
                c10 : true,
                c11 : false,
                c12 : true,
                c13 : true,
                c14 : true,
                c15 : false,
                c16 : true,
                c17 : true,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : false,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };
            var pregrado28 = {
                descarte : false,
                nombre : "Ingeniería civil",
                c1 : true,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : true,
                c7 : false,
                c8 : true,
                c9 : true,
                c10 : true,
                c11 : true,
                c12 : false,
                c13 : false,
                c14 : true,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : true,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };
            var pregrado29 = {
                descarte : false,
                nombre : "Ingeniería financiera",
                c1 : true,
                c2 : false,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : true,
                c7 : false,
                c8 : true,
                c9 : true,
                c10 : true,
                c11 : true,
                c12 : false,
                c13 : true,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };
            var pregrado30 = {
                descarte : false,
                nombre : "Ingeniería geológica",
                c1 : true,
                c2 : false,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : true,
                c7 : false,
                c8 : true,
                c9 : true,
                c10 : true,
                c11 : true,
                c12 : false,
                c13 : false,
                c14 : true,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };
            var pregrado31 = {
                descarte : false,
                nombre : "Ingeniería mecánica",
                c1 : true,
                c2 : false,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : true,
                c7 : false,
                c8 : true,
                c9 : true,
                c10 : true,
                c11 : true,
                c12 : false,
                c13 : true,
                c14 : true,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };
            var pregrado32 = {
                descarte : false,
                nombre : "Ingeniería Mecatrónica",
                c1 : false,
                c2 : false,
                c3 : false,
                c4 : false,
                c5 : false,
                c6 : false,
                c7 : false,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };
            var pregrado33 = {
                descarte : false,
                nombre : "Mercadeo",
                c1 : false,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : false,
                c7 : true,
                c8 : false,
                c9 : true,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : true,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };
            var pregrado34 = {
                descarte : false,
                nombre : "Administración financiera",
                c1 : true,
                c2 : false,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : true,
                c7 : false,
                c8 : true,
                c9 : true,
                c10 : false,
                c11 : true,
                c12 : false,
                c13 : true,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };
            var pregrado35 = {
                descarte : false,
                nombre : "Administración de Sistemas Informáticos",
                c1 : true,
                c2 : false,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : true,
                c7 : false,
                c8 : true,
                c9 : true,
                c10 : false,
                c11 : true,
                c12 : false,
                c13 : true,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : true,
                getNombre : function(c) {
                    return this.nombre;
                }
            };
            var pregrado36 = {
                descarte : false,
                nombre : "Fisioterapia",
                c1 : false,
                c2 : true,
                c3 : false,
                c4 : true,
                c5 : true,
                c6 : true,
                c7 : false,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : false,
                c14 : true,
                c15 : false,
                c16 : false,
                c17 : true,
                c18 : true,
                c19 : false,
                c20 : true,
                c21 : false,
                c22 : false,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };
            var pregrado37 = {
                descarte : false,
                nombre : "Fonoaudiología",
                c1 : false,
                c2 : false,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : true,
                c7 : true,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : true,
                c12 : false,
                c13 : true,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : false,
                c20 : true,
                c21 : true,
                c22 : true,
                c23 : false,
                c24 : true,
                getNombre : function(c) {
                    return this.nombre;
                }
            };
            var pregrado38 = {
                descarte : false,
                nombre : "Planeación y desarrollo social",
                c1 : false,
                c2 : false,
                c3 : false,
                c4 : false,
                c5 : false,
                c6 : false,
                c7 : false,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };
            var pregrado39 = {
                descarte : false,
                nombre : "Odontología",
                c1 : false,
                c2 : false,
                c3 : true,
                c4 : true,
                c5 : true,
                c6 : true,
                c7 : true,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : true,
                c13 : true,
                c14 : false,
                c15 : false,
                c16 : true,
                c17 : true,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : false,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };
            var pregrado40 = {
                descarte : false,
                nombre : "Laboratorio de Prótesis Dental",
                c1 : false,
                c2 : false,
                c3 : true,
                c4 : true,
                c5 : true,
                c6 : true,
                c7 : true,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : true,
                c13 : true,
                c14 : true,
                c15 : false,
                c16 : true,
                c17 : true,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : false,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };
            var pregrado41 = {
                descarte : false,
                nombre : "Hotelería y Turismo",
                c1 : false,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : false,
                c7 : true,
                c8 : false,
                c9 : true,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : true,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado42 = {
                descarte : false,
                nombre : "Artes Plasticas",
                c1 : false,
                c2 : false,
                c3 : true,
                c4 : true,
                c5 : true,
                c6 : true,
                c7 : false,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : true,
                c14 : true,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : true,
                c19 : false,
                c20 : true,
                c21 : false,
                c22 : false,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado43 = {
                descarte : false,
                nombre : "Diseño Visual",
                c1 : false,
                c2 : false,
                c3 : true,
                c4 : true,
                c5 : true,
                c6 : true,
                c7 : true,
                c8 : true,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : true,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : true,
                c19 : false,
                c20 : 20,
                c21 : false,
                c22 : false,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado44 = {
                descarte : false,
                nombre : "Música",
                c1 : false,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : true,
                c7 : true,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : true,
                c14 : true,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : true,
                c19 : false,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado45 = {
                descarte : false,
                nombre : "Licenciatura en Lengua Castellana",
                c1 : true,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : true,
                c7 : true,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : true,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : true,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado46 = {
                descarte : false,
                nombre : "Diseño Gráfico",
                c1 : false,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : false,
                c7 : false,
                c8 : true,
                c9 : true,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : true,
                c19 : false,
                c20 : true,
                c21 : false,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado47 = {
                descarte : false,
                nombre : "Desarrolo Familiar",
                c1 : true,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : true,
                c7 : true,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : true,
                c12 : true,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : true,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado48 = {
                descarte : false,
                nombre : "Filosofía",
                c1 : true,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : true,
                c7 : true,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : true,
                c13 : false,
                c14 : false,
                c15 : true,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : true,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };


            var pregrado50 = {
                descarte : false,
                nombre : "Licenciatura en Inglés",
                c1 : true,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : true,
                c7 : true,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : true,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado51 = {
                descarte : false,
                nombre : "Licenciatura en Filosofía",
                c1 : true,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : true,
                c7 : true,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : true,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : true,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado52 = {
                descarte : false,
                nombre : "Licenciatura en Tecnología e informática",
                c1 : true,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : true,
                c7 : true,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : true,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : true,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado53 = {
                descarte : false,
                nombre : "Licenciatura en Teología",
                c1 : true,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : true,
                c7 : true,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : true,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : true,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado54 = {
                descarte : false,
                nombre : "Publicidad",
                c1 : false,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : false,
                c7 : false,
                c8 : true,
                c9 : true,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : true,
                c19 : false,
                c20 : true,
                c21 : false,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado55 = {
                descarte : false,
                nombre : "Teología",
                c1 : true,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : true,
                c7 : true,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : true,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : true,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado56 = {
                descarte : false,
                nombre : "Ingeniería Electrónica ",
                c1 : true,
                c2 : false,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : true,
                c7 : false,
                c8 : true,
                c9 : true,
                c10 : true,
                c11 : true,
                c12 : false,
                c13 : true,
                c14 : true,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado57 = {
                descarte : false,
                nombre : "Administración Humana",
                c1 : true,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : true,
                c7 : true,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : true,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : true,
                c22 : true,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado58 = {
                descarte : false,
                nombre : "Diseño de Modas",
                c1 : false,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : false,
                c7 : false,
                c8 : true,
                c9 : true,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : true,
                c19 : false,
                c20 : true,
                c21 : false,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado59 = {
                descarte : false,
                nombre : "Diseño Espacios/Escenarios",
                c1 : false,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : false,
                c7 : false,
                c8 : true,
                c9 : true,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : true,
                c19 : false,
                c20 : true,
                c21 : false,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado60 = {
                descarte : false,
                nombre : "Comunicación Publicitaria",
                c1 : false,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : false,
                c7 : false,
                c8 : true,
                c9 : true,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : false,
                c14 : false,
                c15 : true,
                c16 : false,
                c17 : false,
                c18 : true,
                c19 : false,
                c20 : true,
                c21 : false,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado61 = {
                descarte : false,
                nombre : "Comunicación Organizacional",
                c1 : true,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : true,
                c7 : true,
                c8 : false,
                c9 : true,
                c10 : false,
                c11 : true,
                c12 : false,
                c13 : true,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : true,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

                var pregrado62 = {
                descarte : false,
                nombre : "Administración Comercial y de Mercadeo",
                c1 : false,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : false,
                c7 : true,
                c8 : false,
                c9 : true,
                c10 : false,
                c11 : true,
                c12 : false,
                c13 : true,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

                var pregrado63 = {
                descarte : false,
                nombre : "Gestión Empresarial",
                c1 : false,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : false,
                c7 : true,
                c8 : false,
                c9 : true,
                c10 : false,
                c11 : true,
                c12 : false,
                c13 : true,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

                var pregrado64 = {
                descarte : false,
                nombre : "Gestión de Negocios Internacionales",
                c1 : false,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : false,
                c7 : true,
                c8 : false,
                c9 : true,
                c10 : false,
                c11 : true,
                c12 : false,
                c13 : true,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

                var pregrado65 = {
                descarte : false,
                nombre : "Artes Visuales",
                c1 : false,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : false,
                c7 : false,
                c8 : true,
                c9 : true,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : false,
                c14 : false,
                c15 : true,
                c16 : false,
                c17 : false,
                c18 : true,
                c19 : false,
                c20 : true,
                c21 : false,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

                var pregrado66 = {
                descarte : false,
                nombre : "Ingeniería de Producción",
                c1 : true,
                c2 : false,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : false,
                c7 : false,
                c8 : true,
                c9 : true,
                c10 : true,
                c11 : true,
                c12 : false,
                c13 : true,
                c14 : true,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

                var pregrado67 = {
                descarte : false,
                nombre : "Administración Tecnologica",
                c1 : false,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : false,
                c7 : true,
                c8 : false,
                c9 : true,
                c10 : false,
                c11 : true,
                c12 : false,
                c13 : true,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

                var pregrado68 = {
                descarte : false,
                nombre : "Planeación y Desarrollo Administración de Empresas Agropecuarias",
                c1 : false,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : false,
                c6 : false,
                c7 : true,
                c8 : false,
                c9 : true,
                c10 : false,
                c11 : true,
                c12 : false,
                c13 : true,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

                var pregrado69 = {
                descarte : false,
                nombre : "Comunicación Audiovisual",
                c1 : false,
                c2 : true,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : false,
                c7 : false,
                c8 : true,
                c9 : true,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : false,
                c14 : false,
                c15 : true,
                c16 : false,
                c17 : false,
                c18 : true,
                c19 : false,
                c20 : true,
                c21 : false,
                c22 : true,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

                var pregrado70 = {
                descarte : false,
                nombre : "Ingeniería en Instrumentación y Control",
                c1 : true,
                c2 : false,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : true,
                c7 : false,
                c8 : true,
                c9 : true,
                c10 : false,
                c11 : true,
                c12 : false,
                c13 : true,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

                var pregrado71 = {
                descarte : false,
                nombre : "Ingeniería en Higiene y Seguridad Ocupacional",
                c1 : true,
                c2 : false,
                c3 : true,
                c4 : true,
                c5 : true,
                c6 : true,
                c7 : false,
                c8 : true,
                c9 : true,
                c10 : true,
                c11 : true,
                c12 : false,
                c13 : true,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado72 = {
                descarte : false,
                nombre : "Profesional en Criminalística",
                c1 : true,
                c2 : false,
                c3 : true,
                c4 : false,
                c5 : true,
                c6 : true,
                c7 : false,
                c8 : true,
                c9 : true,
                c10 : true,
                c11 : true,
                c12 : false,
                c13 : true,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : true,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : true,
                c24 : true,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado = {
                descarte : false,
                nombre : "",
                c1 : false,
                c2 : false,
                c3 : false,
                c4 : false,
                c5 : false,
                c6 : false,
                c7 : false,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado = {
                descarte : false,
                nombre : "",
                c1 : false,
                c2 : false,
                c3 : false,
                c4 : false,
                c5 : false,
                c6 : false,
                c7 : false,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado = {
                descarte : false,
                nombre : "",
                c1 : false,
                c2 : false,
                c3 : false,
                c4 : false,
                c5 : false,
                c6 : false,
                c7 : false,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado = {
                descarte : false,
                nombre : "",
                c1 : false,
                c2 : false,
                c3 : false,
                c4 : false,
                c5 : false,
                c6 : false,
                c7 : false,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado = {
                descarte : false,
                nombre : "",
                c1 : false,
                c2 : false,
                c3 : false,
                c4 : false,
                c5 : false,
                c6 : false,
                c7 : false,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado = {
                descarte : false,
                nombre : "",
                c1 : false,
                c2 : false,
                c3 : false,
                c4 : false,
                c5 : false,
                c6 : false,
                c7 : false,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado = {
                descarte : false,
                nombre : "",
                c1 : false,
                c2 : false,
                c3 : false,
                c4 : false,
                c5 : false,
                c6 : false,
                c7 : false,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado = {
                descarte : false,
                nombre : "",
                c1 : false,
                c2 : false,
                c3 : false,
                c4 : false,
                c5 : false,
                c6 : false,
                c7 : false,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var pregrado = {
                descarte : false,
                nombre : "",
                c1 : false,
                c2 : false,
                c3 : false,
                c4 : false,
                c5 : false,
                c6 : false,
                c7 : false,
                c8 : false,
                c9 : false,
                c10 : false,
                c11 : false,
                c12 : false,
                c13 : false,
                c14 : false,
                c15 : false,
                c16 : false,
                c17 : false,
                c18 : false,
                c19 : false,
                c20 : false,
                c21 : false,
                c22 : false,
                c23 : false,
                c24 : false,
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo1 = {
                descarte : false,
                nombre : "Debatir y Liderazgo",
                evaluar : function(c) {
                var elementos = document.getElementsByName("opciones");
 
                for(var i=0; i<elementos.length; i++) {
                  if((elementos[i].checked)&(i==0)){
                    //this.descarte = true;
                    respuestas.c1 = false;
                  }else if((elementos[i].checked)&(i==1)){
                    //this.descarte = true;
                    respuestas.c1 = false;
                  }else if((elementos[i].checked)&(i==2)){
                   //this.descarte = false;
                  }else if((elementos[i].checked)&(i==3)){
                    //this.descarte = false;
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
                        //this.descarte = true;
                        respuestas.c2 = false;
                      }else if((elementos[i].checked)&(i==2)){
                        respuestas.c2 = false;
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
                 document.getElementById("d").innerHTML ="A duras penas recuerdo el mío y el de mis padres";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        //this.descarte = true;
                        respuestas.c3 = false;
                      }else if((elementos[i].checked)&(i==1)){
    
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
                          respuestas.c3 = false;
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
                    document.getElementById("enunciado").innerHTML = "¿La siguiente imagen que le causa?<br><br>"+
                    "<img src='../web/imagenes/mano.jpg' width='30%' height='30%'>";
                 document.getElementById("a").innerHTML ="Ganas de desmayarse";
                 document.getElementById("b").innerHTML ="Repulsión y asco";
                 document.getElementById("c").innerHTML ="Interes por lo que pudo haber causado esa lesión";
                 document.getElementById("d").innerHTML ="No le genera ninguna sensación de asco";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                       // this.descarte = true;
                       respuestas.c4 = false;
                      }else if((elementos[i].checked)&(i==1)){
                        //this.descarte = true;
                        respuestas.c4 = false;
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
                 document.getElementById("c").innerHTML ="No me molestaría en absoluto y se adaptaría rapidamente";
                 document.getElementById("d").innerHTML ="Sería sorprendente, y la adaptación tardaría su tiempo, "+
                 "pero nada del otro mundo";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        //this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        //this.descarte = true;
                        respuestas.c5 = false;
                      }else if((elementos[i].checked)&(i==2)){
                          respuestas.c5 = false;
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
                        //this.descarte = true;
                        respuestas.c6 = false;
                      }else if((elementos[i].checked)&(i==1)){
                        //this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
                        respuestas.c6 = false;   
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
                        //this.descarte = true;
                        respuestas.c7 = false;
                      }else if((elementos[i].checked)&(i==1)){
                        //this.descarte = true;
                        respuestas.c7 = false;
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
                        //this.descarte = true;
                        respuestas.c8 = false;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
                       // this.descarte = true;
                        respuestas.c8 = false;
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
                        //this.descarte = true;
                        respuestas.c9 = false;

                      }else if((elementos[i].checked)&(i==1)){
                        respuestas.c9 = false;
                        
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
                 document.getElementById("d").innerHTML ="No lo quiero hacer";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        
                      }else if((elementos[i].checked)&(i==1)){
                        //this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
                        respuestas.c10 = false; 
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
                 document.getElementById("c").innerHTML ="Me encantaría, uno si va a viajar es para conocer "+
                 "culturas completamente distintas";
                 document.getElementById("d").innerHTML ="Si el idioma es fácil puede que lo haga";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){

                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                        respuestas.c11 = false;

                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
                        respuestas.c11 = false;
    
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
                 document.getElementById("a").innerHTML ="Si, amo los niños";
                 document.getElementById("b").innerHTML ="No, no soy bueno tratando con ellos y no me gustan";
                 document.getElementById("c").innerHTML ="Aunque me gustan sería un fracaso trabajando con ellos";
                 document.getElementById("d").innerHTML ="Lo intentaría, ¿Por qué no hacerlo?"
                 ;
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                        respuestas.c12 = false;

                      }else if((elementos[i].checked)&(i==2)){
                        respuestas.c12 = false;
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo13 = {
                nombre : "Indoor",
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Tienes que trabajar en una oficina todos "+
                    "los días y con un horario fijo...";
                 document.getElementById("a").innerHTML ="Pues ese es el ideal,¿No?";
                 document.getElementById("b").innerHTML ="Me mato, no puedo estar encerrado";
                 document.getElementById("c").innerHTML ="No me mataría, sólo tendría estrés pero es "+
                 "lo normal, cualquier rutina cansa";
                 document.getElementById("d").innerHTML ="En una empresa sí, pero sentado todo el día NO, necesito algo activo";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        //this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                        respuestas.c13 = false;

                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
                        respuestas.c13 = false;
                      
                        }
                    }
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo14 = {
                nombre : "Outdoor",
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Te ofrecen el empleo de la vida nada de "+
                    "ofcinas, todo es afuera, ya sea naturaleza o en la ciudad en los barrios; ¿Qué opinas?";
                 document.getElementById("a").innerHTML ="Excelente, Nada mejor que explorar el mundo y andarlo mientras trabajo";
                 document.getElementById("b").innerHTML ="Como el Doctor Sheldon Cooper dijo 'Si afuera es tan bueno,"+
                 "¿por qué la humanidad ha pasado miles de años tratando de perfeccionar el interior?'";
                 document.getElementById("c").innerHTML ="Sería bonito pero no para siempre hay que tener un equilibrio";
                 document.getElementById("d").innerHTML ="Preferiblemente oficina todos los días de la semana"+
                 " menos uno, ese día trabajar afuera sería bonito";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        //this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                        respuestas.c14 = false;

                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
                        respuestas.c14 = false;
    
                        }
                    }
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo15 = {
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
                        respuestas.c15 = false;

                      }else if((elementos[i].checked)&(i==1)){
                        respuestas.c15 = false;
                        
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
                descarte : false,
                nombre : "Naturaleza",
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "¿Te gustaría trabajar en un ambiente rodeado por naturaleza?";
                 document.getElementById("a").innerHTML ="Si, me encantaría es mi trabajo ideal";
                 document.getElementById("b").innerHTML ="No, preferiblemente mientras este en una ciudad sería feliz";
                 document.getElementById("c").innerHTML ="No me molestaría, pero tampoco es mi sueño";
                 document.getElementById("d").innerHTML ="Ciudad o campo soy una persona que se adapta a la condición"+
                 " que sea ya sea de safari o de corbata";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                        respuestas.c16 = false;

                      }else if((elementos[i].checked)&(i==2)){
                        respuestas.c16 = false;
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo17 = {
                nombre : "Deporte",
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "¿Eres bueno (como para nivel semi o profesional)"+
                    " en algun deporte?";
                 document.getElementById("a").innerHTML ="Ni a nivel semi o profesional pero me interesan los deportes";
                 document.getElementById("b").innerHTML ="Mi cara es un imán de balones vivientes (y raquetas,y puñetazos)"+
                 " y por eso le corro (irónicamente) a los deportes";
                 document.getElementById("c").innerHTML ="He sido incluso considerado para jugar en la selección"+
                 " regional o nacional de un equipo";
                 document.getElementById("d").innerHTML ="Aunque sea bueno, soy muy perezoso o no me "+
                 "imagino toda la vida practicando un deporte";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        respuestas.c17 = false;
                        
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                        respuestas.c17 = false;

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
                nombre : "Habilidades Artisticas",
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "A la hora de usar su tiempo de ocio, ¿qué preferiria hacer?";
                 document.getElementById("a").innerHTML ="Dibujar o Tocar algun Instrumento Mu  sical";
                 document.getElementById("b").innerHTML ="Leer las noticias o un buen libro";
                 document.getElementById("c").innerHTML ="Practicar un deporte";
                 document.getElementById("d").innerHTML ="Crear algo mecánico";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        //this.descarte = true;

                      }else if((elementos[i].checked)&(i==1)){
                        //this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
                        respuestas.c18 = false;
    
                      }else if((elementos[i].checked)&(i==3)){
                        respuestas.c18 = false;
                        
                        }
                    }
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo19 = {
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
                        //this.descarte = true;

                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                        respuestas.c19 = false;

                      }else if((elementos[i].checked)&(i==2)){
                        
                      }else if((elementos[i].checked)&(i==3)){
                        this.descarte = true;
                        respuestas.c19 = false;

                        }
                    }
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo20 = {
                nombre : "Praxis",
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Tu profesor de física te pone de tarea hacer un avioncito"+
                    " de papel y que vuele; ¿Qué es lo primero que harías?";
                 document.getElementById("a").innerHTML ="Investigar sobre las propiedades del papel que vas a usar,"+
                 " la aerodinámica, estudias sobre caida libre y demás";
                 document.getElementById("b").innerHTML ="Harías el avioncito de papel una y otra vez hasta que vuele";
                 document.getElementById("c").innerHTML ="Le dirías a un amigo que te haga uno";
                 document.getElementById("d").innerHTML ="Ninguna de las anteriores";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        //this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        //this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
                        respuestas.c20 = false;
                          
                      }else if((elementos[i].checked)&(i==3)){
                        respuestas.c20 = false;
                          
                        }
                    }
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };


            var campo21 = {
                nombre : "Redacción",
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Cuando escribes algo, ¿la reacción de la gente que"+
                    " lo lee es?";
                 document.getElementById("a").innerHTML ="Dicen que serás el próximo Nobel de Literatura";
                 document.getElementById("b").innerHTML ="Nunca he escrito o lo hago pocas veces";
                 document.getElementById("c").innerHTML ="Les gusta tu manera de escribir";
                 document.getElementById("d").innerHTML ="Dicen que deberías mejorar tu manera de escribir";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        //this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        //this.descarte = true;
                        respuestas.c21 = false;

                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
                        respuestas.c21 = false;
                          
                        }
                    }
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo22 = {
                nombre : "Literatura",
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Es viernes en la noche y ha sido una dura semana de estudio,"+
                    " pero antes de hacer eso que disfrutas, te frustras y te das cuenta que te vas a tener que quedar leyendo un"+
                    " libro/documento de 200 paginas y en seguida tu...";
                 document.getElementById("a").innerHTML ="En primer lugar, ¿Por qué me frustraría?, si leer era mi plan original"+
                 " y si no lo era pues leer no es un poblema";
                 document.getElementById("b").innerHTML ="Si hay que hacerlo, pues no hay mas remedio, pero más 200 paginas?,"+
                 " ¿No es un poco largo?";
                 document.getElementById("c").innerHTML ="¿Por qué habría de leer un libro de 200 paginas en un día,"+
                 " para que me serviría?";
                 document.getElementById("d").innerHTML ="Quemas el libro";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        //this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                        respuestas.c22 = false;

                      }else if((elementos[i].checked)&(i==2)){
    
                      }else if((elementos[i].checked)&(i==3)){
                        respuestas.c22 = false;
                        
                        }
                    }
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo23 = {
                nombre : "Economía Finanzas Negocios",
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "¿Invertirías en la bolsa, o te gustaría trabajar en ella?"+
                    ", o ¿Qué te parecería aprender sobre finanzas?";
                 document.getElementById("a").innerHTML ="Suena interesante pero no es mi pasión";
                 document.getElementById("b").innerHTML ="Sueño con ello desde siempre";
                 document.getElementById("c").innerHTML ="¿Qué es la bolsa?";
                 document.getElementById("d").innerHTML ="Podría ser una opción";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        this.descarte = true;
                        respuestas.c23 = false;

                      }else if((elementos[i].checked)&(i==1)){
                        //this.descarte = true;
                      }else if((elementos[i].checked)&(i==2)){
                        respuestas.c23 = false;
                  
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };

            var campo24 = {
                nombre : "Sistemas",
                descarte : false,
                preguntar : function(c) {
                    document.getElementById("enunciado").innerHTML = "Ahora, en el tema de computadoras usted...";
                 document.getElementById("a").innerHTML ="Quisiera saber como funcionan los programas que usa y"+
                 " hacer sus propios programas";
                 document.getElementById("b").innerHTML ="Es muy bueno en computadoras pero no se interesa "+
                 "en hacer, sólo en usar programas";
                 document.getElementById("c").innerHTML ="Es pésimo usando computadoras";
                 document.getElementById("d").innerHTML ="Las usa y no es pésimo, pero no quiere dedicar su vida a ellas";
                },
                evaluar : function(c) { 
                    var elementos = document.getElementsByName("opciones");
    
                    for(var i=0; i<elementos.length; i++) {
                      if((elementos[i].checked)&(i==0)){
                        //this.descarte = true;
                      }else if((elementos[i].checked)&(i==1)){
                        this.descarte = true;
                        respuestas.c24 = false;

                      }else if((elementos[i].checked)&(i==2)){
                        respuestas.c24 = false;
    
                      }else if((elementos[i].checked)&(i==3)){
    
                        }
                    }
                },
                getNombre : function(c) {
                    return this.nombre;
                }
            };


            var respuestas = {
                c1 : true,
                c2 : true,
                c3 : true,
                c4 : true,
                c5 : true,
                c6 : true,
                c7 : true,
                c8 : true,
                c9 : true,
                c10 : true,
                c11 : true,
                c12 : true,
                c13 : true,
                c14 : true,
                c15 : true,
                c16 : true,
                c17 : true,
                c18 : true,
                c19 : true,
                c20 : true,
                c21 : true,
                c22 : true,
                c23 : true,
                c24 : true,
            };

            
                var pregrados = [pregrado1, pregrado2, pregrado3, pregrado4, pregrado5, pregrado6, pregrado7, pregrado8, pregrado9, pregrado10, 
                pregrado11, pregrado12, pregrado13, pregrado14, pregrado15, pregrado16, pregrado17, pregrado18, pregrado19, pregrado20, pregrado21,
                pregrado22, pregrado23, pregrado24, pregrado25, pregrado26, pregrado27, pregrado28, pregrado29, pregrado30, pregrado31, pregrado32,
                pregrado33, pregrado34, pregrado35, pregrado36, pregrado37];

                var interseccion = [];

            function evaluar(){

                var i = 0;
                var n = [];
                for(var j=0; j<pregrados.length; j++) {
                  var f = 0;
                  if(pregrados[j].c1){
                    f++;
                  }
                  if(pregrados[j].c2){
                    f++;
                  }if(pregrados[j].c3){
                    f++;
                  }if(pregrados[j].c4){
                    f++;
                  }if(pregrados[j].c5){
                    f++;
                  }if(pregrados[j].c6){
                    f++;
                  }if(pregrados[j].c7){
                    f++;
                  }if(pregrados[j].c8){
                    f++;
                  }if(pregrados[j].c9){
                    f++;
                  }if(pregrados[j].c10){
                    f++;
                  }if(pregrados[j].c11){
                    f++;
                  }if(pregrados[j].c12){
                    f++;
                  }if(pregrados[j].c13){
                    f++;
                  }if(pregrados[j].c14){
                    f++;
                  }if(pregrados[j].c15){
                    f++;
                  }if(pregrados[j].c16){
                    f++;
                  }if(pregrados[j].c17){
                    f++;
                  }if(pregrados[j].c18){
                    f++;
                  }if(pregrados[j].c19){
                    f++;
                  }if(pregrados[j].c20){
                    f++;
                  }if(pregrados[j].c21){
                    f++;
                  }if(pregrados[j].c22){
                    f++;
                  }if(pregrados[j].c23){
                    f++;
                  }if(pregrados[j].c24){
                    f++;
                  }
                  n[j] = f;
                }
               
                for(var j=0; j<pregrados.length; j++) {
                  var f = 0;
                  if((pregrados[j].c1)&(respuestas.c1)){
                    //interseccion[i] = pregrados[j];
                    //i++;
                    f++;
                  }
                  if((pregrados[j].c2)&(respuestas.c2)){
                    //interseccion[i] = pregrados[j];
                    f++;
                    //i++; 
                  }if((pregrados[j].c3)&(respuestas.c3)){
                    //interseccion[i] = pregrados[j];
                    f++;
                    //i++; 
                  }if((pregrados[j].c4)&(respuestas.c4)){
                    //interseccion[i] = pregrados[j];
                    f++;
                    //i++; 
                  }if((pregrados[j].c5)&(respuestas.c5)){
                   // interseccion[i] = pregrados[j];
                    f++;
                   // i++; 
                  }if((pregrados[j].c6)&(respuestas.c6)){
                    //interseccion[i] = pregrados[j];
                    f++;
                   // i++; 
                  }if((pregrados[j].c7)&(respuestas.c7)){
                   // interseccion[i] = pregrados[j];
                    f++;
                   // i++; 
                  }if((pregrados[j].c8)&(respuestas.c8)){
                   // interseccion[i] = pregrados[j];
                    f++;
                    //i++; 
                  }if((pregrados[j].c9)&(respuestas.c9)){
                   // interseccion[i] = pregrados[j];
                    f++;
                   // i++; 
                  }if((pregrados[j].c10)&(respuestas.c10)){
                   // interseccion[i] = pregrados[j];
                    f++;
                   // i++; 
                  }if((pregrados[j].c11)&(respuestas.c11)){
                    f++;
                   // interseccion[i] = pregrados[j];
                   // i++; 
                  }if((pregrados[j].c12)&(respuestas.c12)){
                   // interseccion[i] = pregrados[j];
                    f++;
                   // i++; 
                  }if((pregrados[j].c13)&(respuestas.c13)){
                   // interseccion[i] = pregrados[j];
                    f++;
                   // i++; 
                  }if((pregrados[j].c14)&(respuestas.c14)){
                   // interseccion[i] = pregrados[j];
                    f++;
                    //i++; 
                  }if((pregrados[j].c15)&(respuestas.c15)){
                   // interseccion[i] = pregrados[j];
                   // i++; 
                    f++;

                  }if((pregrados[j].c16)&(respuestas.c16)){
                   // interseccion[i] = pregrados[j];
                    f++;
                   // i++; 
                  }if((pregrados[j].c17)&(respuestas.c17)){
                    //interseccion[i] = pregrados[j];
                    f++;
                   // i++; 
                  }if((pregrados[j].c18)&(respuestas.c18)){
                   // interseccion[i] = pregrados[j];
                    f++;
                    //i++; 
                  }if((pregrados[j].c19)&(respuestas.c19)){
                   // interseccion[i] = pregrados[j];
                    f++;
                   // i++; 
                  }if((pregrados[j].c20)&(respuestas.c20)){
                   // interseccion[i] = pregrados[j];
                    f++;
                    //i++; 
                  }if((pregrados[j].c21)&(respuestas.c21)){
                   // interseccion[i] = pregrados[j];
                    f++;
                   // i++; 
                  }if((pregrados[j].c22)&(respuestas.c22)){
                   // interseccion[i] = pregrados[j];
                    f++;
                    //i++; 
                  }if((pregrados[j].c23)&(respuestas.c23)){
                    //interseccion[i] = pregrados[j];
                    f++;
                    //i++; 
                  }if((pregrados[j].c24)&(respuestas.c24)){
                    //interseccion[i] = pregrados[j];
                    f++;
                    //i++; 
                  }
                  if(f>=(n[j]-2)){
                    interseccion[i] = pregrados[j];
                    i++;
                  }
                }
                var te = "<b>Los pregrados son:</b><br><br> ";
                for(var j=0; j<interseccion.length; j++) {
                  te = te + interseccion[j].getNombre()+"<br>";
                }
                 document.getElementById("test").innerHTML = te;


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
                    campo19.preguntar();
                }else if(con==18){
                    con++;
                    campo19.evaluar();
                    campo20.preguntar();
                }else if(con==19){
                    con++;
                    campo20.evaluar();
                    campo21.preguntar();
                }else if(con==20){
                    con++;
                    campo21.evaluar();
                    campo22.preguntar();
                }else if(con==21){
                    con++;
                    campo22.evaluar();
                    campo23.preguntar();
                }else if(con==22){
                    con++;
                    campo23.evaluar();
                    campo24.preguntar();
                }else if(con==23){
                    con++;
                    evaluar();
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
            <div class="row">
                <div id="test" class="col-md-7   col-md-offset-3">
                        <center><b><div id="enunciado">Supón que en tu colegio hay una niña que está embarazada 
                            y va a ser expulsada. ¿Qué harías?</div></b>
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