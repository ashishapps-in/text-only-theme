<?php
/**
 * Template Name: Textrim Inspired Text-Only Layout
 * Description: Minimal text-first WordPress template inspired by the Textrim Blogger theme style.
 */

get_header();
?>

<style>
  :root {
    --bg: #ffffff;
    --text: #111111;
    --muted: #666666;
    --line: #e6e6e6;
    --accent: #111111;
    --max-width: 780px;
  }

  .textrim-wrap {
    background: var(--bg);
    color: var(--text);
    max-width: var(--max-width);
    margin: 0 auto;
    padding: 2.5rem 1rem 4rem;
    font-family: Georgia, "Times New Roman", serif;
    line-height: 1.75;
  }

  .textrim-site-title,
  .textrim-post-title,
  .textrim-section-title {
    font-family: "Arial Narrow", Arial, sans-serif;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    line-height: 1.3;
    margin: 0;
  }

  .textrim-site-header {
    border-bottom: 1px solid var(--line);
    margin-bottom: 2rem;
    padding-bottom: 1rem;
  }

  .textrim-site-title {
    font-size: 1.65rem;
    margin-bottom: 0.4rem;
  }

  .textrim-site-tagline {
    color: var(--muted);
    margin: 0;
  }

  .textrim-nav {
    margin-top: 1rem;
    display: flex;
    flex-wrap: wrap;
    gap: 0.8rem;
  }

  .textrim-nav a {
    color: var(--accent);
    text-decoration: none;
    border-bottom: 1px solid transparent;
    font-size: 0.95rem;
  }

  .textrim-nav a:hover,
  .textrim-nav a:focus {
    border-bottom-color: var(--accent);
  }

  .textrim-post {
    border-bottom: 1px solid var(--line);
    padding: 1.4rem 0 1.8rem;
  }

  .textrim-post:first-of-type {
    padding-top: 0;
  }

  .textrim-post-title {
    font-size: 1.2rem;
    margin-bottom: 0.35rem;
  }

  .textrim-post-title a {
    color: var(--text);
    text-decoration: none;
  }

  .textrim-post-title a:hover,
  .textrim-post-title a:focus {
    text-decoration: underline;
  }

  .textrim-meta {
    color: var(--muted);
    font-size: 0.9rem;
    margin-bottom: 0.6rem;
  }

  .textrim-excerpt {
    margin: 0;
  }

  .textrim-pagination {
    display: flex;
    justify-content: space-between;
    gap: 1rem;
    margin-top: 2rem;
    font-size: 0.95rem;
  }

  .textrim-pagination a {
    color: var(--accent);
    text-decoration: none;
  }

  .textrim-empty {
    padding: 1rem 0;
    color: var(--muted);
  }
</style>

<main class="textrim-wrap">
  <header class="textrim-site-header">
    <h1 class="textrim-site-title">
      <a href="<?php echo esc_url(home_url('/')); ?>" style="color: inherit; text-decoration: none;">
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
      'container_class'=> 'textrim-nav',
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
          <?php echo esc_html(get_the_date()); ?> · <?php the_author(); ?>
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
