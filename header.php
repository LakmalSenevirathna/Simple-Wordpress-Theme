<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' )  ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/theme.css">
    <title>
        <?php bloginfo('name'); ?> | 
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <?php wp_head(); ?>
</head>
<body class="bg-gray-200">
    <section class="head-section">
        <div class="container flex mx-auto">
            <a href="http://localhost/wordpress/" class=""><h1 class="text-4xl sm:text-6xl lg:text-7xl leading-none font-extrabold tracking-tight text-indigo-800 mt-6 mb-6
                sm:mt-14 sm:mb-10 pl-5 sm:pl-5 lg:pl-0"><?php bloginfo('name'); ?></h1></a>
        </div>
    </section>