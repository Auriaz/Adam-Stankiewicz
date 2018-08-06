<?php
 abstract class Controller {
 	function __construct() {
		$this->View = new View();
	}
	/*
	*@param string $name Name of the model
	*@param string $path Location of the models
	*/
 	public function loadModel($name, $modePath) {
 		$path = $modePath.$name.'_Model.php';

 		if(file_exists($path)) {
 			require $path;
 			
 			$modelName = $name.'_Model';
 			$this->Model = new $modelName();
 		} 
 	}
}