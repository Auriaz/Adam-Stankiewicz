<div class="content content--dashboard content--add content--add-top content--transparent">
	<div class='dashboard'>
		<h3>Dashboard... Logged in only..</h3>
		<?php
		        Session::init();
				$user = Session::get('$user');
				$user = ucfirst($user);

				echo "Witaj ".$user." !";
		?>
		<br/>

		<form id="randomInsert" action="<?php echo URL;?>Dashboard/Insert" method="post">
			<input type="text" name="text"/>
			<input class="btn btn--add btn--add-margin" type="submit" /> 
		</form>
		
		<div id="listInsert"></div>
	</div>



