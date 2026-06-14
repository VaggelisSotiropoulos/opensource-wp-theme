<?php get_header(); ?>

<!-- ═══════════════════════════════════════════════════════════ HERO -->
<section id="hero">
  <div class="hero-glow"></div>
  <div class="container">
    <div class="hero-badge">
      <svg class="icon" viewBox="0 0 24 24"><rect x="9" y="2" width="6" height="20" rx="1"/><rect x="2" y="9" width="20" height="6" rx="1"/></svg>
      <span data-i18n="hero-badge">University of Macedonia</span>
    </div>

    <h1 class="hero-h1 reveal">
      <span data-i18n="hero-h1a">Code <span class="text-primary">Open.</span></span><br>
      <span data-i18n="hero-h1b">Build <span class="text-accent">Together.</span></span>
    </h1>

    <p class="hero-desc reveal" data-i18n="hero-desc">
      We are a student-driven community championing Free and Open Source Software. You don't need to know everything — just the mood to learn and create.
    </p>

    <div class="hero-actions reveal">
      <button class="btn-hero-primary" data-scroll="join">
        <span data-i18n="hero-cta1">Join the Community →</span>
      </button>
      <button class="btn-hero-secondary" data-scroll="projects">
        <span data-i18n="hero-cta2">View Projects</span>
      </button>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════ ABOUT -->
<section id="about">
  <div class="container">
    <div class="about-grid">

      <div class="reveal-left">
        <h2 class="about-h2" data-i18n="about-h">Academic roots.<br>Hacker soul.</h2>
        <p class="about-p" data-i18n="about-p1">OpenSource UoM is more than just a club. We are students from the University of Macedonia united by a shared passion for FOSS, open hardware, and collective creativity.</p>
        <p class="about-p" data-i18n="about-p2">Our mission is simple: promote open technologies, build useful tools for our campus, and create an inclusive environment where anyone can contribute, regardless of their skill level.</p>
      </div>

      <div class="about-cards">
        <div class="about-card reveal reveal-d1">
          <div class="about-card-icon">⌨</div>
          <div>
            <h3 data-i18n="card1-t">FOSS Advocate</h3>
            <p data-i18n="card1-d">Promoting Free and Open Source Software principles across campus.</p>
          </div>
        </div>
        <div class="about-card reveal reveal-d2">
          <div class="about-card-icon">⚙</div>
          <div>
            <h3 data-i18n="card2-t">Open Hardware</h3>
            <p data-i18n="card2-d">Exploring and building with accessible, open hardware platforms.</p>
          </div>
        </div>
        <div class="about-card reveal reveal-d3">
          <div class="about-card-icon">◎</div>
          <div>
            <h3 data-i18n="card3-t">Radically Inclusive</h3>
            <p data-i18n="card3-d">No gatekeeping. Voluntary participation. Everyone is welcome.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════ PROJECTS -->
<section id="projects">
  <div class="container">

    <div class="section-header">
      <div class="section-header-text">
        <h2 data-i18n="proj-h">Our Work</h2>
        <p data-i18n="proj-sub">We build tools that solve real problems. Everything is open-source, and anyone can contribute.</p>
      </div>
      <div class="repo-btns">
        <a href="https://github.com/open-source-uom" target="_blank" rel="noreferrer" class="repo-btn">
          <svg class="icon" viewBox="0 0 24 24"><path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
          GitHub
        </a>
        <a href="https://gitlab.com/opensourceuom" target="_blank" rel="noreferrer" class="repo-btn">
          <svg class="icon" style="color:#FC6D26" viewBox="0 0 24 24"><path d="M22.65 14.39L12 22.13 1.35 14.39a.84.84 0 01-.3-.94l1.22-3.78 2.44-7.51A.42.42 0 014.82 2a.43.43 0 01.58 0 .42.42 0 01.11.18l2.44 7.49h8.1l2.44-7.51A.42.42 0 0118.6 2a.43.43 0 01.58 0 .42.42 0 01.11.18l2.44 7.51L23 13.45a.84.84 0 01-.35.94z"/></svg>
          GitLab
        </a>
      </div>
    </div>

    <!-- SLIDER WRAPPER -->
    <div class="projects-slider-wrapper">

      <button class="slider-arrow slider-prev" aria-label="Previous project">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"/></svg>
      </button>

      <div class="projects-slider">
        <div class="projects-slider-track">

        <!-- ===================== PROJECT 1 ===================== -->
        <div class="project-card reveal">
          <div class="project-card-glow"></div>
          <div class="project-inner">
            <div>
              <div class="project-badge" data-i18n="proj1-badge">Operating System</div>
              <h3 class="project-name">UniOs</h3>
              <p class="project-desc" data-i18n="proj1-desc">Customized Linux distribution based on Kubuntu, designed for the needs of undergraduate students.</p>
              <div class="project-tags">
                <span class="project-tag">Qt</span>
                <span class="project-tag">Open Source</span>
              </div>
              <a href="https://open-source-uom.github.io/UniOS-landing-page/index.html" target="_blank" rel="noreferrer" class="project-cta">
                <span>Visit Website →</span>
              </a>
            </div>
            <div class="project-visual">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/unios.png"
                alt="UniOS"
                class="project-logo-img"
              />
            </div>
          </div>
        </div>

        <!-- ===================== PROJECT 2 ===================== -->
        <!-- To add a new project: copy this block and edit the content -->
        <div class="project-card reveal">
          <div class="project-card-glow"></div>
          <div class="project-inner">
            <div>
              <div class="project-badge" data-i18n="proj2-badge">Tool</div>
              <h3 class="project-name">MyUoM</h3>
              <p class="project-desc" data-i18n="proj2-desc">An open-source application designed to improve daily university life for students at the University of Macedonia. Built by students, for students.</p>
              <div class="project-tags">
                <span class="project-tag">React</span>
                <span class="project-tag">Node.js</span>
                <span class="project-tag" data-i18n="proj-tag-os">Open Source</span>
                <span class="project-tag" data-i18n="proj-tag-sl">Student Life</span>
              </div>
              <a href="https://github.com/open-source-uom" target="_blank" rel="noreferrer" class="project-cta">
                <span data-i18n="proj-cta">Contribute to MyUoM →</span>
              </a>
            </div>
            <div class="project-visual">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/myuomlogo.png"
                alt="MyUoM"
                class="project-logo-img"
              />
            </div>
          </div>
        </div>

        <!-- ===================== ADD MORE PROJECTS BELOW ===================== -->

        </div><!-- /.projects-slider-track -->
      </div><!-- /.projects-slider -->

      <button class="slider-arrow slider-next" aria-label="Next project">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
      </button>

    </div><!-- /.projects-slider-wrapper -->

    <!-- Dot navigation — generated automatically by JS -->
    <div class="slider-dots" aria-label="Project slides"></div>

  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════ BLOG -->
<section id="blog">
  <div class="container">

    <div class="blog-header">
      <h2 data-i18n="blog-h">Latest Thoughts</h2>
      <?php
        $blog_page_id = get_option('page_for_posts');
        $blog_url = $blog_page_id ? get_permalink($blog_page_id) : home_url('/blog');
      ?>
      <a href="<?php echo esc_url($blog_url); ?>" class="blog-view-all">
        <span data-i18n="blog-all">View all posts</span> ›
      </a>
    </div>

    <div class="blog-grid">
      <?php
        $recent_posts = new WP_Query(array(
          'posts_per_page'      => 4,
          'post_status'         => 'publish',
          'ignore_sticky_posts' => true,
        ));

        if ( $recent_posts->have_posts() ) :
          $delay_classes = array('', 'reveal-d1', 'reveal-d2', 'reveal-d3');
          $i = 0;
          while ( $recent_posts->have_posts() ) : $recent_posts->the_post();
      ?>
          <article class="blog-card reveal <?php echo $delay_classes[$i]; ?>">
            <a href="<?php the_permalink(); ?>" class="blog-card-link">
              <div class="blog-date"><?php echo get_the_date('F Y'); ?></div>
              <div class="blog-title"><?php the_title(); ?></div>
              <div class="blog-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></div>
            </a>
          </article>
      <?php
          $i++;
          endwhile;
          wp_reset_postdata();
        else :
      ?>
          <article class="blog-card reveal">
            <div class="blog-date">April 2026</div>
            <div class="blog-title">Epochalypse (Y2K38)</div>
            <div class="blog-excerpt">Exploring the 2038 Unix timestamp problem and how the community is preparing systems for the integer overflow.</div>
          </article>
          <article class="blog-card reveal reveal-d1">
            <div class="blog-date">November 2025</div>
            <div class="blog-title">Slowroll: openSUSE Leap's Evolution</div>
            <div class="blog-excerpt">A deep dive into openSUSE's Slowroll initiative and what it means for enterprise stability vs rolling releases.</div>
          </article>
          <article class="blog-card reveal reveal-d2">
            <div class="blog-date">October 2025</div>
            <div class="blog-title">Ubuntu Summit Extended 25.10 — Thessaloniki</div>
            <div class="blog-excerpt">Recapping the highlights from the extended Ubuntu Summit right here in Thessaloniki.</div>
          </article>
          <article class="blog-card reveal reveal-d3">
            <div class="blog-date">October 2025</div>
            <div class="blog-title">SageMath on Docker for Windows</div>
            <div class="blog-excerpt">A practical guide to getting SageMath running smoothly on Windows environments using Docker.</div>
          </article>
      <?php endif; ?>
    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════ RESOURCES -->
<section id="resources">
  <div class="container">
    <h2 data-i18n="res-h">Resources &amp; Learning</h2>

    <div class="resources-grid">

      <a href="https://github.com/open-source-uom" target="_blank" rel="noreferrer" class="resource-card reveal">
        <span class="resource-icon">
          <svg class="icon" style="width:1.75rem;height:1.75rem" viewBox="0 0 24 24"><path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
        </span>
        <h3 data-i18n="res1-t">GitHub Repos</h3>
        <p data-i18n="res1-d">Source code for all our projects</p>
      </a>

      <a href="https://gitlab.com/opensourceuom" target="_blank" rel="noreferrer" class="resource-card reveal reveal-d1">
        <span class="resource-icon">
          <svg class="icon" style="width:1.75rem;height:1.75rem;color:#FC6D26" viewBox="0 0 24 24"><path d="M22.65 14.39L12 22.13 1.35 14.39a.84.84 0 01-.3-.94l1.22-3.78 2.44-7.51A.42.42 0 014.82 2a.43.43 0 01.58 0 .42.42 0 01.11.18l2.44 7.49h8.1l2.44-7.51A.42.42 0 0118.6 2a.43.43 0 01.58 0 .42.42 0 01.11.18l2.44 7.51L23 13.45a.84.84 0 01-.35.94z"/></svg>
        </span>
        <h3 data-i18n="res2-t">GitLab Repos</h3>
        <p data-i18n="res2-d">Mirror and CI/CD pipelines</p>
      </a>

      <!--<a href="https://www.youtube.com/@opensourceuom" target="_blank" rel="noreferrer" class="resource-card reveal reveal-d2">
        <span class="resource-icon">⌨</span>
        <h3 data-i18n="res3-t">Linux Commands</h3>
        <p data-i18n="res3-d">Essential guide for beginners</p>
      </a>-->

      <a href="https://www.youtube.com/@opensourceuom" target="_blank" rel="noreferrer" class="resource-card reveal reveal-d3">
        <span class="resource-icon">▶</span>
        <h3 data-i18n="res4-t">Video Tutorials</h3>
        <p data-i18n="res4-d">Workshops and sessions</p>
      </a>

    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════ JOIN -->
<section id="join">
  <div class="join-dots"></div>
  <div class="container join-content">

    <h2 class="reveal" data-i18n="join-h">Join us now</h2>
    <!--<div class="join-sub reveal" data-i18n="join-sub">Γίνε Μέλος Τώρα!</div>-->
    <p class="join-desc reveal" data-i18n="join-desc">
      Jump into our Discord, introduce yourself, and start exploring. We're always excited to welcome new members.
    </p>

    <div class="join-actions reveal">
      <a href="https://discord.gg/8VYvYeg3Hq" target="_blank" rel="noreferrer" class="btn-join-discord">
        <svg class="icon" style="width:1.4rem;height:1.4rem" viewBox="0 0 24 24"><path d="M20.317 4.37a19.791 19.791 0 00-4.885-1.515.074.074 0 00-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 00-5.487 0 12.64 12.64 0 00-.617-1.25.077.077 0 00-.079-.037A19.736 19.736 0 003.677 4.37a.07.07 0 00-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 00.031.057 19.9 19.9 0 005.993 3.03.078.078 0 00.084-.028c.462-.63.874-1.295 1.226-1.994a.076.076 0 00-.041-.106 13.107 13.107 0 01-1.872-.892.077.077 0 01-.008-.128 10.2 10.2 0 00.372-.292.074.074 0 01.077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 01.078.01c.12.098.246.198.373.292a.077.077 0 01-.006.127 12.299 12.299 0 01-1.873.892.077.077 0 00-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 00.084.028 19.839 19.839 0 006.002-3.03.077.077 0 00.032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 00-.031-.03z"/></svg>
        <span data-i18n="join-discord">Join Discord</span>
      </a>
      <a href="https://www.instagram.com/opensourceuom/" target="_blank" rel="noreferrer" class="btn-join-ig">
        <svg class="icon" style="width:1.4rem;height:1.4rem" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
        <span data-i18n="join-ig">Follow Instagram</span>
      </a>
    </div>

  </div>
</section>

<?php get_footer(); ?>
