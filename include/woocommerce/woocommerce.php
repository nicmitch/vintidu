<?php

function nik_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'nik_add_woocommerce_support' );

/**
 * Set WooCommerce image dimensions upon theme activation
*/
// Remove each style one by one
function jk_dequeue_styles( $enqueue_styles ) {
	unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
	//unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}
//add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );

function disable_woocommerce_block_editor_styles() {
  wp_deregister_style( 'wc-block-editor' );
  wp_deregister_style( 'wc-block-style' );
}
//add_action( 'enqueue_block_assets', 'disable_woocommerce_block_editor_styles', 1, 1 );