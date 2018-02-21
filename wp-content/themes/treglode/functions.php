<?php
add_theme_support( 'post-thumbnails' );
//set_post_thumbnail_size( 50, 50, array( 'center', 'center')  );
add_theme_support( 'menus' );

register_nav_menus(array(
	'premier' => 'Menu principale',
	'deuxieme' => 'Petit menu optionnel',
	'troisieme' => 'Menu randonnées',
	'artistes' => 'Menu pour les artistes quand il n\'y a pas d\'événements'
));

/*********** IMAGES ************/
//add_image_size( 'events', 300, 120, array( 'left', 'top' ) );
//add_image_size( 'event', 300,120 );
//add_image_size('mobile',768);
//add_image_size('tablette',1000);
//add_image_size('vignette',225,225,array( 'center', 'center' ));
//add_image_size('logo',200);
//add_image_size('slider',1700);
//add_image_size('slider2',750,424,array( 'center', 'center' ));
//add_image_size('box',2000);
//add_image_size('box0',2000,true);
//add_image_size('box1',1200,614,false);
//add_image_size('box2',800);
//add_image_size('box3',1000);
//add_image_size('box4',1900,900,array( 'center', 'center' ));
//add_image_size('box5',1200,614,true);
add_image_size('bd1',400,204,true);
add_image_size('bd1sm',478,191,array( 'center', 'center' ));
add_image_size('bd1xs',393,212,array( 'center', 'center' ));
add_image_size('bd2',207,204,true);
add_image_size('bd3',301,204,true);
add_image_size('infoplus',139,114,true);

/************ menu boostrap **********/
class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu {

   function start_lvl(&$output, $depth = 0, $args = array()) {
      $output .= "\n<ul class=\"dropdown-menu\">\n";
   }

   function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
       $element_html = '';
       parent::start_el($element_html, $item, $depth, $args);
       if ( $item->is_dropdown && $depth === 0 ) {
           $element_html = str_replace( '<a', '<a class="dropdown-toggle" data-toggle="dropdown"', $element_html );
           $element_html = str_replace( '</a>', ' <b class="caret"></b></a>', $element_html );
       }
       $output .= $element_html;
    }

    function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) {
        if ( $element->current ) {
            $element->classes[] = 'active';
        }
        $element->is_dropdown = !empty( $children_elements[$element->ID] );
        parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }
}

/************ WIDGETS **************/
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => 'ma_sidebar',
		'before_widget' => '<div class="widget_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
	register_sidebar(array(
        'name' => 'barre_gauche_footer_artiste',
		'before_widget' => '<div class="widget_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      ));
	  register_sidebar(array(
        'name' => 'barre_droite_footer_artiste',
		'before_widget' => '<div class="widget_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      ));
	  register_sidebar(array(
        'name' => 'menu_artiste_event',
		'before_widget' => '<div class="widget_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      ));
}

/**** options ACF ****/
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Page Accueil Ferme équestre',
		'menu_title'	=> 'Theme Tréglodé',
		'menu_slug' 	=> 'treglode',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Gestion de la page d\'accueil Tréglodé',
		'menu_title'	=> 'Accueil',
		'parent_slug'	=> 'treglode',
	));
	/*acf_add_options_sub_page(array(
	'page_title' 	=> 'Theme Header Settings',
	'menu_title'	=> 'Header',
	'parent_slug'	=> 'theme-general-settings',
	));*/

}


/**************************** JS *****************************/
    add_action('init', 'gkp_insert_js_in_footer');
    function gkp_insert_js_in_footer() {
     
    // On verifie si on est pas dans l'admin
    if( !is_admin() ) :
     
        // On annule jQuery installer par WordPress (version 1.4.4
        wp_deregister_script( 'jquery' );
     
        // On declare un nouveau jQuery dernière version grace au CDN de Google
        wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js','',false,true);
        wp_enqueue_script( 'jquery' );
     
        // On insere le fichier de ses propres fonctions javascript
        wp_register_script('functions', get_bloginfo( 'template_directory' ).'/js/bootstrap.min.js','',false,true);
		wp_enqueue_script( 'functions' );
		wp_register_script('docs', get_bloginfo( 'template_directory' ).'/js/docs.min.js','',false,true);
		wp_enqueue_script( 'docs' );
		wp_register_script('collapse', get_bloginfo( 'template_directory' ).'/js/collapse.js','',false,true);
		wp_enqueue_script( 'collapse' );
		wp_register_script('carousel', get_bloginfo( 'template_directory' ).'/js/carousel.js','',false,true);
        wp_enqueue_script( 'carousel' );
		wp_register_script('tab', get_bloginfo( 'template_directory' ).'/js/tab.js','',false,true);
        wp_enqueue_script( 'tab' );
		wp_register_script('tooltip', get_bloginfo( 'template_directory' ).'/js/tooltip.js','',false,true);
        wp_enqueue_script( 'tooltip' );
     
    endif;
    }
?>