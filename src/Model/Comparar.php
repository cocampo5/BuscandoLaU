<?php
        session_start();
        $int = $_SESSION['intereses'];
        $id = $_REQUEST['id'];
        for ($i=0; $i<strlen($int);$i++) { 
        if(is_numeric($int[$i])){
            $d = $int[$i]; 
            if(($i+1)<strlen($int)){
                $i++;
                if(is_numeric($int[$i])){
                    $d = $d.$int[$i];
          if(($i+1)<strlen($int)){
            $i++;
            if(is_numeric($int[$i])){
              $d = $d.$int[$i];
            }
          }
                }
            }
      $intereses[] = $d;
        }
    }
        $esta = false;
        $intereses[] = -1;
        for($i=0; $i<count($intereses); $i++) { 
            if($intereses[$i]==$_REQUEST['id']){
                $esta = true;
            }
        }
        if($id!=-2){
        if(!$esta){
            $_SESSION['intereses'] = $_SESSION['intereses']." ".$_REQUEST['id'];
            $intereses = $_SESSION['intereses'];
            echo "".$_SESSION['intereses'];
        }else{
            echo 0;
        }
    }else{
         $_SESSION['intereses'] = "";
        //session_destroy();
    }

?>  