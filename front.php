<?php get_header(); ?>
<main class="page">

  <!-- NAV -->
  <nav class="site-nav" id="topnav">
    <div class="nav-logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/logo.png'); ?>" alt="کلینیک دندانپزشکی طبسم">
      </a>
      <span class="nav-logo-text">دندانپزشکی طبسم<small>دندانپزشکی تخصصی شهر زیبا</small></span>
    </div>
    <?php wp_nav_menu(array(
      'theme_location' => 'primary', 'container' => 'div', 'container_class' => 'nav-items',
      'menu_class' => '', 'fallback_cb' => 'tabasom_nav_fallback', 'depth' => 1,
    )); ?>
    <a class="nav-cta" href="tel:02144120380">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M6.6 10.8a15.1 15.1 0 0 0 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.2.2 2.4.6 3.6.1.3 0 .7-.2 1l-2.3 2.2z"/></svg>
      رزرو نوبت
    </a>
    <button class="nav-toggle" aria-label="منو" aria-expanded="false"><span></span><span></span><span></span></button>
  </nav>

  <!-- HERO — split editorial -->
  <section class="hero" id="home">
    <div class="hero-left">
      <p class="hero-tag">تجربه و تخصص از سال ۱۳۹۴</p>
      <h1 class="hero-title">لبخند سالم<br>با <span class="gold">طبسم</span></h1>
      <p class="hero-desc">بیش از ۱۰ سال تجربه در ارائهٔ خدمات تخصصی دندانپزشکی — از ایمپلنت فوری تا زیبایی لبخند، در محیطی آرام و حرفه‌ای.</p>
      <div class="hero-actions">
        <a class="btn-primary" href="tel:02144120380">نوبت‌دهی آنلاین</a>
        <a class="btn-ghost" href="#gallery">نمونه کارها</a>
      </div>
    </div>
    <div class="hero-right">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/hero.jpg'); ?>" alt="کلینیک دندانپزشکی طبسم">
      <div class="hero-mascot-wrap">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/mascot.png'); ?>" alt="">
      </div>
    </div>
    <div class="hero-follow">
      <div class="follow-pill">
        <span class="label">Dent_tabasom</span>
        <div class="social-row">
          <a class="icon-badge" href="https://instagram.com/Dent_tabasom" aria-label="اینستاگرام">
            <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="4"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="#fff" stroke="none"/></svg>
          </a>
          <a class="icon-badge" href="https://wa.me/989023099601" aria-label="واتساپ">
            <svg viewBox="0 0 24 24" fill="#fff"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm5.5 14.1c-.2.7-1.2 1.3-2 1.4-.5.1-1.2.2-3.5-.7-2.9-1.2-4.8-4.2-4.9-4.4-.1-.2-1.2-1.6-1.2-3s.7-2.1 1-2.4c.2-.3.5-.3.7-.3h.5c.2 0 .4 0 .6.4l.9 2.2c.1.2.1.4 0 .6l-.4.6-.5.6c-.2.2-.3.4-.1.7.2.3.9 1.4 1.9 2.3 1.3 1.2 2.4 1.5 2.7 1.7.3.1.5.1.7-.1l1-1.2c.2-.3.4-.2.7-.1l2.1 1c.3.2.5.2.6.4 0 .1 0 .7-.2 1.3z"/></svg>
          </a>
          <a class="icon-badge" href="tel:02144120380" aria-label="تماس">
            <svg viewBox="0 0 24 24" fill="#fff"><path d="M6.6 10.8a15.1 15.1 0 0 0 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.2.2 2.4.6 3.6.1.3 0 .7-.2 1l-2.3 2.2z"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES — numbered editorial -->
  <section class="services" id="services">
    <div class="sec-header reveal">
      <div class="left">
        <h2>خدمات ما</h2>
        <div class="line"></div>
      </div>
      <div class="right">از ایمپلنت فوری تا دندانپزشکی بدون درد — با پیشرفته‌ترین تجهیزات روز</div>
    </div>
    <div class="svc-list">
      <div class="svc-card reveal">
        <div class="svc-icon-wrap"><img class="svc-ico" src="<?php echo esc_url(get_template_directory_uri() . '/assets/icon-implant.png'); ?>" alt="ایمپلنت"></div>
        <div class="svc-num">01</div>
        <div class="svc-body">
          <h3>ایمپلنت فوری</h3>
          <p>کاشت ایمپلنت بدون پیش‌پرداخت با برندهای معتبر؛ تک‌دندان و کل فک بالا و پایین، با امکان پرداخت اقساطی.</p>
        </div>
      </div>
      <div class="svc-card reveal">
        <div class="svc-icon-wrap"><img class="svc-ico" src="<?php echo esc_url(get_template_directory_uri() . '/assets/icon-dental.png'); ?>" alt="بدون درد"></div>
        <div class="svc-num">02</div>
        <div class="svc-body">
          <h3>دندانپزشکی بدون درد</h3>
          <p>عصب‌کشی تک‌جلسه‌ای با دستگاه بی‌حسی دیجیتال — تجربه‌ای آرام و بدون استرس.</p>
        </div>
      </div>
      <div class="svc-card reveal">
        <div class="svc-icon-wrap"><img class="svc-ico" src="<?php echo esc_url(get_template_directory_uri() . '/assets/icon-reconstruction.png'); ?>" alt="زیبایی"></div>
        <div class="svc-num">03</div>
        <div class="svc-body">
          <h3>زیبایی و ترمیم</h3>
          <p>لمینت بدون تراش، کامپوزیت، بلیچینگ و روکش — لبخندی طبیعی و متناسب با چهرهٔ شما.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- TRUST -->
  <section class="trust reveal">
    <div class="trust-img">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/trust.jpg'); ?>" alt="کلینیک تبسم">
    </div>
    <div class="trust-content">
      <div class="trust-row">
        <h3>اعتماد شما</h3>
        <p>بیش از یک دهه تجربه در کنار تجهیزات پیشرفتهٔ دیجیتال، محیطی ایمن و آرام فراهم کرده است.</p>
      </div>
      <div class="trust-row">
        <h3>لبخند ماست</h3>
        <p>تعهد ما، درمان دقیق و اخلاق حرفه‌ای است؛ سلامت دهان نباید به‌خاطر هزینه معطل بماند.</p>
      </div>
    </div>
  </section>
  <div class="banners reveal">
    <div class="banner-discount">
      <span class="off">رایگان</span>
      <span class="label">معاینهٔ اولین ویزیت</span>
    </div>
    <a class="banner-book" href="tel:02144120380">رزرو همین الان</a>
  </div>

  <!-- ABOUT -->
  <section class="about reveal" id="about-us-anchor">
    <div class="about-deco" aria-hidden="true">"</div>
    <div class="about-text">
      <h3>دربارهٔ <span class="gold">طبسم</span></h3>
      <p>دندانپزشکی تبسم در غرب تهران با بیش از ۱۰ سال تجربه، مرجع خدمات تخصصی و عمومی است. هدف ما تجربه‌ای آرام، بدون درد و باکیفیت است.</p>
      <p>با آموزش مستمر، به‌روزرسانی دانش تخصصی و توجه به جزئیات، محیطی حرفه‌ای فراهم کرده‌ایم تا لبخندی سالم و ماندگار برای شما رقم بزنیم.</p>
    </div>
    <a class="about-btn" href="#contact">ارتباط با ما</a>
  </section>

  <!-- STATS -->
  <section class="stats">
    <div class="stat reveal"><div class="num" data-target="10" data-decimals="0" data-suffix="+"><span class="gold">0</span>+</div><div class="lbl">سال تجربه</div></div>
    <div class="stat reveal"><div class="num" data-target="12" data-decimals="0" data-suffix="">0</div><div class="lbl">خدمات تخصصی</div></div>
    <div class="stat reveal"><div class="num" data-target="4.8" data-decimals="1" data-suffix="">0.0</div><div class="lbl">رضایت بیماران</div></div>
  </section>

  <!-- BLOG -->
  <?php if (wp_count_posts()->publish > 0) : ?>
  <section class="blog" id="blog">
    <div class="sec-header reveal">
      <div class="left">
        <h2>آخرین مقالات</h2>
        <div class="line"></div>
      </div>
      <div class="right">آموزش‌های کاربردی سلامت دهان و دندان</div>
    </div>
    <div class="blog-cards reveal" id="blog-cards">
      <?php
      $q = new WP_Query(array('posts_per_page' => 3, 'ignore_sticky_posts' => 1));
      while ($q->have_posts()) : $q->the_post(); ?>
      <a class="blog-card" href="<?php the_permalink(); ?>">
        <span class="tag"><?php echo esc_html(get_the_date()); ?></span>
        <h3><?php the_title(); ?></h3>
        <p><?php echo esc_html(get_the_excerpt()); ?></p>
        <span class="blog-more">ادامه مطلب ←</span>
      </a>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
    <a class="blog-all" href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/articles/')); ?>">مشاهدهٔ همهٔ مقالات</a>
  </section>
  <?php endif; ?>

  <!-- GALLERY -->
  <section class="gallery-section" id="gallery">
    <div class="sec-header reveal">
      <div class="left">
        <h2>نمونه کارها</h2>
        <div class="line"></div>
      </div>
      <div class="right">نتیجهٔ درمان‌هایی که با دقت و تخصص انجام شده‌اند.</div>
    </div>
    <div class="gallery-grid">
      <?php
      $defaults = array('gallery-1.jpg','gallery-2.jpg','gallery-3.jpg','gallery-4.jpg','gallery-5.jpg','gallery-6.jpg','gallery-7.jpg','gallery-8.jpg','gallery-9.jpg');
      $n = 0;
      foreach ($defaults as $f) {
        $p = get_template_directory() . '/assets/' . $f;
        if (file_exists($p)) {
          $cls = 'g-item';
          if ($n === 0) $cls .= ' span-2 tall';
          elseif ($n === 3) $cls .= ' span-2';
          elseif ($n === 6) $cls .= ' tall';
          echo '<div class="' . $cls . '"><img src="' . esc_url(get_template_directory_uri() . '/assets/' . $f) . '" alt="نمونه کار ' . ($n+1) . '"></div>';
          $n++;
        }
      }
      ?>
    </div>
  </section>

  <!-- TESTIMONIALS (لوپ بی‌نهایت) -->
  <section class="testimonials">
    <div class="testimonials-head reveal"><h2>نظرات بیماران</h2></div>
    <div class="testi-track-wrap">
      <div class="testi-track" id="testi-track">
        <?php
      $comments = array(
        array('ایمپلنت فوری انجام دادم، بدون درد و خیلی تمیز. کادر درمانی خیلی باحوصله بودن.', 'سارا م.', 'ایمپلنت فوری'),
        array('عصب‌کشی تک‌جلسه‌ای بدون درد. قیمت منصفانه‌تر از بقیه بود.', 'رضا ک.', 'عصب‌کشی'),
        array('لمینت سرامیکی، لبخندم عالی شد. همهٔ مراحل با دقت توضیح داده شد.', 'مریم ب.', 'لمینت دندان'),
        array('جرم‌گیری و بروساژ — لثه‌هام خیلی بهتر شد. محیط تمیز و آرام.', 'علی ر.', 'جرم‌گیری'),
        array('دندانپزشکی کودکم، بچه‌ام نترسید. دکترا خیلی مهربونن.', 'نرگس ح.', 'کودکان'),
      );
      // 3x for seamless infinite loop
      $items = array_merge($comments, $comments);
      foreach ($items as $c) : ?>
      <div class="testi-card">
        <div class="stars" dir="ltr">★★★★★</div>
        <div class="quote"><?php echo esc_html($c[0]); ?></div>
        <div class="testi-author">
          <div class="testi-avatar"><?php echo mb_substr($c[1], 0, 1); ?></div>
          <div class="testi-info">
            <div class="name"><?php echo esc_html($c[1]); ?></div>
            <div class="role"><?php echo esc_html($c[2]); ?></div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- DOCTOR BANNER (عکس واقعی دکتر از dctabasom) -->
  <section class="doctor-banner reveal">
    <div class="db-photo">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/doctor.webp'); ?>" alt="دکتر دندانپزشکی تبسم">
    </div>
    <div class="db-text">
      <h3>تجربه، تخصص و اعتماد</h3>
      <p>دندانپزشکی تبسم — شهر زیبا، بلوار جوانمردان، ساختمان نوبهار</p>
    </div>
  </section>

  <!-- CONTACT -->
  <section class="contact-strip reveal" id="contact">
    <div class="cs-title">رزرو نوبت و مشاوره<small>پاسخگویی همه‌روزه — اقساطی و بدون درد</small></div>
    <div class="cs-actions">
      <a class="cs-btn phone" href="tel:02144120380">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M6.6 10.8a15.1 15.1 0 0 0 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.2.2 2.4.6 3.6.1.3 0 .7-.2 1l-2.3 2.2z"/></svg>
        ۰۲۱-۴۴۱۲۰۳۸۰
      </a>
      <a class="cs-btn wa" href="https://wa.me/989023099601">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm5.5 14.1c-.2.7-1.2 1.3-2 1.4-.5.1-1.2.2-3.5-.7-2.9-1.2-4.8-4.2-4.9-4.4-.1-.2-1.2-1.6-1.2-3s.7-2.1 1-2.4c.2-.3.5-.3.7-.3h.5c.2 0 .4 0 .6.4l.9 2.2c.1.2.1.4 0 .6l-.4.6-.5.6c-.2.2-.3.4-.1.7.2.3.9 1.4 1.9 2.3 1.3 1.2 2.4 1.5 2.7 1.7.3.1.5.1.7-.1l1-1.2c.2-.3.4-.2.7-.1l2.1 1c.3.2.5.2.6.4 0 .1 0 .7-.2 1.3z"/></svg>
        واتساپ
      </a>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="footer-cols">
      <div class="footer-col">
        <h4>خدمات</h4>
        <ul>
          <li><a href="#services">ایمپلنت فوری</a></li>
          <li><a href="#services">دندانپزشکی بدون درد</a></li>
          <li><a href="#services">لمینت و کامپوزیت</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>ارتباط</h4>
        <ul>
          <li><a href="tel:02144120380">۰۲۱-۴۴۱۲۰۳۸۰</a></li>
          <li><a href="https://instagram.com/Dent_tabasom">Dent_tabasom</a></li>
          <li><a href="https://wa.me/989023099601">واتساپ</a></li>
        </ul>
      </div>
      <div class="footer-col brand">
        <img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/logo.png'); ?>" alt="لوگو طبسم">
        <div class="footer-address">تهران، شهر زیبا، بلوار جوانمردان، ساختمان نوبهار، طبقهٔ ۷</div>
      </div>
    </div>
    <div class="footer-bottom">
      <span class="copy">© ۱۴۰۵ دندانپزشکی تبسم</span>
      <div class="gold-line"></div>
      <span class="copy">لبخند شما، افتخار ماست</span>
    </div>
  </footer>

</main>
<?php get_footer(); ?>
