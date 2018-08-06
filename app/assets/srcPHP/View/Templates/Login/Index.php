
<div class="content  content--login content--transparent content--add content--add-padding">

<?php
Session::init();

if(isset($_SESSION['Registered'])) {
	if('Registered' == true) {
		echo "<div class='wrapper__login-text'><h3 class='section-title section-title--small section-titl--less-margin'>Dziekujemy za rejestrację na stronie! Możesz już zalogować się na swoje konto.</h3></div>";
		Session::unsets('Registered');
	}
}
?>
	<div class="transparent-box transparent-box--login">


		<div class="icon icon--user">
		    <i class="icon-user"></i>            
		</div>
		<h2 class="transparent-box__title">Sing In</h2>
		<form action="Login/onLine" method="post">
			<p class="transparent-box__text">Username</p>
			<input type="text" name="login" placeholder="Login lub adres e-mail" /> 
			<p class="transparent-box__text">Password</p>
			<input type="password" name="haslo" placeholder="hasło" /> 
				<?php	
					if(Session::get('$fault')) {
						echo "<br/>".Session::get('$fault')."<br/>";
						Session::destroy();
					}
				?>
			<input class="btn btn--add-margin" type="submit" value="Zaloguj się" />
		</form>
		<form action="Registration">
			<input class="btn btn--add-margin" type="submit" value="Zarejestruj się" />
	    </form>
		<a href="<?php echo URL;?>#" > Forget password</a>
	</div>
</div>
