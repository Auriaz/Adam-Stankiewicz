<?php

 abstract class Controller {

 	function __construct() {
 
		$this->View = new View();
		

 		 	}

 	public function loadModel($name_url) {
 		$path_model = 'assets/srcPHP/Model/Library/'.$name_url.'_Model.php';

 		if(file_exists($path_model)) {
 			require 'assets/srcPHP/Model/Library/'.$name_url.'_Model.php';

 	

 			$modelName = $name_url.'_Model';

 			
 			$this ->Model = new $modelName();

 			
 		} 


 	}




}