<?php
/*
 *  Author: RPM, Eric Devlin
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
    wp_register_style('components', get_template_directory_uri() . '/_css/components.css');
    wp_register_style('mailchimp', get_template_directory_uri() . '/_css/mailchimp.css', array(), getCacheBust());
    wp_register_style('burnthis', get_template_directory_uri() . '/_css/burn-this-splash.css', array('normalize'), getCacheBust());
    wp_register_style('style', get_template_directory_uri() . '/_css/style.css', array('normalize'), getCacheBust());

    wp_enqueue_style('normalize');
    wp_enqueue_style('components');
    wp_enqueue_style('mailchimp');
    wp_enqueue_style('burnthis');
    wp_enqueue_style('style');

    if (is_page('privacy')) {
        wp_register_style('privacy', get_template_directory_uri() . '/_css/privacy.css', array(), getCacheBust(), 'all');
        wp_enqueue_style('privacy');
    }

    wp_register_script('jquery-3.3.1', get_template_directory_uri() . '/_js/jquery-3.3.1.min.js', array(), '1.0.0', true);
    wp_register_script('main', get_template_directory_uri() . '/_js/main.js', array(), getCacheBust(), true);

    wp_enqueue_script('jquery-3.3.1');
    wp_enqueue_script('main');
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
  $search = "Moulin Rouge! The Musical";
  $replace = "<i>Moulin Rouge! The Musical</i>";
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
