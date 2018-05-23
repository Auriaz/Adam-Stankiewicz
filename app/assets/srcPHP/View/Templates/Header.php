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
	<div class="header-side">

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
						<div class="social-icons">
			             
			           		<a href="https://youtube.com" target="_blank" class="social-icons__icon">
			           			<span class="icon icon--youtube icon--header">
			                  		<i class="icon-youtube"></i>	
				                </span>
				            </a>
			   
			            	<a href="https://pl-pl.facebook.com/" target="_blank" class="social-icons__icon">
			                	<span class="icon icon--facebook icon--header">
			                  		<i class="icon-facebook-squared" ></i>
				                </span>
				            </a>
			   
			            	<a href="https://plus.google.com" target="_blank"  class="social-icons__icon">
			                	<span class="icon icon--gplus icon--header">
			                  		<i class="icon-gplus" ></i>
			                  	</span>
			                </a>
			                
			                <a href="https://twitter.com" target="_blank" class="social-icons__icon">
			                	<span class="icon icon--twitter icon--header">
			                  		<i class="icon-twitter"></i>
			                  	</span>
			                </a>

			   			</div>

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
			           	<a href="<?php echo URL;?>Login" class="social-icons__icon">
			           		 <span class="icon icon--user-plus icon--header">
			                  		<i class="icon-user-plus"></i>
			                  Sing In</span>
			             </a>
			           	<?php endif; ?>

			           
					</li>

			    
				</ol>

			</div>
					    
		</nav>
	<!-- ##### KONIEC NAWIGACJI ##### -->

	<!-- ##### SLAJDER ##### -->
		<picture>
			<source srcset="/Project/app/assets/images/img/slajdy/slajd--large.jpg" media="(min-width: 1380px)">			
			<source srcset="/Project/app/assets/images/img/slajdy/slajd--medium.jpg" media="(min-width: 990px)">			
			<source srcset="/Project/app/assets/images/img/slajdy/slajd--small.jpg" media="(min-width: 640px)">
									
			<img srcset="/Project/app/assets/images/img/slajdy/slajd--smaller.jpg" alt="Workout of Day" class="header-side__image">
		</picture>

		<div class="header-side__text-content">
			<div class="wrapper">

				<p class="header-side__text">"Za dwadzieścia lat bar­dziej będziesz żałował te­go, cze­go nie zro­biłeś, niż te­go, co zro­biłeś. Więc od­wiąż li­ny, opuść bez­pie­czną przys­tań. Złap w żag­le po­myślne wiat­ry. Podróżuj, śnij, od­kry­waj."  - Mark Twain</p>

			</div>
		</div>
		
		      	
	<!-- ##### KONIEC SLAJDERa ##### -->
	
	
	</div> 
	
				
	
</header>

<main>