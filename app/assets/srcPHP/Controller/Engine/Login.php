<?php
class Login extends Controller {
	function __construct() {
		parent::__construct(); 
	}

	function Index() {
		$this->View->title = 'Login';
		$this->View->Render('Header');
		$this ->View ->Render("Login/Index");	
	}

	function onLine() {
		//$this->View->Render("Login/onLine");
		$this->Model->onLine();
	}
}


