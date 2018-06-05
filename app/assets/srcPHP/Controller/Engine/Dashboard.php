<?php

class Dashboard extends Controller {

	function __construct() {
		parent::__construct(); 
		Session::init();

		$logged = Session::get('loggedIn');
		
		if($logged == false) {

			Session::destroy();			
			header('Location: ../Login');
			exit();
		}
		
		
	}

	function Index() {
		
		$this ->View ->Render("Dashboard/Index");
		
		
	}

	function Logout() {
		Session::destroy();

		header('Location: ../Login');
		exit;
	}

	function Insert() {
		$this ->Model ->Insert();
	}
}
