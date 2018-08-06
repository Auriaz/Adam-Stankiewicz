<?php
// controler artykułów 
class AddWork extends Controller {
	public function __construct() {
		parent::__construct(); 
		Auth::handleLogin();
	}

	public function Index() {
		$this->View->title = 'Add a workout';
		$this->View->Render('Header');
		$this ->View ->Render("AddWork/Index");
		$this->View->Render('Panel');		
	}

	public function addWork() {
		$this ->Model ->addWork();
	}

	public function added() {
		$this->View->Render('Header');
		$this ->View ->Render("AddWork/Added");
		$this->View->Render('Panel');
	}

	public function delArt() {

	}
}
