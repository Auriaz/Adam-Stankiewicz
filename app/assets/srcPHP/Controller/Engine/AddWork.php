<?php
// controler artykułów 
class AddWork extends Controller {

	public function __construct() {
		parent::__construct(); 
		Session::init();

		$logged = Session::get('loggedIn');
		
	}

	public function Index() {

		$this ->View ->Render("AddWork/Index");
		
	}

	public function addWork() {

		$this ->Model ->addWork();
	}

	public function added() {

		$this ->View ->Render("AddWork/Added");
	}

	public function delArt() {

	}
}
