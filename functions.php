<?php
/*
session_start();
$_SESSION['category']='html';
*/

// $(".well-container").css({'height':($(".content").height()+'px'});

// $(".well-container").height($(".content").height());

// var highestCol = Math.max($('.well-container').height(),$('.content').height());

// $('.well-container').height(highestCol); /css/base.css


//DISPLAY NEWEST POST ON HOME FUNCTION


// if (!function_exists('get_home_post'))   {
// 	function get_home_post ( $query ) {

// 	// only interested in home page and the main query
// 	if ( !$query->is_home() || !$query->is_main_query() ) return;

// 	// default args - most recent post
// 	$args = 'posts_per_page=1&order=DESC&orderby=date&ignore_sticky_posts=true';

// 	// check for sticky posts
// 	$sticky = get_option( 'sticky_posts' );

// 	// have sticky posts so use them
// 	if ( $sticky != '' ) {
// 	$args = 'p=' . $sticky[0];
// 	}

// 	// clear the current query
// 	$query->init();

// 	// parse in the new arguments
// 	$query->parse_query( $args );

// 	}
// }
// add_action( 'pre_get_posts' , 'get_home_post' );


if (!function_exists('arphabet_widgets_init'))   {
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer content',
		'id'            => 'footer_content',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="rounded">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => 'Learn HTML',
		'id'            => 'learn_html',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 style="text-indent:15px; font-weight:700;" class="rounded">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => 'Learn CSS',
		'id'            => 'learn_css',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 style="text-indent:15px; font-weight:700;" class="rounded">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => 'Learn PHP',
		'id'            => 'learn_php',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 style="text-indent:15px; font-weight:700;" class="rounded">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => 'Learn JavaScript',
		'id'            => 'learn_js',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 style="text-indent:15px; font-weight:700;" class="rounded">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => 'Learn SQL',
		'id'            => 'learn_sql',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 style="text-indent:15px; font-weight:700;" class="rounded">',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
}

if (!function_exists('auto_version'))   {
	/**
	 *  Given a file, i.e. /css/base.css, replaces it with a string containing the
	 *  file's mtime, i.e. /css/base.1221534296.css.
	 *  
	 *  @param $file  The file to be loaded.  Must be an absolute path (i.e.
	 *                starting with slash).
	 */
	function auto_version($file)
	{
	  if(strpos($file, '/') !== 0 || !file_exists($_SERVER['DOCUMENT_ROOT'] . $file))
	    return $file;

	  $mtime = filemtime($_SERVER['DOCUMENT_ROOT'] . $file);
	  return preg_replace('{\\.([^./]+)$}', ".$mtime.\$1", $file);
	}
}

//SHORTCODES
if (!function_exists('intro_shortcode'))   {
	function intro_shortcode( $atts, $content = null ) {
		return '<div class="jumbotron introduction">' . $content . '</div>';
	}
}
add_shortcode( 'i', 'intro_shortcode' );

if (!function_exists('example_shortcode'))   {
	function example_shortcode( $atts, $content = null ) {
		return '<div class="code-example">' . $content . '</div>';
	}
}
add_shortcode( 'c', 'example_shortcode' );

if (!function_exists('codetitle_shortcode'))   {
	function codetitle_shortcode( $atts, $content = null ) {
		return '<code class="title">' . $content . '</code>';
	}
}
add_shortcode( 'ct', 'codetitle_shortcode' );

//CUSTOM MENUS
// if (!function_exists('side_menu'))   {
// 	function side_menu() {
// 	  register_nav_menu('side_menu',__( 'side_posts1' ));
// 	}
// 	add_action( 'init', 'side_menu' );
// }

// if (!function_exists('side_menu1'))   {
// 	function side_menu1() {
// 	  register_nav_menu('side_menu1',__( 'side_posts2' ));
// 	}
// 	add_action( 'init', 'side_menu1' );
// }

// if (!function_exists('side_menu2'))   {
// 	function side_menu2() {
// 	  register_nav_menu('side_menu2',__( 'side_posts3' ));
// 	}
// 	add_action( 'init', 'side_menu2' );
// }

// if (!function_exists('side_menu3'))   {
// 	function side_menu3() {
// 	  register_nav_menu('side_menu3',__( 'side_posts4' ));
// 	}
// 	add_action( 'init', 'side_menu3' );
// }

// if (!function_exists('side_menu4'))   {
// 	function side_menu4() {
// 	  register_nav_menu('side_menu4',__( 'side_posts5' ));
// 	}
// 	add_action( 'init', 'side_menu4' );
// }

// if (!function_exists('side_menu5'))   {
// 	function side_menu5() {
// 	  register_nav_menu('side_menu5',__( 'side_posts6' ));
// 	}
// 	add_action( 'init', 'side_menu5' );
// }

// if (!function_exists('side_menu6'))   {
// 	function side_menu6() {
// 	  register_nav_menu('side_menu6',__( 'side_posts7' ));
// 	}
// 	add_action( 'init', 'side_menu6' );
// }

// if (!function_exists('side_menu7'))   {
// 	function side_menu7() {
// 	  register_nav_menu('side_menu7',__( 'side_posts8' ));
// 	}
// 	add_action( 'init', 'side_menu7' );
// }

// if (!function_exists('side_menu8'))   {
// 	function side_menu8() {
// 	  register_nav_menu('side_menu8',__( 'side_posts9' ));
// 	}
// 	add_action( 'init', 'side_menu8' );
// }

// if (!function_exists('side_menu9'))   {
// 	function side_menu9() {
// 	  register_nav_menu('side_menu9',__( 'side_posts10' ));
// 	}
// 	add_action( 'init', 'side_menu9' );
// }

// if (!function_exists('side_menu10'))   {
// 	function side_menu10() {
// 	  register_nav_menu('side_menu10',__( 'side_posts11' ));
// 	}
// 	add_action( 'init', 'side_menu10' );
// }

// if (!function_exists('side_menu11'))   {
// 	function side_menu11() {
// 	  register_nav_menu('side_menu11',__( 'side_posts12' ));
// 	}
// 	add_action( 'init', 'side_menu11' );
// }
// if (!function_exists('side_menu12'))   {
// 	function side_menu12() {
// 	  register_nav_menu('side_menu12',__( 'side_posts13' ));
// 	}
// 	add_action( 'init', 'side_menu12' );
// }

if (!function_exists('html_menu'))   {
	function html_menu() {
	  register_nav_menu('html_menu',__( 'html_posts' ));
	}
	add_action( 'init', 'html_menu' );
}

if (!function_exists('css_menu'))   {
	function css_menu() {
	  register_nav_menu('css_menu',__( 'css_posts' ));
	}
	add_action( 'init', 'css_menu' );
}

if (!function_exists('js_menu'))   {
	function js_menu() {
	  register_nav_menu('js_menu',__( 'js_posts' ));
	}
	add_action( 'init', 'js_menu' );
}

if (!function_exists('php_menu'))   {
	function php_menu() {
	  register_nav_menu('php_menu',__( 'php_posts' ));
	}
	add_action( 'init', 'php_menu' );
}


//SEARCH FORM

if (!function_exists('learnsearchform'))   {
	function learnsearchform( $form ) {

	    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
	    <div class="form-group"><label class="screen-reader-text" for="s">' . __('Search for:') . '</label>
	    <input type="text" value="' . get_search_query() . '" name="s" id="s" class="form-control" />
	    <input type="submit" id="searchsubmit" class="btn btn-default" value="'. esc_attr__('Search') .'" />
	    </div>
	    </form>';

	    return $form;
	}

	add_shortcode('learn_search', 'learnsearchform');
}


?>