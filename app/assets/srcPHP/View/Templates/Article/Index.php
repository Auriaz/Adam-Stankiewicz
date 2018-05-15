<div id="content">
  
  <h1>Dodaj artykuł</h1>

  <form  id="get-data-form" method="post" action="Article/addArt">
  	<input type="text" placeholder="Tytuł artykułu" name="title">
  	<br/><br/>

    <label for="section">Section</label>
	<select id="section" name="section">
	  <option value="Metabolic">Metabolic</option>
	  <option value="Strength">Strength</option>
	  <option value="Mobility">Mobility</option>
	  <option value="Diet">Diet</option>
	  <option value="Workout">Workout</option>
	</select>
	<br/><br/>

    <label for="category">Category</label>
	<select id="category" name="category">
	  <option value="Adaptogens">Adaptogens</option>
	  <option value="Nutrition">Nutrition</option>
	  <option value="Supplements">Supplements</option>
	</select>
	<br/><br/>

    <textarea class="tinymce" id="texteditor" name="editor" >Dodaj treść artykułu</textarea>  


    <input type="submit" value="Get Data">
  </form>
  
	
	</div>