<?php
class Index extends Controller {
	function __construct() {
		parent::__construct();
	}

	function Index() {
		$this->View->Render('Header');
		$this->View->Render("Index/Index");	
		$this->View->Render('Footer');
		$this->Model->Index();
		$this->View->title = 'Home';
	}
}