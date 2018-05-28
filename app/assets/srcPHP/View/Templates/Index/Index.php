<article>
  <div class="content content-add content--index">
  	<div class="box-index">
	  	<div class="box-index--workout">
	  		<a href="<?php echo URL;?>Workout">	
	  			<div class="postcard postcard--halo">
	  				<div class="box-index--workout__text-content">
		  				<h2 class="box-index--workout__title">		
					  		<?php

								if(isset($_SESSION['$date'])) {
									echo Session::get('$date')."<br/><br/>";
								}
								?>
						</h2>
						<h3 class="box-index--workout__subtitle">	
							<?php
								if(isset($_SESSION['$date'])) {	
									echo Session::get('$basic_exercises');
						
									echo Session::get('$anaerobic_exercise');
									echo Session::get('$metabolic_condition');
								}
							?>
						</h3>
					</div>
				<img src="/Project/app/assets/images/img/crossfit_2.jpg" alt="Workout of Day">
					
				
			<!--Można wstawić WOD dnia-->
	  			</div>	
			</a>
	  	</div>

	  	<div class="box-index--metabolic">
	  		<a href="<?php echo URL;?>Metabolic">
				<div class="postcard postcard__photo postcard--halo">
					<p class="postcard__text">Wytrzymałość</p>
					<img src="/Project/app/assets/images/img/wytrzymalosc.jpg" alt="Workout of Day">
				</div>
		    </a>
	  	</div>

	  	<div class="box-index--strength">
	  		<a href="<?php echo URL;?>Strength">
				<div class="postcard postcard__photo postcard--halo"><p class="postcard__text">Jak zwiekszyć siłę</p>
					<img src="/Project/app/assets/images/img/strength.jpg" alt="Workout of Day">
				</div>
			</a>
	  	</div>
	  	<div class="box-index--mobility">
	  		<a href="<?php echo URL;?>Mobility">
				<div class="postcard postcard__photo postcard--halo"><p class="postcard__text">Rozciąganie</p>
					<img src="/Project/app/assets/images/img/stretching2.jpg" alt="Workout of Day">
				</div>
			</a>
	  	</div>

	  	<div class="box-index--diet">
	  		<a href="<?php echo URL;?>Diet">
				
				<div class="postcard postcard__photo postcard--halo"><p class="postcard__text">Dieta i suplementacja</p>
					<img src="/Project/app/assets/images/img/dieta.jpg" alt="Workout of Day">
				</div>
				<!--Można wstawić przepis dnia-->
			</a>
	  	</div>

	  	<div class="box-index--offering">
	  		<div class="postcard postcard__photo postcard--halo">
				<div class="overlay">
					<a href ="<?php echo URL;?>AboutMe"><img src="/Project/app/assets/images/img/ketbells.jpg" alt="Offering">
					</a>
					<a class="overlay__link" href ="<?php echo URL;?>AboutMe" style="height: 100%;"><p>Oferta </p>
					</a>

				</div>
			</div>
	  	</div>
  	</div>
  	

	<div class="last-articles">
		
		<h3 class="section-title"> Ostatnio dodane artykuły </h3>
	  		
		<div class="postcard postcard__photo postcard--index__01">
			<div class="overlay">
				<a href ="<?php echo URL;?>Diet/Nutrition/Zakwaszenie"><img class="overlay__image" src="http://www.jacekbilczynski.pl/wp-content/uploads/2017/12/zakwaszenie.jpg" alt="Zakwaszenie organizmu">

				<p class="overlay__link">Przeglądając internetowe fora często trafiam na informacje o diecie odkwaszającej, o tym jak bardzo narażeni jesteśmy na zakwaszenie i jak wielce jest to niebezpieczne...</p>
				</a>

			</div>
			
			<h3 class="postcard__title">Odkwaszanie organizmu – hit czy kit?</h3>
		</div>
		
		<div class="postcard postcard__photo postcard--index__02">
			<div class="overlay">
				<a href ="<?php echo URL;?>Diet/Nutrition/Zakwaszenie"><img class="overlay__image" src="http://www.jacekbilczynski.pl/wp-content/uploads/2017/12/zakwaszenie.jpg" alt="Zakwaszenie organizmu">

				<p class="overlay__link">Przeglądając internetowe fora często trafiam na informacje o diecie odkwaszającej, o tym jak bardzo narażeni jesteśmy na zakwaszenie i jak wielce jest to niebezpieczne...</p>
				</a>

			</div>

			<h3 class="postcard__title">Odkwaszanie organizmu – hit czy kit?</h3>
		</div>


		<div class="postcard postcard__photo postcard--index__03">
			<div class="overlay">
				<a href ="<?php echo URL;?>Diet/Nutrition/Zakwaszenie"><img class="overlay__image" src="http://www.jacekbilczynski.pl/wp-content/uploads/2017/12/zakwaszenie.jpg" alt="Zakwaszenie organizmu">

				<p class="overlay__link">Przeglądając internetowe fora często trafiam na informacje o diecie odkwaszającej, o tym jak bardzo narażeni jesteśmy na zakwaszenie i jak wielce jest to niebezpieczne...</p>
				</a>

			</div>
			
			<h3 class="postcard__title">Odkwaszanie organizmu – hit czy kit?</h3>
		</div>


		<div class="postcard postcard__photo postcard--index__04">
			<div class="overlay">
				<a href ="<?php echo URL;?>Diet/Nutrition/Zakwaszenie"><img 
				class="overlay__image" src="http://www.jacekbilczynski.pl/wp-content/uploads/2017/12/zakwaszenie.jpg" alt="Zakwaszenie organizmu">

				<p class="overlay__link">Przeglądając internetowe fora często trafiam na informacje o diecie odkwaszającej, o tym jak bardzo narażeni jesteśmy na zakwaszenie i jak wielce jest to niebezpieczne...</p>
				</a>

			</div>
			
			<h3 class="postcard__title">Odkwaszanie organizmu – hit czy kit?</h3>
		</div>

	  </div>

  </div>
</article>