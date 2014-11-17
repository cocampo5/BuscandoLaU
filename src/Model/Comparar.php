<?php
	//if (!$_REQUEST['comparar']){
        $esta = false;    
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
            echo "Yeni False";
        } 

?>  