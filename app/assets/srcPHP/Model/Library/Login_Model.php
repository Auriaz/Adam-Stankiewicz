<?php

class Login_Model extends Model {

	function __construct() {
		parent::__construct();

	}

  public function onLine() {
   // Pobranie danych z bazy poprzez Model 
   $Connect = $_POST['Connect'];

    Session::init();
    $email = $_POST['login'];
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];  

    //Zabezpieczenie loginu przed wstrzykiwaniem do mySQL'a 
    $login = htmlentities($login, ENT_QUOTES, "UTF-8");
   
    //Pobranie danych z bazy. Sprawdzenie poprawności loginu
    if($result = $Connect->query(sprintf("SELECT * FROM uzytkownicy WHERE user='%s' OR email='%s'",
       mysqli_real_escape_string($Connect, $login),mysqli_real_escape_string($Connect, $email)))) {
      
    $users = $result ->num_rows;
     
     if($users > 0) {
        $line = $result ->fetch_assoc();

        //Sprawdzenie poprawnosci hashowanego hasla
        if(password_verify($haslo, $line['pass'])) {

          Session::set('loggedIn', true);

          $value_id = $line['id'];
          $value_user = $line['user'];
          $value_role = $line['role'];

          Session::set('$id', $value_id);
          Session::set('$user', $value_user);
          Session::set('$role', $value_role);
          

          
          header('Location: ../Dashboard');
          $result->free_result();
        }else{
           header('Location: ../Login');

           $value_fault = '<span style="color: red">Nieprawidłowy login lub hasło!</span>';

           Session::set('$fault', $value_fault);
         }

       }else{
         header('Location: ../Login');

         $value_fault = '<span style="color: red">Nieprawidłowy login lub hasło!</span>';

         Session::set('$fault', $value_fault);
       }
    }

      $Connect->close();
 }
}
