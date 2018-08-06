<?php
class Strength extends Controller {
	function __construct() {
		parent::__construct();
	}

 function Index() {
		$this ->Model ->Index();
		$this->View->Render('Header');
		$this ->View ->Render("Strength/Index");
		$this->View->title = 'Strength';	
	}
}