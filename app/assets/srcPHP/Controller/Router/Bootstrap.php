<?php 

class Bootstrap {
	private $_url = null;
	private $_controller = null;

	private $_controllerPath = 'assets/srcPHP/Controller/Engine/';
	private $_modelPath = 'assets/srcPHP/Model/Library/';
	private $_errorFile = 'Error.php';	
	private $_defaultFile = 'Index.php';

	/*
	* Construct the Boostrap 
	*@return boolean | string
	*/
	public function init() {
		// Sets the protected $_url
		$this->_getUrl();

		// Load the default controller if no URL is set
		if(empty($this->_url[0])) {
			$this->_loadDefaultController();
			return false;
		}

		$this->_loadExistingController();
		$this->_callControllerMetod();
	}

	/*
	*(Optinal) Set a custum path to controllers
	*@param string $path
	*/
	public function setControllerPath($path) {
		$this->_controllerPath = trim($path, '/') . '/';
	}

	/*
	*(Optinal) Set a custum path to models
	*@param string $path
	*/
	public function setModelPath($path) {
		$this->_modelPath = trim($path, '/') . '/';
	}

	/*
	*(Optinal) Set a custum path to the error file
	*@param string $path Use the file name your controller, eg: error.php
	*/
	public function setErrorFile($path) {
		$this->_errorFile = trim($path, '/'); 
	}

		/*
	*(Optinal) Set a custum path to the error file
	*@param string $path Use the file name your controller, eg: index.php
	*/
	public function setDefaultFile($path) {
		$this->_defaultFile = trim($path, '/'); 
	}

	/**
	*Fetches the $_GET from 'url'
	*/
	private function _getUrl() {
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, "/");
		$url = filter_var($url, FILTER_SANITIZE_URL);
		$this->_url = explode("/", $url);
	}

	/*
	* This loeds if there is no GET parametr passed
	*/
	private function _loadDefaultController() {
		require $this->_controllerPath.$this->_defaultFile;
		$this->_controller = new Index();
		$this->_controller->Index();
	}

	/*
	*Load an existing controller if there is a GET parametr passed
	* @return boolean | string
	*/
	private function _loadExistingController() {
		$control_file = $this->_controllerPath.$this->_url[0].'.php';

 		if(file_exists($control_file)) {
 			require_once $control_file;	
 			$this->_controller = new $this->_url[0];
 		    $this->_controller->loadModel($this->_url[0], $this->_modelPath);		
 		}else{		
 			$this->_error();
 			return false;
 		}
	}

	/*
	* If a method is passed in the GET url paramter
	*
	*	http://localhost/controller/method/(param)/(param)/(param)
	* url[0] = Controller
	* url[1] = Method
	* url[2] = Param
	* url[3] = Param
	* url[4] = Param
 	*/
	private function _callControllerMetod() {
		$length = count($this->_url);
        
        // Make sure the method we are calling exists
        if ($length > 1) {
            if (!method_exists($this->_controller, $this->_url[1])) {
                $this->_error();
                return false;
            }
        }
        
        // Determine what to load
        switch ($length) {
            case 5:
                //Controller->Method(Param1, Param2, Param3)
                $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4]);
                break;
            
            case 4:
                //Controller->Method(Param1, Param2)
                $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3]);
                break;
            
            case 3:
                //Controller->Method(Param1, Param2)
               $this->_controller->{$this->_url[1]}($this->_url[2]);
                break;
            
            case 2:
                //Controller->Method(Param1, Param2)
                $this->_controller->{$this->_url[1]}();
                
                break;
            
            default:
                $this->_controller->Index();
                break;
        	}
		}
/**
 * [_error description] 
 * @return [type] [description]
 */
	private function _error(){
		require $this->_controllerPath.$this->_errorFile;
		$this->_controller = new Error();
		$this->_controller->Index();
		exit;	
	}	
}