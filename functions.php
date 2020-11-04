<?php

add_theme_support( 'title-tag' );

function bgreen_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'bgreen-style', get_stylesheet_uri(), array(), $theme_version );
	wp_style_add_data( 'bgreen-style', 'rtl', 'replace' );
        
    // Add print CSS.
	wp_enqueue_style( 'bgreen-print-style', get_template_directory_uri() . '/print.css', null, $theme_version, 'print' );

}

add_action( 'wp_enqueue_scripts', 'bgreen_register_styles' );

// Start header-ids
// Kudos to https://marcjenkins.co.uk/adding-ids-to-the-gutenberg-heading-block/
function origin_add_id_to_heading_block( $block_content, $block ) {
	if ( 'core/heading' == $block['blockName'] ) {
		$block_content = preg_replace_callback("#<(h[1-6])>(.*?)</\\1>#", "origin_add_id_to_heading", $block_content);
	}
	return $block_content;
}

function origin_add_id_to_heading($match) {
	list(, $heading, $title) = $match;
	$id = sanitize_title_with_dashes($title);
	$anchor = '<a href="#'.$id.'" class="header-anchor" role="none">#</a>';
	return "<$heading id='$id'>$anchor $title</$heading>";
}

add_filter( 'render_block', 'origin_add_id_to_heading_block', 10, 2 );
// End header-ids

// Custom code-highlighting plugin? (<https://mkaz.blog/wordpress/code-syntax-highlighting-in-gutenberg/>)