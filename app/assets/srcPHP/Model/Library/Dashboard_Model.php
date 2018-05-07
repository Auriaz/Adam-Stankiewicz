<?php

class Dashboard_Model extends Model {

	function __construct() {
			parent::__construct();

	}

	public function Logout(){
		Session::destroy();

		header('Location: ../Login');
		exit;

	}

   function Insert(){

	$Connect = $_POST['Connect'];


	 if($Connect->connect_errno!=0) {
            echo "Error: ".$Connect->connect_errno ;        
          
     } else {	
     	$text = $_POST['text'];


     	$sth = $this->db->prepare("INSERT INTO uzytkownicy text VALUES ('text')");
	 $sth ->execute(array('text' => $text));

	 header("location: ../Dashboard" );
	 $Connect->close();
     }

	 

	}
}
