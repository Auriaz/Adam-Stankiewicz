<?php
class Movie extends Controller {
	function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}

 function Index() {
 		$this->View->title = 'Movie';	
		$this->View->Render('Header');
		$this->View->Render("Movie/Index");
		$this->View->Render('Panel');
		
	}
}