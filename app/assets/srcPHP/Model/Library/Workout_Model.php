<?php
class Workout_Model extends Model {
	function __construct() {
		parent::__construct();
		Session::init();
	}

	function Index() {
		$results = $this->Connect->query("SELECT * FROM Workout_Datebase ");
		
	     $line = $results ->fetch_array();
		
		 $value_id = $line['id_workout'];
		 $value_date = $line['date'];
		 $value_section = $line['section'];
		 $value_warm_up = $line['warm_up'];
		 $value_mobility = $line['mobility'];
		 $value_corrective_exercises = $line['corrective_exercises'];
		 $value_activation_exercises = $line['activation_exercises'];
		 $value_technical_exercises = $line['technical_exercises'];
		 $value_basic_exercises = $line['basic_exercises'];
		 $value_accessory_exercises = $line['accessory_exercises'];
		 $value_anaerobic_exercise = $line['anaerobic_exercise'];
		 $value_metabolic_condition = $line['metabolic_condition'];
		 $value_stretching = $line['stretching'];
		 $value_cool_down = $line['cool_down'];
         
         $value_methodology_exercises = $line['methodology_exercises'];
		 $value_user = $line['author'];

		Session::set('$date', $value_date);
		Session::set('$warm_up', $value_warm_up);
		Session::set('$mobility', $value_mobility);
		Session::set('$corrective_exercises', $value_corrective_exercises);
		Session::set('$activation_exercises', $value_activation_exercises);
		Session::set('$technical_exercises', $value_technical_exercises);
		Session::set('$basic_exercises', $value_basic_exercises);
		Session::set('$accessory_exercises', $value_accessory_exercises);
		Session::set('$anaerobic_exercise', $value_anaerobic_exercise);
		Session::set('$metabolic_condition', $value_metabolic_condition);
		Session::set('$stretching', $value_stretching);
		Session::set('$cool_down', $value_cool_down);
		Session::set('$methodology_exercises', $value_methodology_exercises);
	}
}
