<?php
/*
 *  Author: RPM, Eric Devlin, Rachelle White
 *  URL: burnthisplay.com
 *  Custom functions, support, custom post types and more.
 */

 /*------------------------------------*\
    Cachebuster
 \*------------------------------------*/

 // outputs the cache bust version in the enqueing files below
 // field is in WP admin Theme Options
 function getCacheBust()
 {
   $t = time();
    $cacheBustVersion = get_field('off_cache', 'option') ? $t : get_field('cache_version', 'option');
    return $cacheBustVersion;
 }

/*------------------------------------*\
    Enqueue Styles & Scripts
\*------------------------------------*/

/**
 * Proper way to enqueue scripts and styles
 */
function burnthis_enqueue_scripts()
{
    wp_register_style('normalize', get_template_directory_uri() . '/_css/normalize.css');
    wp_register_style('mailchimp', get_template_directory_uri() . '/_css/mailchimp.css', array(), getCacheBust());
    wp_register_style('burnthis', get_template_directory_uri() . '/_css/burn-this-full-site.webflow.css', array('normalize'), getCacheBust());
    wp_register_style('swiper', get_template_directory_uri() . '/_css/swiper.min.css', array('normalize'), getCacheBust());
    wp_register_style('style', get_template_directory_uri() . '/_css/style.css', array('normalize'), getCacheBust());

    wp_enqueue_style('normalize');
    wp_enqueue_style('mailchimp');
    wp_enqueue_style('swiper');
    wp_enqueue_style('burnthis');
    wp_enqueue_style('style');

    if (is_page('privacy')) {
        wp_register_style('privacy', get_template_directory_uri() . '/_css/privacy.css', array(), getCacheBust(), 'all');
        wp_enqueue_style('privacy');
    }

    wp_register_script('jquery-3.3.1', get_template_directory_uri() . '/_js/jquery-3.3.1.min.js', array(), '1.0.0', true);
    wp_register_script('jquery-ui', get_template_directory_uri() . '/_js/jquery-ui.min.js', array(), '1.0.0', true);
    // wp_register_script('mc-validate', get_template_directory_uri() . '/_js/mc-validate.js', array(), getCacheBust(), true);
    wp_register_script('swiper', get_template_directory_uri() . '/_js/swiper.min.js', array('jquery-3.3.1'), '1.0.0', true);
    wp_register_script('main', get_template_directory_uri() . '/_js/main.js', array(), getCacheBust(), true);
    wp_register_script('burnthis', get_template_directory_uri() . '/_js/burnthis.js', array(), getCacheBust(), true);

    wp_enqueue_script('jquery-3.3.1');
    wp_enqueue_script('jquery-ui');
    // wp_enqueue_script('mc-validate');
    wp_enqueue_script('swiper');
    wp_enqueue_script('main');
    wp_enqueue_script('burnthis');
}
add_action('wp_enqueue_scripts', 'burnthis_enqueue_scripts');


/*------------------------------------*\
    Helper Functions
\*------------------------------------*/

// Hide Content Editor where it's basically overridden with ACF
// https://gist.github.com/ramseyp/4060095
add_action('admin_init', 'hide_editor');
function hide_editor()
{
    // Get the Post ID.
    if (!is_admin()) {
        $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
        if (!isset($post_id)) {
            return;
        }
        // Hide the editor on a page with a specific page template
        // Get the name of the Page Template file.
        $template_file = get_post_meta($post_id, '_wp_page_template', true);
        if ($template_file == 'front-page.php' || $template_file == 'page-cast.php' || $template_file == 'page-news.php') { // the filename of the page template
            remove_post_type_support('page', 'editor');
        }
    }
}

// return bool if is mobile but NOT INCL TABLET
function my_wp_is_mobile()
{
    static $is_mobile;

    if (isset($is_mobile)) {
        return $is_mobile;
    }

    if (empty($_SERVER['HTTP_USER_AGENT'])) {
        $is_mobile = false;
    } elseif (
        strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false) {
        $is_mobile = true;
    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false && strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') == false) {
        $is_mobile = true;
    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') !== false) {
        $is_mobile = false;
    } else {
        $is_mobile = false;
    }

    return $is_mobile;
}


// Register Custom Post Type Cast
// Post Type Key: cast
function create_cast_cpt() {

	$labels = array(
		'name' => __( 'Cast', 'Post Type General Name', 'textdomain' ),
		'singular_name' => __( 'Cast', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => __( 'Cast', 'textdomain' ),
		'name_admin_bar' => __( 'Cast', 'textdomain' ),
		'archives' => __( 'Cast Archives', 'textdomain' ),
		'attributes' => __( 'Cast Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Cast:', 'textdomain' ),
		'all_items' => __( 'All Casts', 'textdomain' ),
		'add_new_item' => __( 'Add New Cast', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Cast', 'textdomain' ),
		'edit_item' => __( 'Edit Cast', 'textdomain' ),
		'update_item' => __( 'Update Cast', 'textdomain' ),
		'view_item' => __( 'View Cast', 'textdomain' ),
		'view_items' => __( 'View Casts', 'textdomain' ),
		'search_items' => __( 'Search Cast', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Cast', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Cast', 'textdomain' ),
		'items_list' => __( 'Casts list', 'textdomain' ),
		'items_list_navigation' => __( 'Casts list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Casts list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Cast', 'textdomain' ),
		'description' => __( 'The Cher Show cast and creative', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-id',
		'supports' => array('title', 'editor', 'thumbnail', 'page-attributes', 'post-formats', ),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'cast', $args );

}
add_action( 'init', 'create_cast_cpt', 0 );

// Register Custom Post Type News
// Post Type Key: News
function create_news_cpt() {

	$labels = array(
		'name' => __( 'News', 'Post Type General Name', 'textdomain' ),
		'singular_name' => __( 'News', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => __( 'News', 'textdomain' ),
		'name_admin_bar' => __( 'News', 'textdomain' ),
		'archives' => __( 'News Archives', 'textdomain' ),
		'attributes' => __( 'News Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent News:', 'textdomain' ),
		'all_items' => __( 'All News', 'textdomain' ),
		'add_new_item' => __( 'Add New News', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New News', 'textdomain' ),
		'edit_item' => __( 'Edit News', 'textdomain' ),
		'update_item' => __( 'Update News', 'textdomain' ),
		'view_item' => __( 'View News', 'textdomain' ),
		'view_items' => __( 'View News', 'textdomain' ),
		'search_items' => __( 'Search News', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into News', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this News', 'textdomain' ),
		'items_list' => __( 'News list', 'textdomain' ),
		'items_list_navigation' => __( 'News list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter News list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'News', 'textdomain' ),
		'description' => __( 'Burn This News', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-text',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', ),
    'taxonomies'  => array( 'category' ),
    'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'News', $args );

}
add_action( 'init', 'create_news_cpt', 0 );




/**
 * Make last space in a sentence a non breaking space to prevent typographic widows.
 *
 * @param type $str
 * @return string
 */
function theme_widont($str = '')
{
    // Strip spaces.
    $str = trim($str);
    // Find the last space.
    $space = strrpos($str, ' ');

    // If there's a space then replace the last on with a non breaking space.
    if (false !== $space) {
        $str = substr($str, 0, $space) . '&nbsp;' . substr($str, $space + 1);
    }
    // Return the string.
    return $str;
}

/**
 * Make last space in a sentence a non breaking space to prevent typographic widows.
 * USES ABOVE WIDONT ON EACH P TAG
 * @param type $str
 * @return string
 */
function p_widont($content)
{
    // match any p tags
    $pattern = '~<p.*?</p>~';
    return preg_replace_callback($pattern, function ($matches) {
        $widont_match = theme_widont($matches[0]);
        return $widont_match;
    }, $content);
}

//This function returns a string or an array with all occurrences of search in subject replaced with the given replace value.
function italicize_title($subject)
{
  $search = "Burn This";
  $replace = "<i>Burn This</i>";
  $fixed_title = str_replace ( $search , $replace , $subject );
  return $fixed_title;
}


/**
 * Responsive Image Helper Function
 * https://awesomeacf.com/responsive-images-wordpress-acf/
 * @param string $image_id the id of the image (from ACF or similar)
 * @param string $image_size the size of the thumbnail image or custom image size
 * @param string $max_width the max width this image will be shown to build the sizes attribute
 */

function awesome_acf_responsive_image($image_id,$image_size,$max_width){
	if($image_id != '') {
		$image_src = wp_get_attachment_image_url( $image_id, $image_size );
		$image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );
		echo 'src="'.$image_src.'" srcset="'.$image_srcset.'" sizes="(max-width: '.$max_width.') 100vw, '.$max_width.'"';
	}
}


/*------------------------------------*\
    Theme Support
\*------------------------------------*/

// function wpb_custom_new_menu() {
//   register_nav_menu('nav-menu',__( 'Nav Menu' ));
//   register_nav_menu('modal-menu',__( 'Modal Menu' ));
// }
// add_action( 'init', 'wpb_custom_new_menu' );


if (function_exists('add_theme_support')) {
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
}


if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));
}


/*------------------------------------*\
    Filters
\*------------------------------------*/

//Page Slug Body Class
function add_slug_body_class($classes)
{
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
        if (my_wp_is_mobile()) {
            array_push($classes, 'is_mobile');
        }
    }
    return $classes;
}
add_filter('body_class', 'add_slug_body_class');

// Disable WordPress' horrible automatic formatting
remove_filter('the_content', 'wpautop'); // in native wp editor
remove_filter('the_excerpt', 'wpautop'); // in native wp editor
remove_filter('acf_the_content', 'wpautop'); // in ACF wysiwyg fields




/*------------------------------------*\
    Custom Post Types
\*------------------------------------*/
