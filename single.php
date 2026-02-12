<?php
/**
 * Single post template.
 *
 * @package TextrimInspired
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class('single-post'); ?> itemscope itemtype="https://schema.org/Article">
      <header class="single-header">
        <h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1>
        <p class="entry-meta">
          <time datetime="<?php echo esc_attr(get_the_date('c')); ?>" itemprop="datePublished"><?php echo esc_html(get_the_date()); ?></time>
          <span aria-hidden="true"> · </span>
          <span itemprop="author" itemscope itemtype="https://schema.org/Person"><span itemprop="name"><?php echo esc_html(get_the_author()); ?></span></span>
          <span aria-hidden="true"> · </span>
          <span><?php the_category(', '); ?></span>
        </p>
      </header>

      <div class="single-content" itemprop="articleBody">
        <?php the_content(); ?>
      </div>
    </article>

    <?php the_post_navigation(); ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_sidebar(); ?>

<?php
get_footer();
