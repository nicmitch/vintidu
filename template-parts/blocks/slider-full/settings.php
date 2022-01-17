<?php

namespace Nico\Blocks\sliderFull;

function getSettings(){
	
	return array(
		'name'              => 'slider-full',
		'title'             => __('Slider full'),
		'description'       => __('Slider full.'),
		'render_template'   => get_template_directory() . '/template-parts/blocks/slider-full/template.php',
		'category'          => 'formatting',
		'icon'              => 'align-pull-left',
		'keywords'          => array( 'slider full' ),
		'supports' 			=> array( 'anchor' => true )
	);
}