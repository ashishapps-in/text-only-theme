<?php
/**
 * Theme footer.
 *
 * @package TextrimInspired
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
</main>
<footer class="site-footer" role="contentinfo">
  <div class="container footer-inner">
    <p>
      &copy; <?php echo esc_html(gmdate('Y')); ?> <?php bloginfo('name'); ?>.
      <?php esc_html_e('All rights reserved.', 'textrim-inspired'); ?>
    </p>

    <nav aria-label="<?php esc_attr_e('Footer navigation', 'textrim-inspired'); ?>">
      <?php
      wp_nav_menu([
          'theme_location' => 'footer',
          'container'      => false,
          'menu_class'     => 'footer-menu',
          'fallback_cb'    => false,
      ]);
      ?>
    </nav>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
