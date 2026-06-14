<!DOCTYPE html>
<html lang="en" id="html-root">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav id="navbar">
  <div class="container nav-inner">

    <a class="nav-logo" href="<?php echo esc_url( home_url('/') ); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="OpenSource UoM Logo" />
      <span>OpenSource UoM</span>
    </a>

    <div class="nav-links">
      <?php if ( is_front_page() && ! is_paged() ) : ?>
        <button data-scroll="about"     data-i18n="nav-about">About</button>
        <button data-scroll="projects"  data-i18n="nav-projects">Projects</button>
        <button data-scroll="blog"      data-i18n="nav-blog">Blog</button>
        <button data-scroll="resources" data-i18n="nav-resources">Resources</button>
      <?php else : ?>
        <a href="<?php echo esc_url( home_url('/#about') ); ?>">About</a>
        <a href="<?php echo esc_url( home_url('/#projects') ); ?>">Projects</a>
        <?php
          $blog_page_id = get_option('page_for_posts');
          $blog_url = $blog_page_id ? get_permalink($blog_page_id) : home_url('/blog');
        ?>
        <a href="<?php echo esc_url($blog_url); ?>"
           class="<?php echo ( is_home() || is_archive() || is_singular('post') ) ? 'nav-active' : ''; ?>">Blog</a>
        <a href="<?php echo esc_url( home_url('/#resources') ); ?>">Resources</a>
      <?php endif; ?>
    </div>

    <div class="nav-actions">
      <button class="lang-btn" id="lang-toggle" aria-label="Switch language">
        <span id="lang-en">EN</span>
        <span class="lang-sep">/</span>
        <span id="lang-el">ΕΛ</span>
      </button>
      <button class="theme-btn" id="theme-toggle" aria-label="Toggle dark mode">
        <span id="theme-icon">☾</span>
      </button>
      <?php if ( is_front_page() && ! is_paged() ) : ?>
        <button class="btn-primary" data-scroll="join" data-i18n="nav-join">Join Us</button>
      <?php else : ?>
        <a href="<?php echo esc_url( home_url('/#join') ); ?>" class="btn-primary">Join Us</a>
      <?php endif; ?>
    </div>

  </div>
</nav>
