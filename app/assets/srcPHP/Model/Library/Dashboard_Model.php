<?php
class Dashboard_Model extends Model {
	function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}

	public function Logout() {
		Session::destroy();
		header('Location: '. URL .'Login');
		exit;
	}

   public function Insert() {	
	     	$text = $_POST['text'];
	     	$this->Connect->Insert('test', ['text'=>$text], 'id');
	     	$data = ['id'=>$this->Connect->insert_id, 'text'=>$text];

	     	echo json_encode($data);
		 	$this->Connect->close();
	}

	public function GetListings() {
		$result = $this->Connect->Select('SELECT * FROM test','fetch_all', MYSQLI_ASSOC);
		
		echo json_encode($result);
		$this->Connect->close();
	}

	public function DeleteListing() {
		$id = $_POST['id'];
		$this->Connect->Delete('test',
			"id ='$id'");

		$this->Connect->close();
	}
}
