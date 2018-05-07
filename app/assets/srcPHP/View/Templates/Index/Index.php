<article>
  <div class="content content--index">

  	<div class="box box__workout">
  		<a href="<?php echo URL;?>Workout">	
  			<div class="postcard">
  				<p class="index">Workout of Day<br/><br/>Overhead squat 3-3-3-3-3 reps<br/><br/>

			Scroll for scaling options.<br/>
			Post loads to comments.<br/>
			Compare to 170302.</p>
			<img src="/Project/app/assets/images/img/crossfit_2.jpg" alt="Workout of Day">
				
			
		<!--Można wstawić WOD dnia-->
  			</div>	
		</a>
  	</div>

  	<div class="box box__metabolic">
  		<a href="<?php echo URL;?>Metabolic">
			<div class="postcard postcard__photo"><p class="index">O wytrzymałości</p>
				<img src="/Project/app/assets/images/img/wytrzymalosc.jpg" alt="Workout of Day">
			</div>
	    </a>
  	</div>

  	<div class="box box__strength">
  		<a href="<?php echo URL;?>Strength">
			<div class="postcard postcard__photo"><p class="index">Jak zwiekszyć siłę</p>
				<img src="/Project/app/assets/images/img/strength.jpg" alt="Workout of Day">
			</div>
		</a>
  	</div>
  	<div class="box box__mobility">
  		<a href="<?php echo URL;?>Mobility">
			<div class="postcard postcard__photo"><p class="index">Rozciąganie</p>
				<img src="/Project/app/assets/images/img/stretching2.jpg" alt="Workout of Day">
			</div>
		</a>
  	</div>

  	<div class="box box__diet">
  		<a href="<?php echo URL;?>Diet">
			
			<div class="postcard postcard__photo"><p class="index" style="color: #60a415;">Dieta i suplementacja</p>
				<img src="/Project/app/assets/images/img/dieta.jpg" alt="Workout of Day">
			</div>
			<!--Można wstawić przepis dnia-->
		</a>
  	</div>

  	<div class="box box__movie">
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
  	<div class="box box__art1">
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
  	
  	<div class="box box__art2">
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
  	
  	<div class="box box__offering">
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