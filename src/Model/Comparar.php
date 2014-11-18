<?php

	//if (!$_REQUEST['comparar']){
     /*   $esta = false;    
        static $intereses;
        $id = $_REQUEST['id'];
        for ($i=0; $i<count($intereses);$i++) {
            if($intereses[$i]==$id){
                $esta = true;
            }
            $esta = true;
        }
        if(!$esta){
            $intereses[] = $_REQUEST['id'];
            echo "True ".$_REQUEST['id'];
        }else{
            echo "False";
        } */

      /*  $id = $_REQUEST['id'];

        if((Intereses::$n)==0){
            $intereses = new Intereses();
        }

        echo Intereses::$n.$intereses->agregar($id); */

       /*if(!isset($_SESSION['intereses'])) {
            session_start();
            $_SESSION['intereses'] = $_REQUEST['id'];
        }else{
            $_SESSION['intereses'] = "".$_SESSION['intereses'].$_REQUEST['id'];
        }*/
        session_start();
        $int = $_SESSION['intereses'];
        $id = $_REQUEST['id'];
        for ($i=0; $i<strlen($int);$i++) { 
            if(is_numeric($int[$i])){
                $intereses[] = $int[$i];
            }
        }
        $esta = false;
        $intereses[] = -1;
        for($i=0; $i<count($intereses); $i++) { 
            if($intereses[$i]==$_REQUEST['id']){
                $esta = true;
            }
        }
        if(!$esta){
            $_SESSION['intereses'] = $_SESSION['intereses']." ".$_REQUEST['id'];
            $intereses = $_SESSION['intereses'];
            echo "".$_SESSION['intereses'];
        }else{
            echo 0;
        }
        
    
?>  