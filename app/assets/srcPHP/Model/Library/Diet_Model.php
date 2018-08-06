<?php
class Diet_Model extends Model {
	function __construct() {
		parent::__construct();
		Session::init();
	}

	function Index() {


	}

	function Article() {
		$result = $this->Connect->query("SELECT title FROM article ORDER BY id_article DESC");
	     
	   $ile = mysqli_num_rows($result);


   		if ($ile>=1) {
 
   			for ($i = 1; $i <= $ile; $i++) {
   			$line = mysqli_fetch_assoc($result);
   			  $row = $line['title'];
   			 $row++;
   			}
   		}
	   	 
		Session::set('$title', $row);
		//print_r($row);
		$this->Connect->close();
	}

    function Zakwaszenie() {
		$result = $this->Connect->query("SELECT text FROM article WHERE id_article ='21'");
		
	    $line = $result ->fetch_assoc();
		Session::set('$art', $line['text']);
		$this->Connect->close();
	}
}