<?php

class Registration extends Controller {

	function __construct() {
		parent::__construct(); 
		//Session::init();
		
	}
	function Index() {
		$this ->View ->Render("Registration/Index");
	}

	

	function Insert() {
			
		$this ->Model ->Insert();
	
	}

}