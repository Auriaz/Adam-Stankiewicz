<?php
abstract class  Model {
	function __construct() {
    $this->Connect = new Database(
      'host', 'db_user', 'db_password', 'db_name');
  }
}