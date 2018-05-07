<div class="content--login">
<?php
Session::init();

if(isset($_SESSION['Registered'])) {
	if('Registered' == true) {
		echo "<h3>Dziekujemy za rejestrację na stronie! Możesz już zalogować się na swoje konto.</h3>";
		Session::unsets('Registered');
		
	}
}
?>

		<form action="Login/onLine" method="post">

			 <input type="text" name="login" placeholder="Login lub adres e-mail" /> </br> </br>
			 <input type="password" name="haslo" placeholder="hasło" /> </br>
	<?php	
	if(Session::get('$fault')) {
		echo Session::get('$fault')."<br/>";
		Session::destroy();
	}
	?>
	</br>
	<input type="submit" value="Zaloguj się" />
		
		</form>

		<form action="Registration">
		<input type="submit" value="Zarejestruj się" style="margin-top:  40px;" />
	    </form>

</div>
