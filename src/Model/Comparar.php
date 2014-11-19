<?php
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