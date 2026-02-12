<?php
/**
 * Theme header.
 *
 * @package TextrimInspired
 */

if (!defined('ABSPATH')) {
    exit;
}
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="screen-reader-text skip-link" href="#content"><?php esc_html_e('Skip to content', 'textrim-inspired'); ?></a>
<header class="site-header" role="banner">
  <div class="container">
    <p class="site-title">
      <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    </p>
    <?php if (get_bloginfo('description')) : ?>
      <p class="site-tagline"><?php bloginfo('description'); ?></p>
    <?php endif; ?>

    <nav class="site-nav" aria-label="<?php esc_attr_e('Primary navigation', 'textrim-inspired'); ?>">
      <?php
      wp_nav_menu([
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'menu',
          'fallback_cb'    => false,
      ]);
      ?>
    </nav>
  </div>
</header>
<main id="content" class="site-main container">
