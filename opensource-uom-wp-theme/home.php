<?php get_header(); ?>

<!-- ═══════════════════════════════════════════════════════════ BLOG PAGE -->
<section class="blog-page-hero">
  <div class="container">
    <div class="blog-page-badge">Blog</div>
    <h1 class="blog-page-title">Latest Thoughts</h1>
    <p class="blog-page-sub">News, tutorials, and community updates from OpenSource UoM.</p>
  </div>
</section>

<section class="blog-page-main">
  <div class="container">

    <?php if ( have_posts() ) : ?>

      <div class="blog-page-grid">
        <?php while ( have_posts() ) : the_post(); ?>

          <article class="blog-page-card">
            <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>" class="blog-page-thumb">
                <?php the_post_thumbnail('medium_large'); ?>
              </a>
            <?php endif; ?>
            <div class="blog-page-card-body">
              <div class="blog-page-meta">
                <span class="blog-date"><?php echo get_the_date('F j, Y'); ?></span>
                <?php
                  $cats = get_the_category();
                  if ($cats) : ?>
                  <span class="blog-page-cat"><?php echo esc_html($cats[0]->name); ?></span>
                <?php endif; ?>
              </div>
              <h2 class="blog-page-card-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
              <p class="blog-page-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 25, '...' ); ?></p>
              <a href="<?php the_permalink(); ?>" class="blog-page-read-more">
                Read more <span aria-hidden="true">→</span>
              </a>
            </div>
          </article>

        <?php endwhile; ?>
      </div>

      <div class="blog-pagination">
        <?php
          the_posts_pagination(array(
            'prev_text' => '← Newer',
            'next_text' => 'Older →',
          ));
        ?>
      </div>

    <?php else : ?>

      <div class="blog-no-posts">
        <span class="blog-no-posts-icon">✍</span>
        <h2>No posts yet</h2>
        <p>We're working on some great content. Check back soon!</p>
        <a href="<?php echo esc_url( home_url('/') ); ?>" class="btn-primary">← Back to home</a>
      </div>

    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>
