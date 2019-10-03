<!DOCTYPE html>
<html>
	<head>
		<?php wp_head(); ?>
		<title></title>
	</head>
	<body>
		<h1>Meu primeiro tema</h1>

		<?php 
			if( has_nav_menu('primary')){ //show menu;
				wp_nav_menu(array(

					'theme_location' => 'primary', //Here is a location of menu;
					'container' => 'nav', //here is a semantic tag of HTML;
					'container_class' => 'main_menu',
					'fallback_cb' => false //if set up true thi's will generate a pattern menu;

				));
			}

		 ?>


		<?php wp_footer(); ?>

	</body>
</html>


