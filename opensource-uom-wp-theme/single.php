<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<!-- ═══════════════════════════════════════════════════════════ SINGLE POST -->
<section class="single-hero">
  <div class="container">
    <div class="single-meta">
      <?php
        $cats = get_the_category();
        if ($cats) : ?>
        <span class="blog-page-cat"><?php echo esc_html($cats[0]->name); ?></span>
      <?php endif; ?>
      <span class="blog-date"><?php echo get_the_date('F j, Y'); ?></span>
    </div>
    <h1 class="single-title"><?php the_title(); ?></h1>
    <div class="single-author">
      <?php echo get_avatar( get_the_author_meta('email'), 32, '', '', array('class' => 'single-avatar') ); ?>
      <span><?php the_author(); ?></span>
    </div>
  </div>
</section>

<?php if ( has_post_thumbnail() ) : ?>
  <div class="single-featured-img">
    <div class="container">
      <?php the_post_thumbnail('large'); ?>
    </div>
  </div>
<?php endif; ?>

<article class="single-content-wrap">
  <div class="container">
    <div class="single-content">
      <?php the_content(); ?>
    </div>

    <div class="single-footer">
      <?php
        $tags = get_the_tags();
        if ($tags) : ?>
        <div class="single-tags">
          <?php foreach ($tags as $tag) : ?>
            <a href="<?php echo get_tag_link($tag->term_id); ?>" class="project-tag"><?php echo esc_html($tag->name); ?></a>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <div class="single-nav">
        <?php
          $prev = get_previous_post();
          $next = get_next_post();
        ?>
        <?php if ($prev) : ?>
          <a href="<?php echo get_permalink($prev); ?>" class="single-nav-link">
            <span class="single-nav-label">← Previous</span>
            <span class="single-nav-title"><?php echo get_the_title($prev); ?></span>
          </a>
        <?php else : ?>
          <span></span>
        <?php endif; ?>
        <?php if ($next) : ?>
          <a href="<?php echo get_permalink($next); ?>" class="single-nav-link single-nav-link--right">
            <span class="single-nav-label">Next →</span>
            <span class="single-nav-title"><?php echo get_the_title($next); ?></span>
          </a>
        <?php endif; ?>
      </div>

      <div class="single-back">
        <?php
          $blog_page_id = get_option('page_for_posts');
          $blog_url = $blog_page_id ? get_permalink($blog_page_id) : home_url('/blog');
        ?>
        <a href="<?php echo esc_url($blog_url); ?>" class="blog-page-read-more">← All posts</a>
      </div>
    </div>

  </div>
</article>

<?php endwhile; ?>

<?php get_footer(); ?>
