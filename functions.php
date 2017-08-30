<?php


function appstat_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'appstat', get_template_directory_uri() . '/appstat.js', array('jquery'), '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'appstat_scripts' );

function appstat_google_fonts() {
				wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
				wp_enqueue_style( 'OpenSans');
    
                wp_register_style('Pacifico', 'https://fonts.googleapis.com/css?family=Pacifico');
				wp_enqueue_style( 'Pacifico');
                
                wp_register_style('Permanent Marker', 'https://fonts.googleapis.com/css?family=Permanent+Marker');
				wp_enqueue_style( 'Permanent Marker');
    
		}

add_action('wp_print_styles', 'appstat_google_fonts');

function create_my_custom_post() {
	register_post_type('my-custom-post',
			array(
			'labels' => array(
					'name' => __('My Custom Post'),
					'singular_name' => __('My Custom Post'),
			),
			'public' => true,
			'has_archive' => true,
            'taxonomies' => array('category'),
			'supports' => array(
					'title',
					'editor',
					'thumbnail',
				  'custom-fields'
			)
	));
}
add_action('init', 'create_my_custom_post');


add_filter('comment_post_redirect', 'redirect_after_comment');
function redirect_after_comment($location)
{
return $_SERVER["HTTP_REFERER"];
}


