<?php
// 初期セットアップ
function your_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'your_theme_setup');
?>
