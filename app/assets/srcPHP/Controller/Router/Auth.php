<?php
class Auth {
	public static function handleLogin() {
		@session_start();
		$logged = $_SESSION['loggedIn'];
		
		if($logged == false) {
			session_destroy();			
			header('Location: '. URL .'Login');
			exit();
		}
	}

	public static function handleAdminLogin() {
		@session_start();
		$logged = $_SESSION['loggedIn'];
		$role =$_SESSION['$role'];
		
		if($logged == false || $role != 'admin') {
			Session::destroy();			
			header('Location: '. URL .'Login');
			exit();
		}
	}

		public static function handleRedactorLogin() {
		@session_start();
		$logged = $_SESSION['loggedIn'];
		$role =$_SESSION['$role'];
		
		if($logged == false || $role == 'default') {
			Session::destroy();			
			header('Location: '. URL .'Login');
			exit();
		}
	}
}