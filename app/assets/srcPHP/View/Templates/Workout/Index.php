  <div class="content">
  	<article>
  
		<header>
			<h1>Workout of Day</h1>
		</header>
		<div class="">
		<?php

			if(isset($_SESSION['$date'])) {
				echo Session::get('$date')."<br/><br/>";
				
				echo Session::get('$warm_up')."<br/><br/>";
				echo Session::get('$mobility')."<br/><br/>";
				echo Session::get('$corrective_exercises')."<br/><br/>";
				echo Session::get('$activation_exercises')."<br/><br/>";
				echo Session::get('$technical_exercises')."<br/><br/>";
				echo Session::get('$basic_exercises')."<br/><br/>";
				echo Session::get('$accessory_exercises')."<br/><br/>";
				echo Session::get('$anaerobic_exercise')."<br/><br/>";
				echo Session::get('$metabolic_condition')."<br/><br/>";
				echo Session::get('$stretching')."<br/><br/>";
				echo Session::get('$cool_down')."<br/><br/>";
				echo Session::get('$methodology_exercises');
			}
		?>
		</div>

	</article>
</div>