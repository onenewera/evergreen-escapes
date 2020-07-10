<?php

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Stylesheets
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

function load_stylesheets() {

    // Bootstrap Styles
    wp_register_style('stylesheet', get_template_directory_uri() . '/bootstrap.css', array(), false, 'all');
    wp_enqueue_style('stylesheet');

    // Custom Styles
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');



//////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Javscript
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

function load_js() 
{
    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, false);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'load_js');

function include_gsap() {

	wp_deregister_script('gsap');
	wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js', array(), null, false);

}
add_action('wp_enqueue_scripts', 'include_gsap');

function include_scrollmagic() {

	wp_deregister_script('scrollmagic');
	wp_enqueue_script('scrollmagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/jquery.ScrollMagic.min.js', array(), null, false);

}
add_action('wp_enqueue_scripts', 'include_scrollmagic');

function include_scrollmagicGSAP() {

	wp_deregister_script('scrollmagicGSAP');
	wp_enqueue_script('scrollmagicGSAP', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js', array(), null, false);

}
add_action('wp_enqueue_scripts', 'include_scrollmagicGSAP');

// function include_custom_jquery() {

// 	wp_deregister_script('jquery');
// 	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, false);

// }
// add_action('wp_enqueue_scripts', 'include_custom_jquery');


// function include_scrollie() {

// 	wp_deregister_script('scrollie');
// 	wp_enqueue_script('scrollie', '/js/scrollie.min.js', array(), null, false);

// }
// add_action('wp_enqueue_scripts', 'include_scrollie');



//////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Remove Admin Top Margin
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');


//////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Menus
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

// add_theme_support(menus);

// register_nav_menus(

//     array(



//     )
// )

// function move_admin_bar() {
//     echo '
//         <style type="text/css">
//             body {margin-top: -28px;padding-bottom: 28px;}
//             body.admin-bar #wphead {padding-top: 0;}
//             body.admin-bar #footer {padding-bottom: 28px;}
//             #wpadminbar { top: auto !important;bottom: 0;}
//             #wpadminbar .quicklinks .menupop ul { bottom: 100%;}
//         </style>';
//     }
// add_action( 'wp_head', 'move_admin_bar' );