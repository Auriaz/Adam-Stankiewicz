<?php
class Workout extends Controller {
	function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}

 function Index() {
		$this ->Model ->Index();
		$this->View->Render('Header');
		$this ->View ->Render("Workout/Index");
		$this->View->Render('Panel');
		$this->View->title = 'Workout of Day';
	}
}