 <?php Session::init(); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
 <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
  <title>Szkielet strony</title>
  <meta name="keywords" content="">
  <meta name="description" content="">

  <script src='https://www.google.com/recaptcha/api.js'></script>
 


<!-- build:css assets/styles/styles.css -->
<link rel= 'stylesheet' href= "<?php echo URL;?>temp/styles/styles.css">
<!-- endbuild -->

 <!-- build:jsV assets/scripts/Vendor.js -->
 <script src="<?php echo URL;?>scripts/Vendor.js"></script>
 <!-- endbuild -->

  <!-- build:jsV assets/scripts/App.js -->
 <script defer src="<?php echo URL;?>temp/scripts/App.js"></script>
 <!-- endbuild -->


</head>
<body>

 <div class="container">
 	

<header>
	<div class="header">

	<!-- ##### SLAJDER ##### -->

		<div id="slider" > </div>
		      
		    <div class="nazwaslajdu">
		        <div onclick="ustawslajd(1)" style="cursor:pointer; "></div>
		        <div onclick="ustawslajd(2)" style="cursor:pointer; "></div>
		        <div onclick="ustawslajd(3)" style="cursor:pointer; "></div>
		        <div onclick="ustawslajd(4)" style="cursor:pointer; "></div>
		        <div onclick="ustawslajd(5)" style="cursor:pointer; "></div>	
		    </div>


	
<!-- ##### KONIEC SLAJDERa ##### -->

<!-- ##### NAWIGACJA ##### --> 

	<nav>
		<div id="navigation"  class="nav">

		     <ol class="navi">  

		        <li>
		        	<a href="<?php echo URL;?>Index"> KrainaMocy</a>
				</li>

	     	    <li>
	     	    	<a href="<?php echo URL;?>Index"> Home</a>
				</li>
				<li>
					<a href="<?php echo URL;?>Metabolic">Metabolic</a>

				    <ul> 
					    <li> <a href="crossfit.php">CrossFit</a></li>

					    <li> <a href="#">Bieganie</a></li>

					    <li> <a href="#">opcja</a></li>
					</ul>
					 
			    </li>

	            <li>
	             	<a href="<?php echo URL;?>Strength">Strength</a>

				    <ul>
	       				 <li><a href="<?php echo URL;?>Strength/Weightlifting">Weightlifting</a></li>

					     <li><a href="Strength/Powerlifting">Powerlifting</a></li>
					</ul>

				</li>				 
	          
			    <li>
				 	<a href="<?php echo URL;?>Mobility">Mobility</a>
	                      
	                <ul>
					    <li> <a href="#">Gimnastic</a></li>

					    <li> <a href="#">Joga</a></li>

					    <li> <a href="#">opcja</a></li>
					</ul>
					  
				</li>

				<li>
				  	<a href="<?php echo URL;?>Diet">Diet</a>
				    <ul>
					    <li> <a href="<?php echo URL;?>Diet/Supplements/Article">Suplementy</a></li>

					    <li> <a href="<?php echo URL;?>Diet/Adaptogens/Article">Adaptogeny</a></li>

					    <li> <a href="<?php echo URL;?>Diet/Nutrition/Article">Odrzywianie</a></li>
				    </ul>

				</li>

				<li> 

				 	<a href="<?php echo URL;?>AboutMe">About Me</a>

				 	<ul>
				 		<li><a href="<?php echo URL;?>Help"> Help</a></li>
				    </ul>

				</li>

				<li>


				

				   <?php if(Session::get('loggedIn') == true):?>
			         <a href="#">Panel</a>
			         
				   <ul>
				   	 	<li>
				      		<a href="<?php echo URL;?>Dashboard/Logout"> Logout</a>
				    	</li>

				  		<li>
				      		<a href="<?php echo URL;?>AddWork"> Add a Workout</a>
				    	</li>

				     	<?php if(Session::get('$role') == 'admin'):?>

				     	<li>
			           		<a href="<?php echo URL;?>User"> Users</a>
			         	</li>
			         	<li>
			           		<a href="<?php echo URL;?>Article"> Article</a>
			        	</li> 

			         	<?php endif; ?>

		             	<?php if(Session::get('$role') == 'redactor'):?>

		             	<li>	
		  	           		<a href="<?php echo URL;?>Article"> Article</a>
		             	</li>
			         	<?php endif; ?>
			       	</ul>

		         	<?php else: ?>
		           	<a href="<?php echo URL;?>Login"> Sing In</a>
		           	<?php endif; ?>
		           
				</li>

		    
			</ol>

		</div>
				    
	</nav>


<!-- ##### KONIEC NAWIGACJI ##### -->








	</div> 				
	
</header>

<main>