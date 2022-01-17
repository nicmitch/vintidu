<?php

function load_all_items_by_ajax_callback() {

  // get the post
  $items = get_posts( array(
    'posts_per_page' => -1,
    'post_type' => 'progetti',
    'offset' => $postOffset,
    'orderby' => 'title',
    'order' => 'ASC',
    'tax_query' => array(
      array(
        'taxonomy' => 'tipologia_progetto',
        'field' => 'term_id', 
        'terms' => array(19)
      )
    )
  ));

  if($items){
    
    foreach($items as $item){
      $pos = get_field('position', $item);
      $link = get_the_permalink( $item );
      $item->position = $pos;
      
      $item->link = $link;
      $item->link_html = "<a href=\"" . $link . "\">" . __( 'Asset details >', 'Nhood' ) . "</a>";

      $thumbnail = get_the_post_thumbnail($item, 'medium-1');
      $img = $thumbnail ? $thumbnail : "<img src=\"https://via.placeholder.com/600x450\" width=\"600\" height=\"450\" />";

      $item->img = $img;
      $item->thumb = get_the_post_thumbnail( $item, 'thumbnail');
    }
    
  }

  echo json_encode( array( 'items' => $items ) );

  die();

}
add_action( 'wp_ajax_load_all_items_by_ajax', 'load_all_items_by_ajax_callback' );
add_action( 'wp_ajax_nopriv_load_all_items_by_ajax', 'load_all_items_by_ajax_callback' );
