<?php
/**
 * Search results template.
 *
 * @package TextrimInspired
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<header class="archive-header">
  <h1 class="archive-title">
    <?php
    printf(
        /* translators: %s search query. */
        esc_html__('Search results for: %s', 'textrim-inspired'),
        esc_html(get_search_query())
    );
    ?>
  </h1>
</header>

<?php get_template_part('template-parts/content', 'list'); ?>

<?php
get_footer();
