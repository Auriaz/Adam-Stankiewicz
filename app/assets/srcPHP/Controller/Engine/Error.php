<?php
class Error extends Controller {
	function __construct() {
		parent::__construct();
	}

	function index() {

		$this->View->error_message = "Nie pasujący Url";
		$this->View->title = '404 ERROR';
		$this->View->Render('Header');
		$this->View->Render("Error/Index");
	}
}