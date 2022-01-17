<?php

use Nico\Blocks;

$temp_dir = get_template_directory();

require_once $temp_dir . '/template-parts/blocks/slider-full/settings.php';

add_action('acf/init', 'nico_init_block_types');
function nico_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        //acf_register_block_type( Blocks\downloads\getSettings() );
        //acf_register_block_type( Blocks\people\getSettings() );
        acf_register_block_type( Blocks\sliderFull\getSettings() );
    }
}


// Create Options page with ACF Pro
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
    'page_title'  => 'Contenuti globali',
    'menu_title'  => 'Contenuti globali',
    'menu_slug'   => 'evo-global-content',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
}

// Utility function related to using ACF with WPML plugin installed (and multiple languages defined)
// Restituisce la lingua di default
function cl_acf_set_language() {
    return acf_get_setting('default_language');
}

// Restituisce il field in base alla lingua di default
function get_acf_global_option_default($name) {
  add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
  $option = get_field($name, 'option');
  remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
  return $option;
}


// Restituisce il field globale e in caso non esista resituisce il default
function get_acf_global_option($name){
    $return_field = get_field($name, 'option');

    if(empty($return_field)){
        if ( function_exists('icl_object_id') ) {
            $return_field = get_acf_global_option_default($name);
        }
    }

    return $return_field;
}


// Google maps API Field
function my_acf_google_map_api( $api ){
    $api['key'] = GMAP_API_KEY;
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
