<?php // Opening PHP tag - nothing should be before this, not even whitespace

// add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
// function theme_enqueue_styles() {
//     wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );



// code is adapted from https://wordpress.org/support/topic/enqueue-a-new-google-font-twentytwelve
function load_google_fonts() {

wp_register_style('googleFontsSpecialElite','http://fonts.googleapis.com/css?family=Special+Elite');
            wp_enqueue_style('googleFontsSpecialElite'); 
		
wp_register_style('googleFontsVarela','http://fonts.googleapis.com/css?family=Varela');
            wp_enqueue_style('googleFontsVarela'); 
            
wp_register_style('googleFontsRobotoSlab','http://fonts.googleapis.com/css?family=Roboto+Slab:400,700');
            wp_enqueue_style('googleFontsRobotoSlab');
            
wp_register_style('googleFontsWorkSans','http://fonts.googleapis.com/css?family=Work+Sans:400,300,600');
            wp_enqueue_style('googleFontsWorkSans');
            
wp_register_style('googleFontsPoppins','http://fonts.googleapis.com/css?family=Poppins:400,300,600');
            wp_enqueue_style('googleFontsPoppins');
            

}
add_action('wp_print_styles', 'load_google_fonts');



?>