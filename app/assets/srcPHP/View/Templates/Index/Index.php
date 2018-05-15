<article>
  <div class="content content--index">

  	<div class="box-index box-index-workout">
  		<a href="<?php echo URL;?>Workout">	
  			<div class="postcard ">
  				<div class="box-index-workout__text-content">
	  				<span class="box-index-workout__title">		
				  		<?php

							if(isset($_SESSION['$date'])) {
								echo Session::get('$date')."<br/><br/>";
							}
							?>
					</span>
					<span class="box-index-workout__subtitle">	
						<?php
							if(isset($_SESSION['$date'])) {	
								echo Session::get('$basic_exercises');
					
								echo Session::get('$anaerobic_exercise');
								echo Session::get('$metabolic_condition');
							}
						?>
					</span>
				</div>
			<img src="/Project/app/assets/images/img/crossfit_2.jpg" alt="Workout of Day">
				
			
		<!--Można wstawić WOD dnia-->
  			</div>	
		</a>
  	</div>

  	<div class="box-index box-index-metabolic">
  		<a href="<?php echo URL;?>Metabolic">
			<div class="postcard postcard__photo">
				<p class="box-index-metabolic__text">Wytrzymałość</p>
				<img src="/Project/app/assets/images/img/wytrzymalosc.jpg" alt="Workout of Day">
			</div>
	    </a>
  	</div>

  	<div class="box-index box-index-strength">
  		<a href="<?php echo URL;?>Strength">
			<div class="postcard postcard__photo"><p class="box-index-strength__text">Jak zwiekszyć siłę</p>
				<img src="/Project/app/assets/images/img/strength.jpg" alt="Workout of Day">
			</div>
		</a>
  	</div>
  	<div class="box-index box-index-mobility">
  		<a href="<?php echo URL;?>Mobility">
			<div class="postcard postcard__photo"><p class="box-index-mobility__text">Rozciąganie</p>
				<img src="/Project/app/assets/images/img/stretching2.jpg" alt="Workout of Day">
			</div>
		</a>
  	</div>

  	<div class="box-index box-index-diet">
  		<a href="<?php echo URL;?>Diet">
			
			<div class="postcard postcard__photo"><p class="box-index-diet__text">Dieta i suplementacja</p>
				<img src="/Project/app/assets/images/img/dieta.jpg" alt="Workout of Day">
			</div>
			<!--Można wstawić przepis dnia-->
		</a>
  	</div>

  	<div class="box-index box-index-movie">
  		<div class="postcard">
	  		<a href="<?php echo URL;?>Movie">
				<!--Można wstawić ostatni dodany filmik-->
				<?php

					if(isset($_SESSION['$art'])) {
					echo Session::get('$art');
					}
				?>
					
			</a>
		</div>
  	</div>
  	<div class="box-index box-index-art1">
  		<div class="postcard postcard__photo">
			<div class="overlay">
				<a href ="<?php echo URL;?>Diet/Nutrition/Zakwaszenie"><img src="http://www.jacekbilczynski.pl/wp-content/uploads/2017/12/zakwaszenie.jpg" alt="Zakwaszenie organizmu">
				</a>
				<a class="link" href ="<?php echo URL;?>Diet/Nutrition/Zakwaszenie"><p>Przeglądając internetowe fora często trafiam na informacje o diecie odkwaszającej, o tym jak bardzo narażeni jesteśmy na zakwaszenie i jak wielce jest to niebezpieczne...</p><p style="right:0; position: absolute; font-size: 15px;">01 Deceber 2017 </p>
				</a>
				<h3>Odkwaszanie organizmu – hit czy kit?</h3>
			</div>
		</div>
		
  	</div>
  	
  	<div class="box-index box-index-art2">
  		<div class="postcard postcard__photo">
			<div class="overlay">
				<a href ="<?php echo URL;?>Diet/Nutrition/Zakwaszenie"><img src="http://www.jacekbilczynski.pl/wp-content/uploads/2017/12/zakwaszenie.jpg" alt="Zakwaszenie organizmu">
				</a>
				<a class="link" href ="<?php echo URL;?>Diet/Nutrition/Zakwaszenie"><p>Przeglądając internetowe fora często trafiam na informacje o diecie odkwaszającej, o tym jak bardzo narażeni jesteśmy na zakwaszenie i jak wielce jest to niebezpieczne...</p><p style="right:0; position: absolute; font-size: 15px;">01 Deceber 2017 </p>
				</a>
				<h3>Odkwaszanie organizmu – hit czy kit?</h3>
			</div>
		</div>
		
  	</div>
  	
  	<div class="box-index box-index-offering">
  		<div class="postcard postcard__photo">
			<div class="overlay">
				<a href ="<?php echo URL;?>AboutMe"><img src="/Project/app/assets/images/img/ketbells.jpg" alt="Offering">
				</a>
				<a class="link" href ="<?php echo URL;?>AboutMe"><p>Oferta </p><p style="right:0; position: absolute; font-size: 15px;">01 Deceber 2017 </p>
				</a>

			</div>
		</div>
  	</div>
  </div>
  


</article>