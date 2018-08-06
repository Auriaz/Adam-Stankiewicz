<?php
class View {
	function __connstruct() {

	}

public function Render($name) {
			require_once path_render.$name.'.php';
	}
}