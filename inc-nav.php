<?php
// fallback for nav menu defined in functions.php
if (!function_exists('tabasom_nav_fallback')) {
    function tabasom_nav_fallback() {
        $items = array(
            'خانه'    => home_url('/'),
            'خدمات'   => home_url('/#services'),
            'نمونه کارها' => home_url('/#gallery'),
            'مقالات'  => home_url('/articles/'),
            'تماس با ما'  => home_url('/#contact'),
        );
        echo '<div class="nav-items">';
        foreach ($items as $label => $url) {
            echo '<a href="' . esc_url($url) . '">' . esc_html($label) . '</a>';
        }
        echo '</div>';
    }

}
