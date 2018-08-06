<?php
Session::init();
?>
<div class="content content--transparent content--add content--add-padding">

	<div class="transparent-box transparent-box--registration">
		<div class="icon icon--user">
		    <i class="icon-user-plus"></i> 
		             
		</div><h2 class="transparent-box__title">Rejestracja - załóż konto </h2>
		


		<form method="post" action="Registration/Insert">
			<p class="transparent-box__text">Username</p>
		  <input type="text"  placeholder="Nickname" value="<?php 
				if(isset($_SESSION['fr_nick']))
				 {
					 echo Session::get('fr_nick');
					 Session::unsets('fr_nick');
				 }
				 ?>" name="nick"/><br/>
				 <?php
				     if(isset($_SESSION['e_nick']))
					 {
						 echo '<div class= "error">'.Session::get('e_nick').'</div>';
						 Session::unsets('e_nick');
					 }
				 ?>
				 <p class="transparent-box__text">E-mail</p>
		   <input type="text" placeholder="E-mail" value="<?php  
				 if(isset($_SESSION['fr_email']))
				 {
					 echo Session::get('fr_email');
					 Session::unsets('fr_email');
				 } 
		    ?>" name="email"/><br/>
				 <?php
				   if(isset($_SESSION['e_email']))
					 {
						 echo '<div class= "error">'.Session::get('e_email').'</div>';
						 Session::unsets('e_email');
					 }
				 ?>
				 <p class="transparent-box__text">Entry password</p>
			<input type="password" placeholder="Twoje hasło" value="<?php  
				 if(isset($_SESSION['fr_haslo1']))
				 {
					 echo Session::get('fr_haslo1');
					 Session::unsets('fr_haslo1');
				 }
		      ?>"  name="haslo1"/><br/>
				 <?php
			        if(isset($_SESSION['e_haslo']))
					 {
						 echo '<div class= "error">'.Session::get('e_haslo').'</div>';
						 Session::unsets('e_haslo');
					 }
				 ?>

				 <p class="transparent-box__text">Repeat password</p>
			 <input type="password"  placeholder="Powtórz hasło" value="<?php  
				 if(isset($_SESSION['fr_haslo2']))
				 {
					 echo Session::get('fr_haslo2');
					 Session::unsets('fr_haslo2');
				 }
				 ?>" name="haslo2"/><br/>
				 		
			      <br/>
			<label>
			  <input type="checkbox" name= "regulamin" <?php
				  if(isset($_SESSION['fr_regulamin']))
				   {
					   echo "checked";
					   Session::unsets('fr_regulamin');
					}
				  ?>
				  />Akceptuje regulamin
			  </label>
			 	 <?php
			   if(isset($_SESSION['e_regulamin']))
				 {
					 echo '<div class= "error">'.Session::get('e_regulamin').'</div>';
					Session::unsets('e_regulamin');
				 }
			 ?>
			<div class="transparent-box__recaptcha">
				<div class="g-recaptcha" data-sitekey="6LcfQx0TAAAAABZJrEIbLXCE4cqs3RSbHxu7daPD"></div>
			</div>
			 
			 	 <?php
			      if(isset($_SESSION['e_bot']))
				 {
					 echo '<div class= "error">'.Session::get('e_bot').'</div>';
					 Session::unsets('e_bot');
				 }
			 ?>
			 
			 <input class="btn btn--add-margin" type= "submit" value="Zarejestruj się"/>
		 </form>
	</div>
</div>