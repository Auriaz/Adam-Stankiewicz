<?php
// controler artykułów 
class Article extends Controller {

	public function __construct() {
		parent::__construct(); 
		Session::init();

		$logged = Session::get('loggedIn');
		$role = Session::get('$role');

		
		if($logged == false || $role != 'admin') {

			Session::destroy();			
			header('Location: Login');
			exit();
		}
		
		
	}

		public function Index() {

		$this ->View ->Render("Article/Index");
		
	}

	public function addArt() {

		$this ->Model ->addArt();
	}

	public function delArt() {

	}
}
