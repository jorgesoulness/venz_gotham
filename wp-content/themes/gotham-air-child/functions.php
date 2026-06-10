<?php
function gotham_air_child_setup() {
  //Lenguajes
  load_child_theme_textdomain( 'gotham-air-child', get_stylesheet_directory() . '/languages/' );
  //Corte de imágenes
  add_theme_support( 'post-thumbnails' );
  if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'homepage-twitter', 280, 150, true );
    add_image_size( 'homepage-facebook', 470, 246, true );
    add_image_size( 'img-slider', 1440, 600, false );
  }
  //Registro de Menús
  register_nav_menus( array(
      'menu-main' => esc_html__( 'Menu Main', 'gotham-air-child' ),
      'menu-footer' => esc_html__( 'Menu Footer', 'gotham-air-child' ),
  ) );
  //Función para cargar logo
  add_theme_support( 'custom-logo', array(
    'flex-width' => true,
    'flex-height' => true,
  ) );
  //función para activar extensiones extras al WP
  function bp_mime_type ( $mime_types ) {
    $mime_types['svg'] = 'image/svg+xml';
    return $mime_types;
  }   
   add_filter('upload_mimes', 'bp_mime_type', 1, 1);
}
add_action( 'after_setup_theme', 'gotham_air_child_setup' );
//Se agregan recursos CSS & JS del tema hijo.
function gotham_air_child_head() {
  $versionFiles = '1.0.7';
  wp_enqueue_style( 'google-gotham-air-fonts', 'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Raleway:wght@100..900&display=swap', array(), null );
  // CSS
  wp_enqueue_style('bootstrap.min',  get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), $versionFiles);
  // wp_enqueue_style('app.min',  get_stylesheet_directory_uri() . '/assets/css/app.min.css', array(), $versionFiles);
  wp_enqueue_style('fontawesome.min',  get_stylesheet_directory_uri() . '/assets/css/fontawesome.min.css', array(), $versionFiles);
  wp_enqueue_style('layerslider.min',  get_stylesheet_directory_uri() . '/assets/css/layerslider.min.css', array(), $versionFiles);
  wp_enqueue_style('magnific.min',  get_stylesheet_directory_uri() . '/assets/css/magnific-popup.min.css', array(), $versionFiles);
  wp_enqueue_style('slick.min',  get_stylesheet_directory_uri() . '/assets/css/slick.min.css', array(), $versionFiles);
  wp_enqueue_style('eocjs.min',  get_stylesheet_directory_uri() . '/assets/css/eocjs-newsticker.css', array(), $versionFiles);
  wp_enqueue_style('style.min',  get_stylesheet_directory_uri() . '/assets/css/style.css', array(), $versionFiles);
  // jQuery
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', get_stylesheet_directory_uri() . '/assets/js/vendor/jquery-3.6.0.min.js' );
  wp_enqueue_script('jquery');
  // AJAX
  // wp_register_script('script_handle', get_stylesheet_directory_uri().'/assets/js/scripts/ajaxScriptPost.min.js', array('jquery'), $versionFiles, true);
  // wp_localize_script('script_handle', 'ajx_objt', array('ajax_url'=>admin_url('admin-ajax.php')));
  // wp_enqueue_script('script_handle');
  //Scrips
  wp_enqueue_script( 'slick.minjs', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', array(), $versionFiles, true);
  // wp_enqueue_script( 'appjs', get_stylesheet_directory_uri() . '/assets/js/app.min.js', array(), $versionFiles, true);
  wp_enqueue_script( 'layerslider.utils', get_stylesheet_directory_uri() . '/assets/js/layerslider.utils.js', array(), $versionFiles, true);
  wp_enqueue_script( 'layerslider.transitions', get_stylesheet_directory_uri() . '/assets/js/layerslider.transitions.js', array(), $versionFiles, true);
  wp_enqueue_script( 'layerslider.kreaturamedia.jquery', get_stylesheet_directory_uri() . '/assets/js/layerslider.kreaturamedia.jquery.js', array(), $versionFiles, true);
  wp_enqueue_script( 'bootstrap.minjs', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array(), $versionFiles, true);
  wp_enqueue_script( 'magnific-popup', get_stylesheet_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), $versionFiles, true);
  wp_enqueue_script( 'eocjs-newsticker', get_stylesheet_directory_uri() . '/assets/js/eocjs-newsticker.js', array(), $versionFiles, true);
  wp_enqueue_script( 'imagesloaded', get_stylesheet_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array(), $versionFiles, true);
  wp_enqueue_script( 'isotope', get_stylesheet_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(), $versionFiles, true);
  wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), $versionFiles, true);
}
add_action( 'wp_enqueue_scripts', 'gotham_air_child_head' );

add_filter( 'pre_option_link_manager_enabled', '__return_true' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

add_action('after_setup_theme', 'remove_admin_bar');
 
function remove_admin_bar() {
  if (!current_user_can('editor')) {
    show_admin_bar(false);
  }
}

/**
 * Menu Walker
 */
// require get_stylesheet_directory() . '/inc/class-menu-walker.php';

/**
 * Customizer additions.
 */
// require get_stylesheet_directory() . '/inc/customizer.php';

/**
 * Elementor additions.
 */
// require get_stylesheet_directory() . '/inc/elementor/elementor-functions.php';

/**
 * Footer additions.
 */
// require get_stylesheet_directory() . '/inc/footer-customizer.php';

/**
 * Post ajax
 */
// require get_stylesheet_directory() . '/inc/post-ajax.php';

/**
 * Mailings
 */
// require get_stylesheet_directory() . '/inc/mail-contact.php';

// function incrementor() {
//   static $i = 0;
//   $incrementoBox = $i ++;
//   if( $incrementoBox % 2 ) {
//     return 'order-md-1';
//   }
// }
// add_shortcode('incrementor', 'incrementor');

// Shortcode Super indices [superIndice id="aqui_el_numero_del_super_indice"]
// function super_indice_shortcode($atts) {
//   extract(shortcode_atts( array(
//     'id' => ''
//   ), $atts ));
//   $linkWeb = get_site_url();
//   $divSuper = '<a class="linkRef" href="'.$linkWeb.'/referencias/#'.$id.'" target="_blank">('.$id.')</a>';
//   return $divSuper;
// }
// add_shortcode( 'superIndice', 'super_indice_shortcode' );

// add_filter( 'wpcf7_autop_or_not', '__return_false' );