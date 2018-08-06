<?php
class Registration extends Controller {
	function __construct() {
		parent::__construct(); 
	}
	function Index() {
		$this->View->Render('Header');
		$this->View->Render("Registration/Index");
		$this->View->title = 'Registration';
	}

	function Insert() {		
		$this->Model->Insert();
	}
}