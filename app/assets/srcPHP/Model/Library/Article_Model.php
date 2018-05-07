<?php
//dodaje artykuły do bazy 
class Article_Model extends Model {

	function __construct() {
		parent::__construct();
		Session::init();

	}

	public function addArt() {
		

		if(isset($_POST['editor'])) {
		  $Connect = $_POST['Connect'];
		  	
		  $user = Session::get('$user'); 
		  $date = date('Y-m-d');
		  $section = $_POST['section'];
		  $category = $_POST['category'];
	  	  $title = $_POST['title'];
		  $text = $_POST['editor'];
		 

           
		  if($result = $Connect->query("INSERT INTO article  VALUES (NULL, '$date', '$section', '$category', '$title', '$user', '$text')")){
		  header('location: ../Article');
		  	

		  	
		  }else{
		  	echo "Błąd przy wysyłaniu zapytania";
		  }
		  

			
		  $Connect->close();

		  
		}
	}

	public function Art() {

	}

	public function delArt() {

	}
}