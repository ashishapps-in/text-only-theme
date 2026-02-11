<?php
/**
 * Template Name: Textrim Inspired Text-Only Layout
 * Description: Minimal text-first WordPress template inspired by the Textrim Blogger theme style.
 */

get_header();
?>

<main class="textrim-wrap">
  <header class="textrim-site-header">
    <h1 class="textrim-site-title">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <?php bloginfo('name'); ?>
      </a>
    </h1>

    <?php if (get_bloginfo('description')) : ?>
      <p class="textrim-site-tagline"><?php bloginfo('description'); ?></p>
    <?php endif; ?>

    <?php
    wp_nav_menu([
      'theme_location' => 'primary',
      'container'      => 'nav',
      'container_class' => 'textrim-menu',
      'menu_class'     => 'textrim-nav',
      'fallback_cb'    => false,
    ]);
    ?>
  </header>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class('textrim-post'); ?> id="post-<?php the_ID(); ?>">
        <h2 class="textrim-post-title">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>

        <p class="textrim-meta">
          <?php echo esc_html(get_the_date()); ?> · <?php echo esc_html(get_the_author()); ?>
        </p>

        <div class="textrim-excerpt">
          <?php the_excerpt(); ?>
        </div>
      </article>
    <?php endwhile; ?>

    <nav class="textrim-pagination" aria-label="Posts Navigation">
      <div><?php next_posts_link('← Older posts'); ?></div>
      <div><?php previous_posts_link('Newer posts →'); ?></div>
    </nav>
  <?php else : ?>
    <p class="textrim-empty">No posts found.</p>
  <?php endif; ?>
</main>

<?php
get_footer();
