<?php
/**
 * Sidebar template.
 *
 * @package TextrimInspired
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<aside class="sidebar" aria-label="<?php esc_attr_e('Sidebar', 'textrim-inspired'); ?>">
  <?php if (is_active_sidebar('sidebar-1')) : ?>
    <?php dynamic_sidebar('sidebar-1'); ?>
  <?php else : ?>
    <section class="widget">
      <h2 class="widget-title"><?php esc_html_e('Search', 'textrim-inspired'); ?></h2>
      <?php get_search_form(); ?>
    </section>

    <section class="widget">
      <h2 class="widget-title"><?php esc_html_e('Recent Posts', 'textrim-inspired'); ?></h2>
      <ul>
        <?php wp_get_archives(['type' => 'postbypost', 'limit' => 5]); ?>
      </ul>
    </section>

    <section class="widget">
      <h2 class="widget-title"><?php esc_html_e('Categories', 'textrim-inspired'); ?></h2>
      <ul>
        <?php wp_list_categories(['title_li' => '']); ?>
      </ul>
    </section>
  <?php endif; ?>
</aside>
