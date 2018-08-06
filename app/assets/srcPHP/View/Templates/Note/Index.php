<div class="content content--dashboard content--add content--add-top content--transparent content__table">
	<div class='dashboard'>
		<div class="edit-user">
			<form action="<?php echo URL; ?>Note/Create" method="post" >

				<p class="box-login__text">Note</p>
				<input type="text" name="title" placeholder="Wpisz tytuł"><br/>
				<textarea name="content" style="width: 270px; height: 250px;" placeholder="Note"></textarea>
				<input class="btn btn--add-margin btn--add" type="submit" value="Dodaj" />
			</form>
		</div>

		<h2>Note</h2>
		<div>
			<table>
				<thead> 
					<tr>
					    <th scope="col">Title</th>
					    <th scope="col">Content</th>
					    <th scope="col">Data</th>
					    <th scope="col">Edit Note</th>
					    <th scope="col">Remove</th>
					</tr>
				</thead>
				<tbody>
					<?php
					//print_r($_SESSION);
						foreach ($this->noteList as $key => $value) {
							 echo'<tr>';
							 	echo '<td>'.$value[2].'</td>';
							 	echo '<td>'.$value[3].'</td>';
							 	echo '<td>'.$value[4].'</td>';
								echo '<td>
							 		 	<a href="Note/Edit/'.$value[0].'">Edit</a>
							 		 </td>
							 	     <td>
							 	     	<a class="delete" href= "Note/Delete/'.$value[0].'">Delete</a>
							 	     </td>';
						 	echo '</tr>';
						}


					?>
				</tbody>
			</table>
		</div>
	</div>