<?php

register_block_style(            
  'core/button',
   array(                
     'name'  => 'button--play',                
     'label' => __( 'Play button', 'Nico' ),            
  )       
  //data-fslightbox 
);

//add_theme_support( 'disable-custom-gradients' );
//add_theme_support( 'editor-gradient-presets', array() );

// Aggiungo l'attributo per il lightbox al link e home cover
function nic_output_button_block($block_content, $block){
  
	if ( $block['blockName'] === 'core/button' ){
		$attrs = $block['attrs'];
    
		if( $attrs['className'] == 'is-style-button--play' )
			$block_content = str_replace("<a ", "<a data-fslightbox ", $block_content);
	}else
  if($block['blockName'] === 'core/cover'){

      if(is_front_page()){
			  $block_content .= '<div class="wp-block-cover-line"><div class="wp-block-cover-line__inner"></div></div>';
      }

  }

	return $block_content;
}

add_filter( 'render_block', 'nic_output_button_block', 10, 2);