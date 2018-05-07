<?php
class Diet extends Controller {

	function __construct() {
		parent::__construct();
		
	}

 function Index() {
		
		$this ->Model ->Index();
		$this ->View ->title = "Jesteśmy w funkcji Diet class Index" ;

		$this ->View ->Render("Diet/Index");	
	 	
	 	
	}

 function Nutrition($name_art) {
		
		$this ->Model ->$name_art();
		$this ->View ->title = "Jesteśmy w funkcji Diet class Nutrition" ;

		$this ->View ->Render("Diet/Nutrition/".$name_art);	
	 	
	 
	}


	function Adaptogens($name_art) {
		$this ->Model ->$name_art();
		
		$this ->View ->title = "Jesteśmy w funkcji Diet class Nutrition" ;

		$this ->View ->Render("Diet/Adaptogens/".$name_art);	
	 	
	 	
	}

	function Supplements($name_art) {
		
		$this ->Model ->$name_art();
		$this ->View ->title = "Jesteśmy w funkcji Diet class Nutrition" ;

		$this ->View ->Render("Diet/Supplements/".$name_art);	
	
	 	
	}

	 
}