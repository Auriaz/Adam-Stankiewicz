<?php

class Help extends Controller {

	function __construct() {
		parent::__construct(); 
	
	}

	function Index() {
		
		$this ->View ->Render("Help/Index");
	
			
	}
}
