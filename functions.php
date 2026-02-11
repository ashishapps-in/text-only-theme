<?php
/**
 * Theme setup for Textrim Inspired.
 */
function textrim_inspired_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);

    register_nav_menus([
        'primary' => __('Primary Menu', 'textrim-inspired'),
    ]);
}
add_action('after_setup_theme', 'textrim_inspired_setup');
