<?php

class User_Model extends Model {

	public function __construct() {
			parent::__construct();
			Session::init();
	}

	public function userList() {

		$Connect = $_POST['Connect'];

		$result = $Connect->query('SELECT id, user, email, role FROM uzytkownicy');
	
		return $result ->fetch_all();
		$result->free_result();
		$Connect->close();
	}

	public function userSingleList($id) {

		$Connect = $_POST['Connect'];

		$result = $Connect->query("SELECT id, user, email, role FROM uzytkownicy WHERE id ='$id'");
		
		return $result ->fetch_assoc();
		
		$result->free_result();
		$Connect->close();

	}

	public function Create($data) {
		$Connect = $_POST['Connect'];

		$login = $data['login'];
		$pass = $data['pass'] ;
		$email = $data['email'];
		$role = $data['role'] ;


		$result = $Connect->query("INSERT INTO uzytkownicy VALUES (NULL, '$login',' $pass', '$email', '$role')");

		
		header('location: ../User');

		$Connect->close();
	
	}

	public function editSave($data) {
		$Connect = $_POST['Connect'];

		$id = $data['id'];
		$login = $data['login'];
		$pass = $data['pass'] ;
		$email = $data['email'];
		$role = $data['role'] ;

      print_r('$data');
		$result = $Connect->query("UPDATE uzytkownicy SET  user = '$login',pass = ' $pass',email = '$email',role = '$role' WHERE id ='$id'");

		
		
		
		$Connect->close();
	
	}
	public function Delete($id){

		$Connect = $_POST['Connect'];
		
		$result = $Connect->query("DELETE FROM uzytkownicy WHERE id = '$id'");
		header('location: ../../User');
		
		$Connect->close();
	}
}

 