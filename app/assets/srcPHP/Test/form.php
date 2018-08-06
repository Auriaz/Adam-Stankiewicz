<?php
require  '../Controller/Engine/Form.php';
//require  '../Model/Config/Database.php';
require '../Model/Config/Database.php';

if (isset($_REQUEST['run'])) {
	try{
		$form = new Form();

		$form ->post('name')
		  ->val('minlength', 1)
		  ->post('age')
		  ->val('digit')
		  ->post('gender');	

		$form ->submit();
		echo 'The form passed!';
		$data = $form->get();

		echo '<pre>';
		print_r($data);
		echo '</pre>';

		$Connect = new Database(
      'host', 'db_user', 'db_password', 'db_name');
		$Connect->insert('person', $data);	

	} catch (Exception $e) {
		echo $e->getMessage();
	}
}
?>

<form method="post" action="?run">
	Name <input type="text" name="name">
	Age <input type="text" name="age">
	Gender <select name="gender">
		<option value="M">Male</option>
		<option value="F">Female</option>
	</select>
	<input type="submit" name="">
</form>
