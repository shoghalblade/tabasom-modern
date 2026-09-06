<?php
/**
 * Theme Name: Tabasom Clinic
 * Description: قالب کلینیک دندانپزشکی طبسم — سازگار با المنتور
 * Version: 5.6
 * Text Domain: tabasom-clinic
 */

function tabasom_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('header-footer-classic');
    register_nav_menus(array('primary' => 'منوی اصلی'));
}
add_action('after_setup_theme', 'tabasom_setup');

require_once get_template_directory() . '/inc-nav.php';

function tabasom_assets() {
    wp_enqueue_style('vazirmatn', 'https://fonts.googleapis.com/css2?family=Vazirmatn:wght@200;300;400;500;600;700;800;900&display=swap', array(), null);
    wp_enqueue_style('dmsans', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap', array(), null);
    wp_enqueue_style('tabasom-style', get_stylesheet_uri(), array('vazirmatn'), '5.6');
    if (is_front_page()) {
        wp_enqueue_script('tabasom-front', get_template_directory_uri() . '/front.js', array(), '5.6', true);
    }
}
add_action('wp_enqueue_scripts', 'tabasom_assets');

/* صفحهٔ اول: قالب کامل لندینگ (قابل ویرایش با المنتور) */
function tabasom_front_template($template) {
    if (is_front_page()) {
        $alt = locate_template('front.php');
        if ($alt) return $alt;
    }
    return $template;
}
add_filter('template_include', 'tabasom_front_template');

/* طول تکهٔ متن (excerpt) */
add_filter('excerpt_length', fn() => 24);
add_filter('excerpt_more', fn() => '…');

/* Elementor support */
function tabasom_elementor_support() {
    add_theme_support('header-footer-classic');
}
add_action('after_setup_theme', 'tabasom_elementor_support');

/* Elementor — disable default colors so theme palette is used */
function tabasom_elementor_settings() {
    if (did_action('elementor/loaded')) {
        $manager = \Elementor\Plugin::instance()->experiments;
    }
}
add_action('init', 'tabasom_elementor_settings');

/* Elementor categories */
function tabasom_elementor_categories($categories_manager) {
    $categories = array(
        'tabasom' => array(
            'title' => 'طبسم',
            'icon' => 'eicon-single-post',
        ),
    );
    $categories_manager->add_categories($categories);
}
add_action('elementor/elements/categories_registered', 'tabasom_elementor_categories');
