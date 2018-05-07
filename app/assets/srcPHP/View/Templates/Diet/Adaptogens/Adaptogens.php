<article>

<h3 style="text-align: center;"><?= $this ->title; ?></h3>

<?php

if(isset($_SESSION['$title'])) {
	echo Session::get('$title');
}
?>

<section>
<article></article>	
</section>
</article>