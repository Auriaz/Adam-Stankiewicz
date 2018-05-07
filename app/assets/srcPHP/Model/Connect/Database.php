<?php 

 $Config = require_once 'assets/srcPHP/Model/Connect/Config.php'; 
 try{
     $db = new PDO("mysql:host={$Config['host']}; dbname={$Config['Database']}; charset=utf8", $Config['user'], $Config['password'], [PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
           
    }
   catch(PDOException $error) {

      	 echo '<span style="color: red;"> Błąd serwera! Przepraszamy za niedogodności, zapraszamy w innym terminie!</span>';

		// echo '<br/> Informacja developerska: '.$error;
   }