<?php
class Help extends Controller {
	function __construct() {
		parent::__construct(); 
	}

	function Index() {
		$this->View->Render('Header');
		$this ->View ->Render("Help/Index");
		$this->View->Render('Footer');
		$this->View->title = 'Help';
	}
}
