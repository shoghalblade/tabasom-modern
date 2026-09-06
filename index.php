<?php
// فالبک: همهٔ مسیرها به لندینگ می‌روند
if (is_front_page()) {
    include get_template_directory() . '/front.php';
    return;
}
get_header();
echo '<main class="page"><section class="blog"><div class="blog-head-text"><h2>';
echo esc_html(get_the_title() ?: get_bloginfo('name'));
echo '</h2></div><div class="blog-cards"><article class="blog-card"><div class="info">';
if (have_posts()) { while (have_posts()) { the_post(); the_content(); } }
echo '</div></article></div></section></main>';
get_footer();
