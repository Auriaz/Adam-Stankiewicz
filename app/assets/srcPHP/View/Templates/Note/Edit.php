<div class="content content--dashboard content--add content--add-top content--transparent">
	<div class='dashboard'>
		<h1>Note: Edit</h1>
		<div class="edit-user">
			<form method="post" action="<?php echo URL;?>Note/editSave/<?php echo $this->Note['id_note']; ?>">

				<p class="box-login__text">Tytuł</p>
				<input type="text" name="title" value="<?php echo $this->Note['title']; ?>" >

				<p class="box-login__text">Text</p>
				<textarea name="content" style="width: 270px; height: 250px;"><?php echo $this->Note['content']; ?></textarea>

				<input class="btn btn--add-margin btn--add" type="submit" value="Zatwierdź" />
			</form>
		</div>
	</div>