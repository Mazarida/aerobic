<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<? bloginfo('template_url') ?>/js/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="<? bloginfo('template_url') ?>/js/msdropdown/css/dd.css">
    <script src="<?php bloginfo("template_url"); ?>/includes/countdown/jquery.countdown.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/includes/countdown/jquery.countdown.css" />
    <script>dts = <?php the_field('datetime'); ?></script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
</head>
<body <?php body_class(); ?>>
<div class="container shadow">
    <header>
        <div class="logo">
            <a href="<?php bloginfo("url"); ?>" title="<?php bloginfo("name"); ?>">
                <img src="<?php the_field("logo", "option"); ?>" alt="<?php bloginfo("name"); ?>">
            </a>
        </div>
    </header>
</div>