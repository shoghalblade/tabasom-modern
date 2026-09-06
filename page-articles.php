<?php
/**
 * Template Name: مقالات
 * آرشیو کامل مقالات — سبک مجله‌ای
 */
get_header();
?>
<main class="page">
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
    <a class="nav-cta" href="tel:02144120380">رزرو نوبت</a>
    <button class="nav-toggle" aria-label="منو" aria-expanded="false"><span></span><span></span><span></span></button>
  </nav>

  <?php
  /* پشتیبانی از صفحه‌بندی */
  $paged = max(1, get_query_var('paged'), get_query_var('page'));
  $q = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 12, 'paged' => $paged, 'ignore_sticky_posts' => 1));
  ?>

  <!-- HEAD -->
  <section class="blogpage-head">
    <p class="blogpage-tag">مجلهٔ سلامت دهان و دندان</p>
    <h1>مقالات <span class="gold">طبسم</span></h1>
    <div class="blogpage-line"></div>
    <p class="blogpage-desc">آموزش‌های کاربردی، راهنمای درمان‌ها و پاسخ سؤالات رایج — از ایمپلنت فوری تا دندانپزشکی اقساطی.</p>
  </section>

  <!-- FEATURED (جدیدترین) -->
  <?php if ($paged <= 1 && $q->have_posts()) :
    $q->the_post(); ?>
  <section class="blog-featured reveal">
    <a class="bf-body" href="<?php the_permalink(); ?>">
      <span class="bf-tag">آخرین مقاله</span>
      <h2><?php the_title(); ?></h2>
      <p><?php echo esc_html(get_the_excerpt()); ?></p>
      <span class="bf-meta"><?php echo esc_html(get_the_date()); ?> · <?php echo esc_html(ceil(str_word_count(wp_strip_all_tags(get_the_content())) / 220)); ?> دقیقه مطالعه</span>
    </a>
  </section>
  <?php endif; ?>

  <!-- GRID -->
  <section class="blogpage-grid-wrap">
    <?php if ($q->have_posts()) : ?>
    <div class="blogpage-grid">
      <?php while ($q->have_posts()) : $q->the_post(); ?>
      <a class="bp-card" href="<?php the_permalink(); ?>">
        <div class="bp-top">
          <span class="bp-date"><?php echo esc_html(get_the_date()); ?></span>
          <span class="bp-line"></span>
        </div>
        <h3><?php the_title(); ?></h3>
        <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 22)); ?></p>
        <span class="bp-more">ادامه مطلب <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5m0 0l6-6m-6 6l6 6"/></svg></span>
      </a>
      <?php endwhile; ?>
    </div>
    <?php if ($q->max_num_pages > 1) : ?>
    <div class="blogpage-pager">
      <?php
      echo paginate_links(array(
        'total' => $q->max_num_pages,
        'prev_text' => 'قبلی',
        'next_text' => 'بعدی',
        'type' => 'list',
      ));
      ?>
    </div>
    <?php endif; wp_reset_postdata(); ?>
    <?php else : ?>
    <p class="blogpage-empty">هنوز مقاله‌ای منتشر نشده است.</p>
    <?php endif; ?>
  </section>

  <section class="contact-strip reveal" id="contact">
    <div class="cs-title">سؤالی دارید؟<small>مشاورهٔ رایگان — پاسخگویی همه‌روزه</small></div>
    <div class="cs-actions">
      <a class="cs-btn phone" href="tel:02144120380">۰۲۱-۴۴۱۲۰۳۸۰</a>
      <a class="cs-btn wa" href="https://wa.me/989023099601">واتساپ</a>
    </div>
  </section>

  <footer>
    <div class="footer-cols">
      <div class="footer-col">
        <h4>خدمات</h4>
        <ul>
          <li><a href="<?php echo esc_url(home_url('/#services')); ?>">ایمپلنت فوری</a></li>
          <li><a href="<?php echo esc_url(home_url('/#services')); ?>">دندانپزشکی بدون درد</a></li>
          <li><a href="<?php echo esc_url(home_url('/#services')); ?>">لمینت و کامپوزیت</a></li>
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
<?php get_footer();
