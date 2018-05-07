<?php

abstract class  Model 
{
	function __construct() {
		require_once 'assets/srcPHP/Model/Connect/Config.php';
		//Wyciszenie błędnych raportów 
       mysqli_report(MYSQLI_REPORT_STRICT);

       //Poloczenie z bazą danych
       try{
       	 $Connect = new mysqli($host, $db_user, $db_password, $db_name);
          
           if($Connect->connect_errno != 0) {

           throw new Exception(mysqli_connect_errno());
           }else{
           	$_POST['Connect'] = $Connect;
           	
           }
           
       }
       catch(Exception $e) {

       	 echo '<span style="color: red;"> Błąd serwera! Przepraszamy za niedogodności, zapraszamy do rejestracji w innym terminie!</span>';

		 //echo '<br/> Informacja developerska: '.$e;
       }
	}	
}