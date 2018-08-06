<?php
class Diet extends Controller {
	function __construct() {
		parent::__construct();		
	}

 	function Index() {	
		$this ->Model ->Index();
		$this->View->Render('Header');
		$this ->View ->Render("Diet/Index");	
		$this->View->title = 'Diet';
	}

 	function Nutrition($name_art) {		
		$this ->Model ->$name_art();
		$this->View->Render('Header');
		$this ->View ->Render("Diet/Nutrition/".$name_art);
		$this->View->Render('Footer');	
	}


	function Adaptogens($name_art) {
		$this ->Model ->$name_art();
		$this->View->Render('Header');
		$this ->View ->Render("Diet/Adaptogens/".$name_art);
		$this->View->Render('Footer');
	}

	function Supplements($name_art) {		
		$this ->Model ->$name_art();
		$this->View->Render('Header');
		$this ->View ->Render("Diet/Supplements/".$name_art);
		$this->View->Render('Footer');
	} 
}