<?php 

function register_enqueue_style(){
$theme_data = wp_get_theme();

wp_register_style('index.css', 'https://fonts.googleapis.com/css?family=Merriweather:300,400|Montserrat:400,700');

wp_register_style('bootstrap-grid.css', get_theme_file_uri('css/bootstrap-grid.css'), null, $theme_data->get('Version'), 'screen');
wp_register_style('bootstrap-grid.min.css', get_theme_file_uri('css/bootstrap-grid.min.css'), null, $theme_data->get('Version'), 'screen');
wp_register_style('bootstrap-grid.min.css.map', get_theme_file_uri('css/bootstrap-grid.min.css.map'), null, $theme_data->get('Version'), 'screen');
wp_register_style('bootstrap-reboot.css', get_theme_file_uri('css/bootstrap-reboot.css'), null, $theme_data->get('Version'), 'screen');
wp_register_style('bootstrap-reboot.css.map', get_theme_file_uri('css/bootstrap-reboot.css.map'), null, $theme_data->get('Version'), 'screen');
wp_register_style('bootstrap-reboot.min.css', get_theme_file_uri('css/bootstrap-reboot.min.css'), null, $theme_data->get('Version'), 'screen');
wp_register_style('bootstrap-reboot.min.css.map', get_theme_file_uri('css/bootstrap-reboot.min.css.map'), null, $theme_data->get('Version'), 'screen');
wp_register_style('bootstrap.css', get_theme_file_uri('css/bootstrap.css'), null, $theme_data->get('Version'), 'screen');
wp_register_style('bootstrap.css.map', get_theme_file_uri('css/bootstrap.css.map'), null, $theme_data->get('Version'), 'screen');
wp_register_style('bootstrap.min.css', get_theme_file_uri('css/bootstrap.min.css'), null, $theme_data->get('Version'), 'screen');
wp_register_style('bootstrap.min.css.map', get_theme_file_uri('css/bootstrap.min.css.map'), null, $theme_data->get('Version'), 'screen');


wp_enqueue_style('index.css');
wp_enqueue_style('bootstrap-grid.css');
wp_enqueue_style('bootstrap-grid.min.css');
 wp_enqueue_style('bootstrap-grid.min.css.map');
 wp_enqueue_style('bootstrap-reboot.css');
 wp_enqueue_style('bootstrap-reboot.css.map');
 wp_enqueue_style('bootstrap-reboot.min.css');
 wp_enqueue_style('bootstrap-reboot.min.css.map');
wp_enqueue_style('bootstrap.css');
wp_enqueue_style('bootstrap.css.map');
wp_enqueue_style('bootstrap.min.css');
wp_enqueue_style('bootstrap.min.css.map');
}
add_action('wp_enqueue_scripts', 'register_enqueue_style');



function register_enqueue_scripts(){
$theme_data = wp_get_theme();


wp_deregister_script('jquery3');
wp_deregister_script('jquery');
														

wp_register_script('jQuery3', get_parent_theme_file_uri('js/jQuery.js'), array ('jQuery_migrate'), null, true);
wp_register_script('Jquery.min.js', get_parent_theme_file_uri('js/jquery.min.js'), array ('jQuery_migrate'), null, true);
wp_register_script('Jquery.min.map', get_parent_theme_file_uri('js/jquery.min.map'), array ('jQuery_migrate'), null, true);
wp_register_script('Jquery.slim.js', get_parent_theme_file_uri('js/jquery.slim.js'), array ('jQuery_migrate'), null, true);
wp_register_script('Jquery.slim.min.js', get_parent_theme_file_uri('js/jquery.slim.min.js'), array ('jQuery_migrate'), null, true);
wp_register_script('Jquery.slim.min.map', get_parent_theme_file_uri('js/jquery.slim.min.map'), array ('jQuery_migrate'), null, true);
wp_register_script('Script.js', get_parent_theme_file_uri('js/script.js'), array ('jQuery_migrate'), null, true);

wp_enqueue_script('jQuery3');
wp_enqueue_script('Jquery.min.js');
wp_enqueue_script('Jquery.min.map');
wp_enqueue_script('Jquery.slim.js');
wp_enqueue_script('Jquery.slim.min.js');
wp_enqueue_script('Jquery.slim.min.map');
wp_enqueue_script('Script.js');


}
add_action('wp_enqueue_scripts', 'register_enqueue_scripts');

//logo personalizable

  function config_custom_logo() {
    add_theme_support( 'custom-logo', array(
      'height'      => 100,
      'width'       => 400,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'site-title', 'site-description' ),
    ));
  }
  add_action( 'after_setup_theme', 'config_custom_logo' );

  //tamaño de imagenes
   function thumbnails_setup() {
    add_theme_support( 'post-thumbnails' );
  }
  function dl_image_sizes( $sizes ) {
    $add_sizes = array(
      'carousel'		=> __( 'Tamaño de las imágenes del portafolio en el home' ),
      'flip'				=> __( 'Tamaño personalizado para hacer cuadradas las imágenes' ),
      'post-custom-size'	=> __( 'Tamaño personalizado para la imagen destada de los post' ),
      'custom-size-blog'	=> __( 'Tamaño personalizado para la imagen destada de los post' )
    );
    return array_merge( $sizes, $add_sizes );
  }
  if ( function_exists( 'add_theme_support' ) ) {
    add_image_size( 'carousel', 465, 250, true );
    add_image_size( 'flip', 120, 120, true );
    add_image_size( 'post-custom-size', 800, 600, true );
    add_image_size( 'custom-size-blog', 400, 300, true );
    add_filter( 'image_size_names_choose', 'dl_image_sizes' );
  }
  add_action( 'after_setup_theme', 'thumbnails_setup' );

  function menus_setup() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
    )
  );
}
add_action( 'after_setup_theme', 'menus_setup' );
 // Register Custom Post Type
function restaurant_post_type() {

  $labels = array(
    'name'                  => _x( 'restaurantes', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'restaurante', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Post Types', 'text_domain' ),
    'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
    'archives'              => __( 'Item Archives', 'text_domain' ),
    'attributes'            => __( 'Item Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    'all_items'             => __( 'All Items', 'text_domain' ),
    'add_new_item'          => __( 'Add New Item', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Item', 'text_domain' ),
    'edit_item'             => __( 'Edit Item', 'text_domain' ),
    'update_item'           => __( 'Update Item', 'text_domain' ),
    'view_item'             => __( 'View Item', 'text_domain' ),
    'view_items'            => __( 'View Items', 'text_domain' ),
    'search_items'          => __( 'Search Item', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'Items list', 'text_domain' ),
    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'restaurante', 'text_domain' ),
    'description'           => __( 'personalización del restaurante', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'            => array( 'category', 'post_tag' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-admin-page',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'restaurante', $args );

}
add_action( 'init', 'restaurant_post_type', 0 );

function dl_widgets() {
    register_sidebar( array(
      'name' => 'Widget Footer',
      'id' => 'widget_footer'
    ));
  }
  add_action('widgets_init', 'dl_widgets');

if ( function_exists( 'register_nav_menus')) {
	register_nav_menus( array ( 'superior' => 'Menú principal superior'));
}

if ( function_exists('add_theme_support')){
	add_theme_support( 'post-thumbnails');
}
	Remove_action ("shutdown", "wp_ob_end_flush_all",1);
?>
