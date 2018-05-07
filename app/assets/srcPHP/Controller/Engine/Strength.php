<?php
class Strength extends Controller {

	function __construct() {
		parent::__construct();
		
	}

 function Index() {
		
		$this ->Model ->Index();
		$this ->View ->title = "Siła" ;

		$this ->View ->Render("Strength/Index");	
	 	
	 	
	}
}