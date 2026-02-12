<?php
/**
 * Template Name: Textrim Inspired Text-Only Layout
 * Description: Optional page template that shows recent posts in the text-only layout.
 *
 * @package TextrimInspired
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$query = new WP_Query([
    'post_type'           => 'post',
    'post_status'         => 'publish',
    'posts_per_page'      => get_option('posts_per_page'),
    'ignore_sticky_posts' => true,
]);

if ($query->have_posts()) {
    $wp_query_backup = $wp_query;
    $wp_query        = $query;
    get_template_part('template-parts/content', 'list');
    $wp_query = $wp_query_backup;
    wp_reset_postdata();
}

get_footer();
