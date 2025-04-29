<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="format-detection" content="telephone=no, address=no, emial=no, date=no">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/touch-icon/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/touch-icon/android-touch-icon.png">

        <?php if (is_front_page()): ?>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/top.css">
        <?php endif; ?>
        <?php if (is_page('media')): ?>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/media.css">
            <!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/pages/media_slider.js"></script> -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
        <?php endif; ?>
        <?php if (strpos($_SERVER['REQUEST_URI'], '/interview') !== false): ?>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/interview.css">
        <?php endif; ?>
        <?php if (strpos($_SERVER['REQUEST_URI'], '/article') !== false): ?>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/article.css">
        <?php endif; ?>
    </head>
    <body>
        <header>
            HEADERの部分が入り（デザイン）
        </header>
        <main>