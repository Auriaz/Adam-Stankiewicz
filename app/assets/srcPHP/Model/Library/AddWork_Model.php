<?php
//dodaje artykuły do bazy 
class AddWork_Model extends Model {
	function __construct() {
		parent::__construct();
		Session::init();
	}

	public function addWork() {

		if(isset($_SESSION['$user'])) {
		  $user = Session::get('$user'); 
		  $date = date('Y-m-d D');
		  $section = "Workout";
	  	  $warm_up = $_POST['warm_up'];
		  $mobility = $_POST['mobility'];
		  $corrective_exercises = $_POST['corrective_exercises'];
		  $activation_exercises = $_POST['activation_exercises'];
		  $technical_exercises = $_POST['technical_exercises'];
		  $basic_exercises = $_POST['basic_exercises'];
		  $accessory_exercises = $_POST['accessory_exercises'];
		  $anaerobic_exercise = $_POST['anaerobic_exercise'];
		  $metabolic_condition = $_POST['metabolic_condition'];
		  $stretching = $_POST['stretching'];
		  $cool_down = $_POST['cool_down'];
		  $methodology_exercises = $_POST['methodology_exercises'];
		  $picture = $_POST['picture'];

		  if($result = $this->Connect->query("INSERT INTO Workout_Datebase VALUES (NULL, '$date', '$section', '$warm_up', '$mobility', '$corrective_exercises', '$activation_exercises', '$technical_exercises', '$basic_exercises', '$accessory_exercises', '$anaerobic_exercise', '$metabolic_condition', '$stretching', '$cool_down', '$methodology_exercises', '$picture', '$user')")) {

		  header('location: ../AddWork/added');
		  }else{
		  	echo "Błąd przy wysyłaniu zapytania";
		  }
		  $this->Connect->close();
		}
	}

	public function Art() {

	}

	public function delArt() {

	}
}