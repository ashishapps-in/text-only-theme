<?php
/**
 * Archive template.
 *
 * @package TextrimInspired
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<header class="archive-header">
  <h1 class="archive-title"><?php the_archive_title(); ?></h1>
  <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
</header>

<?php get_template_part('template-parts/content', 'list'); ?>

<?php
get_footer();
