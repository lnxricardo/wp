<?php 

function rp_theme_styles(){
	wp_enqueue_style('theme_css', get_template_directory_uri().'/assets/css/theme.css');
	wp_enqueue_script('theme_js', get_template_directory_uri().'/assets/js/script.js', array('jquery'), '', true);
}

function rp_after_setup(){
	//add_theme_support('menus'); 
	add_theme_support( 'post_thumbnails' );
	
	register_nav_menu( 'primary', __( 'Primary Menu', 'primeirotema' ) );
	//register_nav_menu('footer', 'Menu Rodapé');
	// register_nav_menu('aside', 'Aside menu');
}

function rp_widgets(){
	register_sidebar(array(
		'name' => __('Meu primeiro sidebar', 'primeirotema'),
		'id' => 'rp_sidebar',
		'description' => __('sidebar para o tema', 'primerotema'),
		'before_title' => '<h4 class="widget_title">',
		'after_title' => '</h4>',
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>'
	));
}
	
