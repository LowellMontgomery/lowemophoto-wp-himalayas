<?php
function himalayas_child_enqueue_styles() {

  $parent_style = 'himalayas-style';

  wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array( $parent_style ),
    wp_get_theme()->get('Version')
  );
}
add_action( 'wp_enqueue_scripts', 'himalayas_child_enqueue_styles' );

function himalayas_child_dequeue_unnecessary_scripts() {
  wp_dequeue_script( 'himalayas-featured-image-popup' );
}
add_action( 'wp_print_scripts', 'himalayas_child_dequeue_unnecessary_scripts', 100 );

/**
 * Function to show the footer info, copyright information
 */
add_action( 'himalayas_footer_copyright', 'himalayas_footer_copyright', 10 );
function himalayas_footer_copyright() {
	$site_name = get_bloginfo( 'name', 'display' );

	$wp_link = '&nbsp; | &nbsp;Powered by <a href="http://wordpress.org" target="_blank" title="Learn more about WordPress">Wordpress</a>';

	$theme_link =  '&nbsp; | &nbsp;Theme: Himalayas variant by <a href="https://github.com/LowellMontgomery/lowemophoto-wp-himalayas" target="_blank" title="Himalayas Child theme by Lowell Montgomery" rel="designer">Lowell Montgomery</a>';

	$default_footer_value = '<span class="copyright-text">Copyright &copy; ' . date('Y') . ' ' . $site_name . $theme_link . $wp_link . '</span>';

	$himalayas_footer_copyright = '<div class="copyright">' . $default_footer_value . '</div>';
	echo $himalayas_footer_copyright;
}
