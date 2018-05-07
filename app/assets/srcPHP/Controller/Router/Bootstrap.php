<?php 

class Bootstrap {
	private $name_url = null;
	private $request = null;
	
	function __construct() {

		$request = isset($_GET['url']) ? $_GET['url'] : null;

		$request = rtrim($request, "/");
		$request = filter_var($request, FILTER_SANITIZE_URL);
		$name_url = explode("/", $request);;

	    $controller = $name_url[0];
		$controller = ucfirst($controller);

		//print_r($name_url);
	
		
		if(empty($name_url[0])) {
		
			
			$name_url[0] = 'Index';
			$controller = $name_url[0];
			//return false;
		}

		

		$control_file = 'assets/srcPHP/Controller/Engine/'.$controller.'.php';
	

 		if(file_exists($control_file)) {
 			require_once $control_file;		
 			
 			//$this ->$Controller = new $this -> $name_url[0];
 			$Controller = new $controller;
		    $Controller->loadModel($name_url[0]);
 			

 		}else{
 			
 			$this->error();
 		}

		
	
        $length = count($name_url);
        
        // Make sure the method we are calling exists
        if ($length > 1) {
            if (!method_exists($Controller, $name_url[1])) {
                $this->_error();
            }
        }
        
        // Determine what to load
        switch ($length) {
            case 5:
                //Controller->Method(Param1, Param2, Param3)
                $Controller->{$name_url[1]}($name_url[2], $name_url[3], $name_url[4]);
                break;
            
            case 4:
                //Controller->Method(Param1, Param2)
                $Controller->{$name_url[1]}($name_url[2], $name_url[3]);
                break;
            
            case 3:
                //Controller->Method(Param1, Param2)
               $Controller->{$name_url[1]}($name_url[2]);
                break;
            
            case 2:
                //Controller->Method(Param1, Param2)
                $Controller->{$name_url[1]}();
                
                break;
            
            default:
                $Controller->index();
                break;
        }
    
	
	}

	function error(){
		require_once 'assets/srcPHP/Controller/Engine/Error.php';
		header('HTTP/1.0 404 Not Found');

 			$this->error_message = "Nie pasujący Url";

 			$Controller = new Error();

 			return false;
 	
 			
	}


}