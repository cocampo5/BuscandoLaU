
<?php 
	/*class Intereses{

		public static $n = 0;
		var $id;
	
		function Intereses(){
			//$this->host = 'localhost'; 
		}
			
		function agregar($id){
			$esta = false;
			for ($i=0; $i<count($id);$i++) {
            	if($this->id[$i]==$id){
                	$esta = true;
            	}
        	}
        	if(!$esta){
				$this->id[] = $id;
				self::$n++;
            	echo "True";
        	}else{
            	echo "False";
        	}
		}
	}*/
    
	/*preg_match('/id- (\d+)/', $_REQUEST['int'], $matches);
	for ($i=0; $i<count($matches);$i++) {
		echo $matches[$i]."\n";
	}*/
	$int = $_REQUEST['int'];
	for ($i=0; $i<strlen($int);$i++) { 
		if(is_numeric($int[$i])){
			$intereses[] = $int[$i];
		}
	}

	for ($i=0; $i<count($intereses); $i++) { 
		echo $intereses[$i]."\n";
	}

?>
