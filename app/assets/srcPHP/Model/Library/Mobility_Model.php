<?php
class Mobility_Model extends Model {
	function __construct() {
		parent::__construct();
		Session::init();

	}

	function Index() {
		$result = $this->Connect->query("SELECT content FROM art WHERE id ='2'");
	     $line = $result ->fetch_assoc();
		 $article = $line['content'];
       
		Session::set('$art', $article);
		$this->Connect->close();

	}
}