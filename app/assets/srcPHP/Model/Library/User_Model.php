<?php
class User_Model extends Model {
	public function __construct() {
			parent::__construct();
			Session::init();
	}

	public function userList() {
		return $this->Connect->Select(
			"SELECT id_user, user, email, role FROM uzytkownicy", 'fetch_all', MYSQLI_BOTH
		);
	}

	public function userSingleList($id) {
		return $this->Connect->Select(
			"SELECT id_user, user, email, role FROM uzytkownicy WHERE id_user ='$id'",'fetch_array', MYSQLI_ASSOC
		);
		 
		$this->Connect->close();
	}

	/*
	* type array $data Data array downloaded from the User(controller)->Create
	* type array $postData Data with associative array to post Insert(Database)->$data
	* type string 'uzytkownicy' name of table to post Insert(Database)->$table
	*/
	public function Create($data) {
		$hash_key = Hash::create('sha256', $data['pass'], HASH_KEY);
		$postData = array(
			'user' =>$data['user'],
			'pass' => password_hash($hash_key, PASSWORD_DEFAULT),
			'email' => $data['email'],
			'role' => $data['role'] 
			);
		$this->Connect->Insert('uzytkownicy', $postData, 'id_user');

		$this->Connect->close();
	}

	/*
	* type array $data Data array downloaded from the User(controller)->editSave
	* type array $postData Data with associative array to post Insert(Database)->$data
	* type string 'uzytkownicy' name of table to post Insert(Database)->$table
	*type string "id ='{$data['id']}'" location where the data in the database should be to post Insert(Database)->$where
	*/
	public function editSave($data) {
		$hash_key = Hash::create('sha256', $data['pass'], HASH_KEY);
		$postData = array(
			'user' =>$data['user'],
			'pass' => password_hash($hash_key, PASSWORD_DEFAULT),
			'email' => $data['email'],
			'role' => $data['role'] 
			);
		$this->Connect->Update(
			'uzytkownicy', $postData, "id_user ='{$data['id']}'");
		$this->Connect->close();
	}

	public function Delete($id) {
		$result = $this->Connect->Select("SELECT role FROM uzytkownicy WHERE id_user = '$id'",'fetch_all', MYSQLI_ASSOC);
		
		if ($result[0]['role'] == 'admin') {	
			return false;
		}

		$this->Connect->Delete(
			'uzytkownicy', "id_user = '$id'"
		);	
		$this->Connect->close();
	}
}

 