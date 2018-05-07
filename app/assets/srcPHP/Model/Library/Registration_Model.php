<?php

class Registration_Model extends Model {

	function __construct() {
			parent::__construct();
			Session::init();
	}

	function Insert() {

		If(isset ($_POST['email'])){
			// Udana rejestracja 
			$all_OK = true;

			//sprawdzenie poprawności nickname
			$nick = $_POST['nick'];

			//sprawdzenie długości nick
			if((strlen($nick)<3) || (strlen($nick)>20)) {
				//Flaga all_OK ustawiona ujemnie
				$all_OK = false;
				Session::set('e_nick',"Nick musi posiadać od 3 do 20 znaków!");

			}

			//dopuszczenie poprzez funkcje ctype_alnum() znaków do nick'a
			if(ctype_alnum($nick) == false) {
				
				$all_OK = false;
				Session::set('e_nick', "Nick może składać się tylko z liter i cyfr( bez polskich znaków )");	
			}

			//Sprawdzenie poprawności adres e-mail
			$email = $_POST['email'];
			//Sanityzacjia podawanego adresu e-mail
			$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);

			if((filter_var($emailB, FILTER_VALIDATE_EMAIL) == false) || ($emailB != $email)) {

				$all_OK = false;
				Session::set('e_email', "Podaj poprawny adres e-mail!");
			}

			//Sprawdzenie poprawności hasła
			$haslo1 = $_POST['haslo1'];
			$haslo2 = $_POST['haslo2'];
			//sprawdzenie długości hasła
			if((strlen($haslo1)<8) || (strlen($haslo1)>20)) {
				//Flaga all_OK ustawiona ujemnie
				$all_OK = false;
				Session::set('e_haslo',"Hasło musi posiadać od 8 do 20 znaków!");	
			}

			if($haslo1 != $haslo2) {

				$all_OK = false;
				Session::set('e_haslo',"Podane hasła nie są identyczne!");
			}

			//Hashowanie hasla
			$haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);

			//Czy zakceptowano regulamin
			if(!isset($_POST['regulamin'])) {

				$all_OK = false;
				Session::set('e_regulamin',"Regulamin nie został zaakceptowany");
			}

			//reCapcha sprawdzenie botów!
			 $sekret = "6LcfQx0TAAAAAGoOyU879YEAri23XA6LQl2StcVW";
			 
			 $sprawdz = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$sekret.'&response='.$_POST['g-recaptcha-response']);
			 
			 $odpowiedz = json_decode($sprawdz);
			 
			 if ($odpowiedz ->success == false) {

				  $all_OK= false;
				  Session::set('e_bot',"Potwierdź, że nie jesteś botem !");	  
			 }

			 //Zapamietanie wprowadzonych danych w formularzu
			 Session::set('fr_nick', $nick);
			 Session::set('fr_email', $email);
			 Session::set('fr_haslo1', $haslo1);
			 Session::set('fr_haslo2', $haslo2);

			 if(isset($_POST['regulamin'])) {
			 	Session::set('fr_regulamin', true);
			 }

		    // Pobranie danych z bazy poprzez Model 
		   $Connect = $_POST['Connect'];


			//Sprawdzenie czy email jest juz zajety
		   $result = $Connect->query("SELECT id FROM uzytkownicy WHERE email='$email'");

		   if(!$result)throw new Exception($Connect ->error);

		   $how_many_mails = $result ->num_rows;

		   if($how_many_mails > 0) {

		   		$all_OK = false;
				Session::set('e_email', "Istnieje już konto przypisane do tego adres e-mail!");
				header('location: ../Registration');
			 }

			 //sprawdzenie czy nick jest zarezerwowany
		  $result = $Connect->query("SELECT id FROM uzytkownicy WHERE user='$nick'");

		   if(!$result)throw new Exception($Connect ->error);

		   $how_many_nicks = $result ->num_rows;

		   if($how_many_nicks > 0) {

		   		$all_OK = false;
				Session::set('e_nick', "Istnieje już użytkownik o takim nicku! Wybierz inny.");
				header('location: ../Registration');
			 }
	  	   

			//Testy zaliczono flaga all_OK ustawiona dodatnie
			if($all_OK == true) {
				$role = 'default';

				//Dodawanie użytkownika do bazy 
				if($Connect->query("INSERT INTO uzytkownicy VALUES (NULL, '$nick', '$haslo_hash', '$email', '$role' )")) {
					Session::set('Registered', true);
					header('location: ../Login');
				}


			}else{
				header('location: ../Registration');
			}
			$Connect->close();
		}
		

	}

}