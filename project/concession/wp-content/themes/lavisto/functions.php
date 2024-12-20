<?php
if (!defined('LAVISTO_VERSION')) {
    // Replace the version number of the theme on each release.
    define('LAVISTO_VERSION', wp_get_theme()->get('Version'));
}
define('LAVISTO_DEBUG', defined('WP_DEBUG') && WP_DEBUG === true);
define('LAVISTO_DIR', trailingslashit(get_template_directory()));
define('LAVISTO_URL', trailingslashit(get_template_directory_uri()));

if (!function_exists('lavisto_support')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since walker_fse 1.0.0
     *
     * @return void
     */
    function lavisto_support()
    {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        // Add support for block styles.
        add_theme_support('wp-block-styles');
        add_theme_support('post-thumbnails');
        // Enqueue editor styles.
        add_editor_style('style.css');
    }

endif;
add_action('after_setup_theme', 'lavisto_support');

/*----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if (!function_exists('lavisto_styles')) :
    function lavisto_styles()
    {
        // registering style for theme
        wp_enqueue_style('lavisto-style', get_stylesheet_uri(), array(), LAVISTO_VERSION);
        wp_enqueue_style('lavisto-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
        wp_enqueue_style('lavisto-aos-style', get_template_directory_uri() . '/assets/css/aos.css');
        if (is_rtl()) {
            wp_enqueue_style('lavisto-rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css');
        }
        wp_enqueue_script('jquery');
        wp_enqueue_script('lavisto-aos-scripts', get_template_directory_uri() . '/assets/js/aos.js', array(), LAVISTO_VERSION, true);
        wp_enqueue_script('lavisto-scripts', get_template_directory_uri() . '/assets/js/lavisto-scripts.js', array(), LAVISTO_VERSION, true);
    }
endif;

add_action('wp_enqueue_scripts', 'lavisto_styles');

/**
 * Enqueue scripts for admin area
 */
function lavisto_admin_style()
{
    $hello_notice_current_screen = get_current_screen();
    if (!empty($_GET['page']) && 'about-lavisto' === $_GET['page'] || $hello_notice_current_screen->id === 'themes' || $hello_notice_current_screen->id === 'dashboard') {
        wp_enqueue_style('lavisto-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', array(), LAVISTO_VERSION, 'all');
        wp_enqueue_script('lavisto-admin-scripts', get_template_directory_uri() . '/assets/js/lavisto-admin-scripts.js', array(), LAVISTO_VERSION, true);
        wp_localize_script('lavisto-admin-scripts', 'lavisto_admin_localize', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('lavisto_admin_nonce')
        ));
        wp_enqueue_script('lavisto-welcome-notice', get_template_directory_uri() . '/inc/admin/js/lavisto-welcome-notice.js', array('jquery'), LAVISTO_VERSION, true);
        wp_localize_script('lavisto-welcome-notice', 'lavisto_localize', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('lavisto_welcome_nonce'),
            'redirect_url' => admin_url('themes.php?page=_cozy_companions')
        ));
    }
}
add_action('admin_enqueue_scripts', 'lavisto_admin_style');

/**
 * Enqueue assets scripts for both backend and frontend
 */
function lavisto_block_assets()
{
    wp_enqueue_style('lavisto-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
}
add_action('enqueue_block_assets', 'lavisto_block_assets');

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

/**
 * Load welcome page file.
 */
require_once get_template_directory() . '/inc/admin/welcome-notice.php';

if (!function_exists('lavisto_excerpt_more_postfix')) {
    function lavisto_excerpt_more_postfix($more)
    {
        if (is_admin()) {
            return $more;
        }
        return '...';
    }
    add_filter('excerpt_more', 'lavisto_excerpt_more_postfix');
}
function lavisto_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'lavisto_add_woocommerce_support');
