<?php
// controler artykułów 
class Article extends Controller {
	public function __construct() {
		parent::__construct(); 
		Auth::handleRedactorLogin();
	}

	public function Index() {
		$this->View->title = 'Add a article';
		$this->View->Render('Header');
		$this ->View ->Render("Article/Index");	
		$this->View->Render('Panel');	
	}

	public function addArt() {
		$this ->Model ->addArt();
	}

	public function delArt() {

	}
}
