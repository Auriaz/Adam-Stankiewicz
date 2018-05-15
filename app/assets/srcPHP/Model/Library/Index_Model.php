<?php

class Index_Model extends Model {

	function __construct() {
		parent::__construct();
		Session::init();

	}

	function Index() {
	
		$Connect = $_POST['Connect'];

		//$id = '2';
		
		$result = $Connect->query("SELECT content FROM art WHERE id ='1'");
	     $line = $result ->fetch_assoc();
		 $article = $line['content'];

       	$results = $Connect->query("SELECT * FROM Workout_Datebase ORDER BY id_workout DESC");
	     $lines = $results ->fetch_assoc();
		
		 $value_id = $lines['id_workout'];
		 $value_date = $lines['date'];
		 $value_basic_exercises = $lines['basic_exercises'];
		  $value_anaerobic_exercise = $lines['anaerobic_exercise'];
		 $value_metabolic_condition = $lines['metabolic_condition'];
		
         $value_user = $lines['author'];
        

		Session::set('$date', $value_date);
		Session::set('$basic_exercises', $value_basic_exercises);
		Session::set('$anaerobic_exercise', $value_anaerobic_exercise);
		Session::set('$metabolic_condition', $value_metabolic_condition);


		Session::set('$art', $article);




		$Connect->close();

	}

}
