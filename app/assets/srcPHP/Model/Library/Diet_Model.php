<?php

class Diet_Model extends Model {

	function __construct() {
		parent::__construct();
		Session::init();

	}

	function Index() {


	}


	function Article() {
		$Connect = $_POST['Connect'];

		
		$result = $Connect->query("SELECT title FROM article ORDER BY id_article DESC");
	     
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
		   
	     
	   


		$Connect->close();

	}


    function Zakwaszenie() {

		$Connect = $_POST['Connect'];

		//$id = '2';
		
		$result = $Connect->query("SELECT text FROM article WHERE id_article ='21'");
	     $line = $result ->fetch_assoc();
		 $article = $line['text'];
       
		Session::set('$art', $article);
		$Connect->close();
	}

}