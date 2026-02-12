<?php
/**
 * Shared post list template.
 *
 * @package TextrimInspired
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<section aria-label="<?php esc_attr_e('Post list', 'textrim-inspired'); ?>">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class('post-card'); ?> itemscope itemtype="https://schema.org/BlogPosting">
        <header class="post-card-header">
          <h2 class="entry-title" itemprop="headline">
            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
          </h2>
          <p class="entry-meta">
            <time datetime="<?php echo esc_attr(get_the_date('c')); ?>" itemprop="datePublished"><?php echo esc_html(get_the_date()); ?></time>
            <span aria-hidden="true"> · </span>
            <span itemprop="author" itemscope itemtype="https://schema.org/Person"><span itemprop="name"><?php echo esc_html(get_the_author()); ?></span></span>
            <span aria-hidden="true"> · </span>
            <span><?php the_category(', '); ?></span>
          </p>
        </header>

        <div class="entry-excerpt" itemprop="description">
          <p><?php echo esc_html(textrim_get_text_excerpt(170)); ?></p>
        </div>

        <p class="read-more-wrap">
          <a class="read-more" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'textrim-inspired'); ?></a>
        </p>
      </article>
    <?php endwhile; ?>

    <nav class="pagination" aria-label="<?php esc_attr_e('Pagination', 'textrim-inspired'); ?>">
      <?php
      echo wp_kses_post(
          paginate_links([
              'type'      => 'list',
              'mid_size'  => 2,
              'prev_text' => esc_html__('Previous', 'textrim-inspired'),
              'next_text' => esc_html__('Next', 'textrim-inspired'),
          ])
      );
      ?>
    </nav>
  <?php else : ?>
    <article class="post-card">
      <h2 class="entry-title"><?php esc_html_e('Nothing found', 'textrim-inspired'); ?></h2>
      <p><?php esc_html_e('No posts are available yet.', 'textrim-inspired'); ?></p>
      <?php get_search_form(); ?>
    </article>
  <?php endif; ?>
</section>
