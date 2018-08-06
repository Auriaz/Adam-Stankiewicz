<?php
class Mobility extends Controller {
	function __construct() {
		parent::__construct();
	}

 function Index() {
		$this ->Model ->Index();
		$this->View->Render('Header');
		$this ->View ->Render("Mobility/Index");
		$this->View->title = 'Mobility';	
	}
}