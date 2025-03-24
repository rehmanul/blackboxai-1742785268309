<?php
/**
 * Theme functions and definitions
 */

// Enqueue scripts and styles
function rehmanul_pro_scripts() {
    // Tailwind CSS
    wp_enqueue_style('tailwindcss', 'https://cdn.tailwindcss.com', array(), null);
    
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto+Mono:wght@400;500&display=swap', array(), null);
    
    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), '6.0.0');
    
    // Theme's main stylesheet
    wp_enqueue_style('rehmanul-pro-style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'rehmanul_pro_scripts');

// Add theme support
function rehmanul_pro_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Add support for responsive embeds
    add_theme_support('responsive-embeds');

    // Add support for full and wide align images
    add_theme_support('align-wide');

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 100,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'rehmanul-pro'),
        'footer'  => __('Footer Menu', 'rehmanul-pro'),
    ));
}
add_action('after_setup_theme', 'rehmanul_pro_setup');

// Add custom classes to menu items
function rehmanul_pro_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'primary') {
        $classes[] = 'inline-block px-4 py-2 text-base font-medium text-gray-600 hover:text-blue-500 transition-colors duration-200';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'rehmanul_pro_menu_classes', 10, 3);

// Custom excerpt length
function rehmanul_pro_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'rehmanul_pro_excerpt_length');

// Custom excerpt "read more" string
function rehmanul_pro_excerpt_more($more) {
    return '... <a class="text-blue-500 hover:text-blue-600" href="' . get_permalink() . '">Read More</a>';
}
add_filter('excerpt_more', 'rehmanul_pro_excerpt_more');

// Add custom body classes
function rehmanul_pro_body_classes($classes) {
    // Add page slug if it doesn't exist
    if (is_single() || is_page() && !is_front_page()) {
        if (!in_array(basename(get_permalink()), $classes)) {
            $classes[] = basename(get_permalink());
        }
    }
    
    // Add class if is front page
    if (is_front_page()) {
        $classes[] = 'front-page';
    }
    
    return $classes;
}
add_filter('body_class', 'rehmanul_pro_body_classes');

// Disable WordPress admin bar for all users except administrators
function rehmanul_pro_remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'rehmanul_pro_remove_admin_bar');

// Add custom image sizes
add_image_size('project-thumbnail', 600, 400, true);
add_image_size('profile-photo', 300, 300, true);

// Register custom widget areas
function rehmanul_pro_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'rehmanul-pro'),
        'id'            => 'footer-widget-area',
        'description'   => __('Add widgets here to appear in your footer.', 'rehmanul-pro'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="text-lg font-semibold mb-4">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'rehmanul_pro_widgets_init');
