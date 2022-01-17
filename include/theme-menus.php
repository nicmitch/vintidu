<?php
/*
  Menus
*/
add_action( 'after_setup_theme', 'register_custom_nav_menus' );
function register_custom_nav_menus() {

  register_nav_menus(array(
      'main_menu' => 'Main menu',
      'footer_menu' => 'Footer Menu'
  ));

}

function _get_main_menu(){
  wp_nav_menu(
    array(
      'theme_location' => 'main_menu',
      'menu_class' => 'menu',
      'container' => '',
      'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
    )
  );
}

function _get_footer_menu(){
  wp_nav_menu(
    array(
      'theme_location' => 'footer_menu',
      'menu_class' => 'menu',
      'items_wrap' => '<ul id="%1$s" class="menu">%3$s</ul>',
      'container' => 'ul'
    )
  );
}

////
// Pulizia Menu
////
//Deletes all CSS classes and id's, except for those listed in the array below
/*
function custom_wp_nav_menu($var) {
  return is_array($var) ? array_intersect($var, array(
    //List of allowed menu classes
    'first',
    'last',
    'megamenu',
    'current_page_item',
    'current_page_parent',
    'current_page_ancestor',
    'current-menu-ancestor',
    'is-active',
    )
  ) : '';
}
add_filter('nav_menu_css_class', 'custom_wp_nav_menu');
add_filter('nav_menu_item_id', 'custom_wp_nav_menu');
add_filter('page_css_class', 'custom_wp_nav_menu');

//Replaces "current-menu-item" (and similar classes) with "active"
function current_to_active($text){
  $replace = array(
    //List of menu item classes that should be changed to "active"
    'current_page_item' => 'is-active',
    'current_page_parent' => 'is-active',
    'current_page_ancestor' => 'is-active',
    'current-menu-ancestor' => 'is-active'
  );
  $text = str_replace(array_keys($replace), $replace, $text);
    return $text;
}
add_filter('wp_nav_menu','current_to_active');

//Deletes empty classes and removes the sub menu class
function strip_empty_classes($menu) {
  $menu = preg_replace('/ class="sub-menu"/','',$menu);
  return $menu;
}
add_filter('wp_nav_menu','strip_empty_classes');
*/
