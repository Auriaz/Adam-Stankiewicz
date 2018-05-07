<?php
//Funkcja User odpowiedzialna za możliwości admina i moderatora(dodawanie, odejmowanie, edytowanie użytkowników )
class User extends Controller {

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

		$this ->View ->userList = $this ->Model ->userList();
		$this ->View ->Render("User/Index");
		
	}

	public function Create() {

		$data = array();
		$data['login'] = $_POST['login'];
		$data['pass'] = $_POST['pass'];
		$data['email'] = $_POST['email'];
		$data['role'] = $_POST['role'];

		$this ->Model ->Create($data);

	}

	public function Edit($id) {

		$this ->View ->User = $this ->Model ->userSingleList($id);
	    //$this ->View ->Render("User/Edit");
	    Session::set('edit', true);
	    header('Location: ../../User');
	
	}

	public function editSave($id) {
		header('Location: ../../User');
		
		$data = array();
		$data['id'] = $id;
		$data['login'] = $_POST['login'];
		$data['pass'] = $_POST['pass'];
		$data['email'] = $_POST['email'];
		$data['role'] = $_POST['role'];
		Session::unsets('edit');
		$this ->Model ->editSave($data);
		
	}

	public function Delete($id) {
		$this ->Model ->Delete($id);
		
	}

}	