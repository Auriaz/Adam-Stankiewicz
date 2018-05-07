<?php

class View {
	function __connstruct() {

	}



	public function Render($render_url) {
	
	
		require_once 'assets/srcPHP/View/Templates/Header.php';
		$this->error_message = "Nie pasujący Url";
 
		if(isset($render_url)) {
             
			$file_page = 'assets/srcPHP/View/Templates/'.$render_url.'.php';
           
			if(file_exists($file_page)) {

				require_once $file_page;
				
				
			}else{

			$this->error_message = "Brak pliku w Templates";
			require_once 'assets/srcPHP/View/Templates/Error/Error.php';
		
			}
		}

		
		require_once 'assets/srcPHP/View/Templates/Footer.php';
		}

		
		
	

}
