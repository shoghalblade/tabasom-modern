<?php
/**
 * تک‌مقاله — سبک مجله‌ای بدون تصویر
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

  <?php while (have_posts()) : the_post(); ?>
  <article class="blogpage-single">
    <p class="blogpage-tag">مقالات طبسم</p>
    <h1><?php the_title(); ?></h1>
    <span class="bs-meta"><?php echo esc_html(get_the_date()); ?></span>
    <div class="bs-content"><?php the_content(); ?></div>
    <a class="blog-back" href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/')); ?>">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5m0 0l6-6m-6 6l6 6"/></svg>
      بازگشت به مقالات
    </a>
  </article>
  <?php endwhile; ?>

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
