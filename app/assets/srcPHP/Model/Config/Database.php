<?php 
class Database extends mysqli{
	public function __construct($host, $db_user, $db_password, $db_name) {
	 	//Connection to the database
	 	require_once 'Config.php';
		parent::__construct($host, $db_user, $db_password, $db_name);
		

      //Catching incorrect reports
           mysqli_report(MYSQLI_REPORT_STRICT);
           if (mysqli_connect_errno() != 0) {
           	echo '<span style="color: red;"> Błąd serwera! Przepraszamy za niedogodności, zapraszamy do rejestracji w innym terminie!</span>';
		     echo '<br/> Informacja developerska: '
		     .mysqli_connect_errno();
           }     		
    }

    /*
		type string $sql A SQL string
		type string $mode parameter for determining the type of query
		type constant $fatchMode A MYSQLi fatch mode
		return mixed  
    */
    public function Select($sql, $fetchMode = 'fetch_all', $Mode = MYSQLI_BOTH){
    	$result = $this->query("$sql");
    		
    	return $result->{$fetchMode}($Mode);	
    }

   /*
   	* string $table name of table to insert into
   	* array $data An associative array
   	*/	
	public function Insert($table, $data, $id) {
		//ksort($data);
		$fieldNames = "$id, ".implode(", ", array_keys($data));
		$fieldValues = "'". implode("' , '", array_values($data))."'";
		// echo "INSERT INTO $table ($fieldNames) VALUES (NULL, $fieldValues)";
		// die();
		$result = $this->query(
			"INSERT INTO $table ($fieldNames) VALUES (NULL, $fieldValues)"
		);
	}
 /*
   	* string $table name of table to insert into
   	* string $data An associative array
   	*string $where location where the data in the database should be 
   	*/	
	public function Update($table, $data, $where) {
		$fieldDetails = NULL;
		foreach ($data as $key => $value) {
			$fieldDetails .= " $key = '$value',";
		}
		$fieldDetails = rtrim($fieldDetails, ",");

		$result = $this->query(
			"UPDATE $table SET $fieldDetails WHERE $where"
		);
	}

	/*
		type string $sql A SQL string
	*/
	public function Delete ($table, $where, $limit = 1) {
		return $this->query("DELETE FROM $table WHERE $where LIMIT $limit");
	}
}






 
  