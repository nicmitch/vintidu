<?php

add_action( 'widgets_init', 'nic_sidebars' );
function nic_sidebars() {
    
    register_sidebar(
        array(
            'id'            => 'footer-sidebar',
            'name'          => __( 'Footer sidebar' ),
            'before_widget' => '<div id="%1$s" class="column small-6 medium-shrink">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="h4">',
            'after_title'   => '</h3>',
        )
    );
    
    register_sidebar(
        array(
            'id'            => 'media-relation-sidebar',
            'name'          => __( 'Media relation Sidebar' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<strong class="widget__title">',
            'after_title'   => '</strong>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'legal-sidebar',
            'name'          => __( 'Legal Sidebar' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<strong class="widget__title">',
            'after_title'   => '</strong>',
        )
    );

}