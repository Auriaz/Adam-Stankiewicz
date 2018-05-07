<?php
 

class Movie extends Controller {

	function __construct() {
		parent::__construct();
		

	}

 function Index() {
		
	
		$this ->Model ->Index();
		$this ->View ->title = "Jesteśmy w funkcji News class Index" ;

		$this ->View ->Render("Movie/Index");	
	    
	}

}