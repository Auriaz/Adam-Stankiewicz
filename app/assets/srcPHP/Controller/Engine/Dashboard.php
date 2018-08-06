<?php
class Dashboard extends Controller {
	function __construct() {
		parent::__construct(); 
		Auth::handleLogin();

	}

	function Index() {
	    $this->View->title = 'Panel';
	    $this->View->Render('Header'); 
		$this->View->Render("Dashboard/Index");
		$this->View->Render('Panel');
	}

	function Logout() {
		Session::destroy();
		header('Location: '. URL .'Login');
		exit;
	}

	function Insert() {
		$this->Model->Insert();
	}

	function GetListings() {
		$this->Model->GetListings();
	}

	function DeleteListing() {
		$this->Model->DeleteListing();
	}
}
