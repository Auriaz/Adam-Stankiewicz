<h3>Users</h3>


<table> 
<?php
	foreach ($this->userList as $key => $value) {
		if($key == 0) $key = ' Id ';
		if($key == 1) $key = ' Login ';
		if($key == 2) $key = ' E-Mail ';
		if($key == 3) $key = ' Role ';

		 echo'<tr>'.$key;
		 if(isset($_SESSION['edit'])){
		 	
		 	echo  '<td><form method="post" action="User/editSave/'.$value[0].'"></td>';
		 	echo '<td>'.$value[0].'</td>';
		 	echo '<td><label>Login</label> <input type="text" name="login" value="'.$value[1].'"></td>';
			echo '<td><label>E-Mail</label> <input type="text" name="email" value="'.$value[2].'"></td>';
		
			 echo '<td><label>Role</label>
			  <select name="role">';
			 if($value[3] == 'default') {
			 	echo '<option value="default" 
			 				selected="selected">Default</option>
			 		   <option value="admin">Admin</option>
			 		   <option value="redactor">Redactor</option>';
			 }

			  if($value[3] == 'admin') {
			 	echo '<option value="default" 
			 				>Default</option>
			 		   <option value="admin"selected="selected">Admin</option>
			 		   <option value="redactor">Redactor</option>';
			 }

			 if($value[3] == 'redactor') {
			 	echo '<option value="redactor" 
			 				>Default</option>
			 		   <option value="admin">Admin</option>
			 		   <option value="redactor" selected="selected">Redactor</option>';
			 }

			 echo '</select>
			 </td>';
			 echo '<td><label>&nbsp</label><input type="submit" value="Zatwierdź zmiane"></td>';
			 echo '</form>';
		 }else{
		 	
		 	echo '<td>'.$value[0].'</td>';
			echo '<td>'.$value[1].'</td>';
		 	echo '<td>'.$value[2].'</td>';
		 	echo '<td>'.$value[3].'</td>';

		    echo '<td>
		 		<a href="User/Edit/'.$value[0].'">Edit</a></td>
		 	    <td><a href= "User/Delete/'.$value[0].'
		 		 ">Delete</a>
		 	   </td>';
		 }

		 echo '</tr>';
	}


?>
</table>
