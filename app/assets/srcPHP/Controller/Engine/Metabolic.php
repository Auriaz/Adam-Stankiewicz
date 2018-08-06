<?php
class Metabolic extends Controller {
	function __construct() {
		parent::__construct();		
	}

 function Index() {		
		$this ->Model ->Index();
		$this->View->Render('Header');
		$this ->View ->Render("Metabolic/Index");	
		$this->View->title = 'Metabolic';
	}
}