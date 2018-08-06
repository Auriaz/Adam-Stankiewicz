<?php
class Login_Model extends Model {
	function __construct() {
		parent::__construct();
    Session::init();
	}

  public function onLine() {
   // Pobranie danych z bazy poprzez Model 
   //$Connect = $_POST['Connect'];
    
    $email = $_POST['login'];
    $login = $_POST['login'];
    $pass =  $_POST['haslo'];  

    //Zabezpieczenie loginu przed wstrzykiwaniem do mySQL'a 
    $login = htmlentities($login, ENT_QUOTES, "UTF-8");
   
    //Pobranie danych z bazy. Sprawdzenie poprawności loginu
    if($result = $this->Connect->query(sprintf("SELECT * FROM uzytkownicy WHERE user='%s' OR email='%s'",
       mysqli_real_escape_string($this->Connect, $login),mysqli_real_escape_string($this->Connect, $email)))) {
      
    $users = $result ->num_rows;
    
     if($users > 0) {
        $line = $result ->fetch_assoc();
        
        //Sprawdzenie poprawnosci hashowanego hasla
         $hash_key = Hash::create('sha256', $pass, HASH_KEY);
        if(password_verify($hash_key, $line['pass'])) {
          Session::set('loggedIn', true);

          $value_id = $line['id_user'];
          $value_user = $line['user'];
          $value_role = $line['role'];

          Session::set('$id_user', $value_id);
          Session::set('$user', $value_user);
          Session::set('$role', $value_role);
          Session::set('loggedIn', true);
          $result->free_result();
          
          header('Location: '. URL .'Dashboard/Index');         
        } else {
           header('Location: '. URL .'Login');

           $value_fault = '<span style="color: red">
                              Nieprawidłowy login lub hasło!
                           </span>';

           Session::set('$fault', $value_fault);
         }
       } else {
         header('Location: ../Login');

         $value_fault = '<span style="color: red">
                            Nieprawidłowy login lub hasło!
                         </span>';

         Session::set('$fault', $value_fault);
       }
    }
      $this->Connect->close();
 }
}
