<?php

class Login extends Controller {

	function __construct() {
		parent::__construct(); 
	
	}

	function Index() {
		
		$this ->View ->Render("Login/Index");
		//require_once 'assets/srcPHP/Model/Library/Login_Model.php';
	  // $Logins = new Login_Model();
			
	}

	function onLine()
	{
		$this ->View ->Render("Login/onLine");
		$this ->Model ->onLine();
	}


}


