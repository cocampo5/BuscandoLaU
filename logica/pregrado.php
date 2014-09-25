<?php 
  require "conexion.php";
  $objeConexion = new Conexion();
  $search;
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
<![endif]-->
<!--[if IE 7]>         
<html class="no-js lt-ie9 lt-ie8">
<![endif]-->
<!--[if IE 8]>         
<html class="no-js lt-ie9">
<![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"><!--<![endif]-->
  <head>
    <link href       ="Birrete.png" rel="icon" type="image/x-icon" />
    <meta charset    ="utf-8">
    <meta http-equiv ="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Pregrados</title>
    <meta name       ="description" content="">
    <meta name       ="viewport" content="width=device-width, initial-scale=1">
    <link rel        ="stylesheet" href="../css/bootstrap.min.css">
    <style>
      body {
      padding-top: 50px;
      padding-bottom: 20px;
      }
    </style>
    <link rel        ="stylesheet" href="../css/bootstrap-theme.min.css">
    <link rel        ="stylesheet" href="../css/main.css">
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body>
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.html">BuscandoLaU!</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="../index.html">Home</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">About</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </div>
    </div>
    <?php
      $search = $_POST["busqueda"];
      echo($search);
      ?>
    <div class="jumbotron" id="container">
      <?php 
        $query = "SELECT *  FROM `pregrado` ";
        $result = mysqli_query($objeConexion->conectarse(), $query) or die(mysqli_error());;
        
        echo "<table border='1'>
        <tr>
        <th>Nombre</th>
        <th>Semestres</th>
        </tr>"; 
        
        while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" ."<h4>" .$row['nombre']."</h4>" . "</td>";
        echo "<td>" . $row['duracion'] . "</td>";
        echo "</tr>";
        }
        echo "</table>";
        ?>                                    
    </div>
    <footer>
      <p>&copy; BuscandoLaU! 2014</p>
    </footer>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.js"><\/script>')</script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>