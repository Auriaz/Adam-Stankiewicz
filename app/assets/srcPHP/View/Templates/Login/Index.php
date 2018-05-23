<div class="content content--login content--transparent">

<?php
Session::init();

if(isset($_SESSION['Registered'])) {
	if('Registered' == true) {
		echo "<h3>Dziekujemy za rejestrację na stronie! Możesz już zalogować się na swoje konto.</h3>";
		Session::unsets('Registered');
		
	}
}
?>
	<div class="box-login">


		<div class="icon icon--user">
		    <i class="icon-user"></i> 
		             
		</div><h2 class="box-login__title">Sing In</h2>

		

		<form action="Login/onLine" method="post">

			<p class="box-login__text">Username</p>
			<input type="text" name="login" placeholder="Login lub adres e-mail" /> 
			<p class="box-login__text">Password</p>
			<input type="password" name="haslo" placeholder="hasło" /> 
			<?php	
			if(Session::get('$fault')) {
			echo Session::get('$fault')."<br/>";
			Session::destroy();
			}
			?>
			
			<input class="btn btn--login" type="submit" value="Zaloguj się" />

		</form>

		<form action="Registration">
			<input class="btn btn--login" type="submit" value="Zarejestruj się" />
	    </form>
	
		<a href="<?php echo URL;?>#" > Forget password</a>
	</div>

		

</div>
