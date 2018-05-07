<?php
class AboutMe extends Controller {

	function __construct() {
		parent::__construct();
		
	}

 function Index() {
		
		$this ->Model ->Index();
		$this ->View ->title = "JA" ;

		$this ->View ->Render("AboutMe/Index");	
	 	
	 	
	}
}