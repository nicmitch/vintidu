<?php


function language_selector_fn($atts = array()){

  return language_selector($atts);

}
add_shortcode('language_selector', 'language_selector_fn');

/*
    Socials shortcode: print twig template
*/
function socials_shortcode($atts = null){

  $socials = array(
    array('fb', 'https://www.facebook.com/'),
    array('ig', 'https://www.instagram.com/'),
    array('sf', 'https://open.spotify.com/'),
  );

  $url = get_template_directory() . '/template-parts/icons/icon-';
  
  $output = "";
  $output .= "<ul class=\"menu horizontal\">";
    foreach($socials as $social){

      $icon = asset_path('images/icon-'.$social[0].'.svg');

      $output .= "<li><a href=\"{$social[1]}\" target=\"_blank\" rel=\"noopener\"><img src=\"{$icon}\" width=\"22\" height=\"22\" alt=\"{$social[0]} social icon\"></a></li>";
    }
  $output .= "</ul>";

  echo $output;

}
add_shortcode('socials', 'socials_shortcode');