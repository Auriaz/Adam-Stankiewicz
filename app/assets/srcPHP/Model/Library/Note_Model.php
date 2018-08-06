<?php
class Note_Model extends Model {
	public function __construct() {
			parent::__construct();
			Session::init();
	}

	public function noteList() {
		$id_user = $_SESSION['$id_user'];
		return $this->Connect->Select(
			"SELECT * FROM note WHERE id_user = '$id_user'", 'fetch_all', MYSQLI_BOTH
		);
			$this->Connect->close();
	}

	public function noteSingleList($id) {
		$id_user = $_SESSION['$id_user'];
		return $this->Connect->Select(
			"SELECT * FROM note WHERE id_note ='$id' AND id_user = '$id_user'",'fetch_array', MYSQLI_ASSOC
		);
		 
		$this->Connect->close();
	}

	/*
	* type array $data Data array downloaded from the User(controller)->Create
	* type array $postData Data with associative array to post Insert(Database)->$data
	* type string 'uzytkownicy' name of table to post Insert(Database)->$table
	*/
	public function Create($data) {
		$postData = array(
			'id_user'=>$_SESSION['$id_user'],
			'title' =>$data['title'],
			'content' => $data['content'],
			'date_added' => date('Y-m-d H:i:s')
			);
		$this->Connect->Insert('note', $postData, 'id_note');

		$this->Connect->close();
	}

	/*
	* type array $data Data array downloaded from the User(controller)->editSave
	* type array $postData Data with associative array to post Insert(Database)->$data
	* type string 'uzytkownicy' name of table to post Insert(Database)->$table
	*type string "id ='{$data['id']}'" location where the data in the database should be to post Insert(Database)->$where
	*/
	public function editSave($data) {
		$postData = array(
			'title' =>$data['title'],
			'content' => $data['content'],
			'date_added' => date('Y-m-d H:i:s')
			);
		$this->Connect->Update(
			'note', $postData, "id_note ='{$data['id']}'"
			);
		$this->Connect->close();
	}

	public function Delete($id) {
		$this->Connect->Delete(
			'note', "id_note = '$id'"
		);
		$this->Connect->close();
	}
}

 