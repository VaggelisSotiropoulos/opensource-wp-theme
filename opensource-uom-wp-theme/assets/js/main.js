(function () {
  /* ─── DARK MODE ─────────────────────────────────────────── */
  var root = document.documentElement;
  var themeBtn  = document.getElementById('theme-toggle');
  var themeIcon = document.getElementById('theme-icon');

  function applyTheme(t) {
    if (t === 'dark') {
      root.classList.add('dark');
      if (themeIcon) { themeIcon.textContent = '☀'; themeIcon.style.color = '#facc15'; }
    } else {
      root.classList.remove('dark');
      if (themeIcon) { themeIcon.textContent = '☾'; themeIcon.style.color = ''; }
    }
    localStorage.setItem('theme', t);
  }

  var savedTheme = localStorage.getItem('theme') ||
    (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
  applyTheme(savedTheme);

  if (themeBtn) {
    themeBtn.addEventListener('click', function () {
      applyTheme(root.classList.contains('dark') ? 'light' : 'dark');
    });
  }

  /* ─── LANGUAGE TOGGLE ───────────────────────────────────── */
  var translations = {
    en: {
      'nav-about':     'About',
      'nav-projects':  'Projects',
      'nav-blog':      'Blog',
      'nav-resources': 'Resources',
      'nav-join':      'Join Us',
      'hero-badge':    'University of Macedonia',
      'hero-h1a':      'Code <span class="text-primary">Open.</span>',
      'hero-h1b':      'Build <span class="text-accent">Together.</span>',
      'hero-desc':     "We are a student-driven community championing Free and Open Source Software. You don't need to know everything — just the mood to learn and create.",
      'hero-cta1':     'Join the Community →',
      'hero-cta2':     'View Projects',
      'about-h':       'Academic roots.<br>Hacker soul.',
      'about-p1':      'OpenSource UoM is more than just a club. We are students from the University of Macedonia united by a shared passion for FOSS, open hardware, and collective creativity.',
      'about-p2':      'Our mission is simple: promote open technologies, build useful tools for our campus, and create an inclusive environment where anyone can contribute, regardless of their skill level.',
      'card1-t':       'FOSS Advocate',
      'card1-d':       'Promoting Free and Open Source Software principles across campus.',
      'card2-t':       'Open Hardware',
      'card2-d':       'Exploring and building with accessible, open hardware platforms.',
      'card3-t':       'Radically Inclusive',
      'card3-d':       'No gatekeeping. Voluntary participation. Everyone is welcome.',
      'proj-h':        'Our Work',
      'proj-sub':      'We build tools that solve real problems. Everything is open-source, and anyone can contribute.',
      'proj1-badge':   'Operating System', 
      'proj1-desc':    'Customized Linux distribution based on Kubuntu, designed for the needs of undergraduate students.',
      'proj2-badge':   'Tool',
      'proj2-desc':    'An open-source application designed to improve daily university life for students at the University of Macedonia. Built by students, for students.',
      'proj-cta':      'Contribute to MyUoM →',
      'blog-h':        'Latest Thoughts',
      'blog-all':      'View all posts',
      'res-h':         'Resources &amp; Learning',
      'res1-t':        'GitHub Repos',
      'res1-d':        'Source code for all our projects',
      'res2-t':        'GitLab Repos',
      'res2-d':        'Mirror and CI/CD pipelines',
      'res3-t':        'Linux Commands',
      'res3-d':        'Essential guide for beginners',
      'res4-t':        'Video Tutorials',
      'res4-d':        'Workshops and sessions',
      'join-h':        'Join us now',
      'join-sub':      'Γίνε Μέλος Τώρα!',
      'join-desc':     "Jump into our Discord, introduce yourself, and start exploring. We're always excited to welcome new members.",
      'join-discord':  'Join Discord',
      'join-ig':       'Follow Instagram',
      'footer-tag':    'The open-source student community at the University of Macedonia. Code open, build together.',
      'footer-con':    'Connect',
      'footer-par':    'Partners',
      'footer-priv':   'Privacy',
      'footer-terms':  'Terms',
    },
    el: {
      'nav-about':     'Σχετικά',
      'nav-projects':  'Έργα',
      'nav-blog':      'Ιστολόγιο',
      'nav-resources': 'Πηγές',
      'nav-join':      'Γίνε Μέλος',
      'hero-badge':    'Πανεπιστήμιο Μακεδονίας',
      'hero-h1a':      'Κώδικας <span class="text-primary">Ανοιχτός.</span>',
      'hero-h1b':      'Χτίζουμε <span class="text-accent">Μαζί.</span>',
      'hero-desc':     'Είμαστε μια κοινότητα φοιτητών που υποστηρίζει το Ελεύθερο και Ανοιχτό Λογισμικό. Δεν χρειάζεται να ξέρεις τα πάντα — αρκεί η διάθεση να μαθαίνεις και να δημιουργείς.',
      'hero-cta1':     'Γίνε Μέλος →',
      'hero-cta2':     'Δες τα Έργα',
      'about-h':       'Ακαδημαϊκές ρίζες.<br>Πνεύμα hacker.',
      'about-p1':      'Το OpenSource UoM είναι κάτι παραπάνω από σύλλογος. Είμαστε φοιτητές του Πανεπιστημίου Μακεδονίας, ενωμένοι από κοινό πάθος για το FOSS, το ανοιχτό υλικό και τη συλλογική δημιουργικότητα.',
      'about-p2':      'Η αποστολή μας είναι απλή: να προωθούμε τις ανοιχτές τεχνολογίες, να φτιάχνουμε χρήσιμα εργαλεία για την πανεπιστημιακή κοινότητα και να δημιουργούμε ένα περιβάλλον όπου όλοι μπορούν να συνεισφέρουν.',
      'card1-t':       'Υποστηρικτής FOSS',
      'card1-d':       'Προώθηση των αρχών Ελεύθερου και Ανοιχτού Λογισμικού στην πανεπιστημιακή κοινότητα.',
      'card2-t':       'Ανοιχτό Υλικό',
      'card2-d':       'Εξερεύνηση και κατασκευή με προσβάσιμες, ανοιχτές πλατφόρμες υλικού.',
      'card3-t':       'Ριζικά Συμπεριληπτικοί',
      'card3-d':       'Χωρίς αποκλεισμούς. Εθελοντική συμμετοχή. Όλοι είναι ευπρόσδεκτοι.',
      'proj-h':        'Η Δουλειά μας',
      'proj-sub':      'Φτιάχνουμε εργαλεία που λύνουν πραγματικά προβλήματα. Όλα είναι ανοιχτού κώδικα και ο καθένας μπορεί να συνεισφέρουν.',
      'proj1-badge':   'Λειτουργικό Σύστημα', 
      'proj1-desc':    'Προσαρμοσμένη διανομή Linux βασισμένη στο Kubuntu, σχεδιασμένη για τις ανάγκες προτυχιακών φοιτητών',     
      'proj-badge2':   'Εργαλείο',
      'proj-desc2':    'Μια εφαρμογή ανοιχτού κώδικα που σχεδιάστηκε για να βελτιώσει την καθημερινή ζωή των φοιτητών στο Πανεπιστήμιο Μακεδονίας. Φτιαγμένη από φοιτητές, για φοιτητές.',
      'proj-cta':      'Συνεισφορά στο MyUoM →',
      'blog-h':        'Τελευταία Νέα',
      'blog-all':      'Όλες οι αναρτήσεις',
      'res-h':         'Πηγές &amp; Μάθηση',
      'res1-t':        'Αποθετήρια GitHub',
      'res1-d':        'Πηγαίος κώδικας όλων των έργων μας',
      'res2-t':        'Αποθετήρια GitLab',
      'res2-d':        'Mirror και pipelines CI/CD',
      'res3-t':        'Εντολές Linux',
      'res3-d':        'Βασικός οδηγός για αρχάριους',
      'res4-t':        'Βίντεο Εκπαίδευσης',
      'res4-d':        'Εργαστήρια και συναντήσεις',
      'join-h':        'Γίνε Μέλος Τώρα',
      'join-sub':      'Join us now!',
      'join-desc':     'Μπες στο Discord μας, σύστησε τον εαυτό σου και ξεκίνα να εξερευνάς. Είμαστε πάντα χαρούμενοι να καλωσορίζουμε νέα μέλη.',
      'join-discord':  'Μπες στο Discord',
      'join-ig':       'Ακολούθησε στο Instagram',
      'footer-tag':    'Η κοινότητα φοιτητών ανοιχτού κώδικα στο Πανεπιστήμιο Μακεδονίας. Κώδικας ανοιχτός, χτίζουμε μαζί.',
      'footer-con':    'Σύνδεση',
      'footer-par':    'Συνεργάτες',
      'footer-priv':   'Απόρρητο',
      'footer-terms':  'Όροι',
    }
  };

  var langBtn  = document.getElementById('lang-toggle');
  var langEnEl = document.getElementById('lang-en');
  var langElEl = document.getElementById('lang-el');
  var currentLang = localStorage.getItem('lang') || 'en';

  function applyLang(lang) {
    currentLang = lang;
    localStorage.setItem('lang', lang);
    var t = translations[lang];

    if (langEnEl) langEnEl.style.color = lang === 'en' ? 'var(--primary)' : 'var(--muted-fg)';
    if (langElEl) langElEl.style.color = lang === 'el' ? 'var(--primary)' : 'var(--muted-fg)';

    document.querySelectorAll('[data-i18n]').forEach(function (el) {
      var key = el.getAttribute('data-i18n');
      if (t[key] !== undefined) el.innerHTML = t[key];
    });
  }

  if (langBtn) {
    langBtn.addEventListener('click', function () {
      applyLang(currentLang === 'en' ? 'el' : 'en');
    });
  }

  applyLang(currentLang);

  /* ─── SMOOTH SCROLL (front page only) ──────────────────── */
  document.querySelectorAll('[data-scroll]').forEach(function (el) {
    el.addEventListener('click', function (e) {
      var target = document.getElementById(el.getAttribute('data-scroll'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });

  /* ─── SCROLL ANIMATIONS ─────────────────────────────────── */
  if ('IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });

    document.querySelectorAll('.reveal, .reveal-left').forEach(function (el) {
      observer.observe(el);
    });
  } else {
    document.querySelectorAll('.reveal, .reveal-left').forEach(function (el) {
      el.classList.add('visible');
    });
  }

  /* ─── NAVBAR SCROLL EFFECT ──────────────────────────────── */
  var navbar = document.getElementById('navbar');
  if (navbar) {
    window.addEventListener('scroll', function () {
      navbar.classList.toggle('scrolled', window.scrollY > 20);
    }, { passive: true });
  }
})();

(function () {
  const slider   = document.querySelector('.projects-slider');
  const wrapper  = document.querySelector('.projects-slider-wrapper');
  const dotsEl   = document.querySelector('.slider-dots');
  if (!slider) return;

  const slides = Array.from(slider.querySelectorAll('.project-card'));
  let current  = 0;

  // Hide controls when there's only one slide
  if (slides.length <= 1) {
    wrapper.classList.add('single');
    return;
  }

  // Build dots
  slides.forEach((_, i) => {
    const dot = document.createElement('button');
    dot.className = 'slider-dot' + (i === 0 ? ' active' : '');
    dot.setAttribute('aria-label', 'Go to project ' + (i + 1));
    dot.addEventListener('click', () => goTo(i));
    dotsEl.appendChild(dot);
  });

  const track = slider.querySelector('.projects-slider-track');

  function goTo(index) {
    current = (index + slides.length) % slides.length;
    track.style.transform = 'translateX(-' + (current * 100) + '%)';

    // Update dots
    dotsEl.querySelectorAll('.slider-dot').forEach((d, i) =>
      d.classList.toggle('active', i === current)
    );
  }

  // Arrow listeners
  document.querySelector('.slider-prev').addEventListener('click', () => goTo(current - 1));
  document.querySelector('.slider-next').addEventListener('click', () => goTo(current + 1));

  // Optional: keyboard navigation
  document.addEventListener('keydown', e => {
    if (e.key === 'ArrowLeft')  goTo(current - 1);
    if (e.key === 'ArrowRight') goTo(current + 1);
  });
})();