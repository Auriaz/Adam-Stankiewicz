<?php
class AboutMe extends Controller {
	function __construct() {
		parent::__construct();	
	}

 function Index() {	
		$this ->Model ->Index();
		$this->View->Render('Header');
		$this ->View ->Render("AboutMe/Index");
		$this->View->Render('Footer');
	}
}