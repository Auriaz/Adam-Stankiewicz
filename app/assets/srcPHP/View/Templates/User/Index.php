<div class="content content--dashboard content--add content--add-top content--transparent content__table">
	<div class='dashboard'>
		<div class="edit-user">
			<form action="<?php echo URL; ?>User/create" method="post" >

				<p class="box-login__text">Username</p>
				<input type="text" name="user" placeholder="login">

				<p class="box-login__text">E-Mail</p>
				<input type="text" name="email" placeholder="e-mail">

				<p class="box-login__text">Password</p>
				<input type="password" name="pass" placeholder="hasło">

				<p class="box-login__text">Role</p>
				<select name="role">
					<option value="default"> Default </option>
					<option value="admin" > Admin </option>
					<option value="redactor" > Redactor </option><option value="coach" > Coach </option>
				</select>

				<input class="btn btn--add-margin btn--add" type="submit" value="Dodaj" />
			</form>
		</div>

		<h2>Users</h2>
		<div>
			<table>
				<thead> 
					<tr>
					    <th scope="col">Id</th>
					    <th scope="col">Login</th>
					    <th scope="col">E-Mail</th>
					    <th scope="col">Role</th>
					    <th scope="col">Edit User</th>
					    <th scope="col">Remove</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($this->userList as $key => $value) {
							 echo'<tr>';
							 	echo '<td>'.$value[0].'</td>';
								echo '<td>'.$value[1].'</td>';
							 	echo '<td>'.$value[2].'</td>';
							 	echo '<td>'.$value[3].'</td>';
								echo '<td>
							 		 	<a href="User/Edit/'.$value[0].'">Edit</a>
							 		 </td>
							 	     <td>
							 	     	<a class="delete" href= "User/Delete/'.$value[0].'">Delete</a>
							 	     </td>';
						 	echo '</tr>';
						}


					?>
				</tbody>
			</table>
		</div>
	</div>