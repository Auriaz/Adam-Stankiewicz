<div class="content content--dashboard content--add content--add-top content--transparent">
	<div class='dashboard'>
		<h1>User: Edit</h1>
		<div class="edit-user">
			<form method="post" action="<?php echo URL;?>User/editSave/<?php echo $this->User['id_user']; ?>">

				<p class="box-login__text">Username</p>
				<input type="text" name="user" value="<?php echo $this->User['user']; ?>" >

				<p class="box-login__text">E-Mail</p>
				<input type="text" name="email" value="<?php echo $this->User['email']; ?>">

				<p class="box-login__text">Password</p>
				<input type="password" name="pass" placeholder="hasło">

				<p class="box-login__text">Role</p>
				<select name="role">
					<option value="default" <?php if($this->User['role'] == 'default') echo 'selected';?>> Default </option>
					<option value="admin" <?php if($this->User['role'] == 'admin') echo 'selected';?>> Admin </option>
					<option value="redactor" <?php if($this->User['role'] == 'redactor') echo 'selected';?>> Redactor </option><option value="coach" <?php if($this->User['role'] == 'coach') echo 'selected';?>> Coach </option>
				</select>

				<input class="btn btn--add-margin btn--add" type="submit" value="Zatwierdź" />
			</form>
		</div>
	</div>
