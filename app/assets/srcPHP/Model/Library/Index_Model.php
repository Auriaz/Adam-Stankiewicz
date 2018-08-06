<?php
class Index_Model extends Model {
	function __construct() {
		parent::__construct();
		Session::init();
	}

	function Index() {
      $result = $this->Connect->query("SELECT * FROM Workout_Datebase ORDER BY id_workout DESC");
      
	     $line = $result->fetch_assoc();
	
		 $value_id = $line['id_workout'];
		$value_date = $line['date'];
		 $value_basic_exercises = $line['basic_exercises'];
		  $value_anaerobic_exercise = $line['anaerobic_exercise'];
		 $value_metabolic_condition = $line['metabolic_condition'];
		
         $value_user = $line['author'];
        

		Session::set('$date', $value_date);
		Session::set('$basic_exercises', $value_basic_exercises);
		Session::set('$anaerobic_exercise', $value_anaerobic_exercise);
		Session::set('$metabolic_condition', $value_metabolic_condition);
		
		$this->Connect->close();
	}
}
