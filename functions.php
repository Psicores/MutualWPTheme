<?php
if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

	function mytheme_register_nav_menu(){
		register_nav_menus( array(
	    	'primary' => __( 'Menu Principal', 'text_domain' ),
	    	'secondary_menu' => __( 'Menu Secundario', 'text_domain' ),
            'footer_menu'  => __( 'Menu Footer', 'text_domain' ),
		) );
	}
	add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}
?>