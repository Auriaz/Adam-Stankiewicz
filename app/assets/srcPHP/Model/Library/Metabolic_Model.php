<?php

class Metabolic_Model extends Model {

	function __construct() {
		parent::__construct();
		Session::init();

	}

	function Index() {
		$Connect = $_POST['Connect'];

		//$id = '2';
		
		$result = $Connect->query("SELECT content FROM art WHERE id ='2'");
	     $line = $result ->fetch_assoc();
		 $article = $line['content'];
       
		Session::set('$art', $article);
		$Connect->close();

	}
}