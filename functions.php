<?php
/**
 * Textrim Inspired theme setup.
 *
 * @package TextrimInspired
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme setup.
 * Theme setup for Textrim Inspired.
 */
function textrim_inspired_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support(
        'html5',
        ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']
    );

    register_nav_menus([
        'primary' => __('Primary Menu', 'textrim-inspired'),
        'footer'  => __('Footer Menu', 'textrim-inspired'),
    ]);
}
add_action('after_setup_theme', 'textrim_inspired_setup');

/**
 * Enqueue theme stylesheet.
 */
function textrim_inspired_assets(): void
{
    wp_enqueue_style(
        'textrim-inspired-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'textrim_inspired_assets');

/**
 * Register sidebar.
 */
function textrim_inspired_widgets_init(): void
{
    register_sidebar([
        'name'          => __('Sidebar', 'textrim-inspired'),
        'id'            => 'sidebar-1',
        'description'   => __('Simple sidebar for search, recent posts, and categories.', 'textrim-inspired'),
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ]);
}
add_action('widgets_init', 'textrim_inspired_widgets_init');

/**
 * Build a long text excerpt (150-200 words target).
 *
 * @param int $word_count Desired word count.
 */
function textrim_get_text_excerpt(int $word_count = 170): string
{
    $raw_excerpt = get_the_excerpt();

    if (!empty($raw_excerpt)) {
        return wp_trim_words(wp_strip_all_tags($raw_excerpt), $word_count);
    }

    $content = get_the_content('');
    $content = strip_shortcodes($content);
    $content = wp_strip_all_tags($content);

    return wp_trim_words($content, $word_count);
}

/**
 * Output basic meta description on singular pages.
 */
function textrim_inspired_meta_description(): void
{
    if (!is_singular()) {
        return;
    }

    $description = wp_strip_all_tags(get_the_excerpt());

    if (empty($description)) {
        $description = wp_strip_all_tags(get_bloginfo('description'));
    }

    if (!empty($description)) {
        echo '<meta name="description" content="' . esc_attr(wp_trim_words($description, 35, '...')) . '">' . "\n";
    }
}
add_action('wp_head', 'textrim_inspired_meta_description', 1);
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);

    register_nav_menus([
        'primary' => __('Primary Menu', 'textrim-inspired'),
    ]);
}
add_action('after_setup_theme', 'textrim_inspired_setup');
