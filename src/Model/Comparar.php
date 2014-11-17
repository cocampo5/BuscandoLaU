<?php
	//if (!$_REQUEST['comparar']){
        $esta = false;    
        $intereses[];
        $id = $_REQUEST['id'];
        for ($i=0; $i<count($intereses);$i++) {
            if($intereses[$i]==$id){
                $esta = true;
            }
        }
        if(!$esta){
            $intereses[] = $_REQUEST['id'];
            echo "true";
        }else{
            echo "false";
        }
	/*}else{

    }*/
?>