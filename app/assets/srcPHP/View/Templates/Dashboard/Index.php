Dashboard... Logged in only..<br/>
<?php
        Session::init();
		$user = Session::get('$user');
		$user = ucfirst($user);

		echo "Witaj ".$user." !";
?>
<br/>

<form   action="Dashboard/Insert" method="post">
	<input type="text" name="text"/>
	<input type="submit" /> 

</form>
