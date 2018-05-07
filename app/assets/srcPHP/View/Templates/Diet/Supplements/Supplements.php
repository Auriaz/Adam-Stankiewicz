<article>

<h3 style="text-align: center;"><?= $this ->title; ?></h3>

<?php

if(isset($_SESSION['$art'])) {
	echo Session::get('$art');
}
?>

<section>
<article></article>	
</section>
</article>