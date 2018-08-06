<?php
//Funkcja User odpowiedzialna za możliwości admina i moderatora(dodawanie, odejmowanie, edytowanie użytkowników )
class User extends Controller {
	public function __construct() {
		parent::__construct(); 
		Auth::handleAdminLogin();	
	}

	public function Index() {
		$this->View->title = 'Users';
		$this->View->userList = $this->Model->userList();
		$this->View->Render('Header');
		$this->View->Render("User/Index");
		$this->View->Render('Panel');	
	}

	public function Create() {
		$data = array();
		$data['user'] = $_POST['user'];
		$data['pass'] = $_POST['pass'];
		$data['email'] = $_POST['email'];
		$data['role'] = $_POST['role'];

		$this->Model->Create($data);
		header('location: '. URL .'User');
	}

	public function Edit($id) {
		$this->View->User = $this->Model->userSingleList($id);
		$this->View->Render('Header');
	    $this->View->Render("User/Edit");
	    $this->View->Render('Panel');
	    Session::set('edit', true);
	}

	public function editSave($id) {
		$this->View->title = 'Edit Users';
		$data = array();
		$data['id'] = $id;
		$data['user'] = $_POST['user'];
		$data['pass'] = $_POST['pass'];
		$data['email'] = $_POST['email'];
		$data['role'] = $_POST['role'];

		Session::unsets('edit');
		$this->Model->editSave($data);
		header('location: '. URL .'User');	
	}

	public function Delete($id) {
		$this->Model->Delete($id);
		header('location: '. URL .'User');		
	}
}	