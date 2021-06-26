<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
</head>
<body>
<div class="container">

    <header class="header">
        <div class="navigation">
            <?php if( has_custom_logo() ): the_custom_logo(); ?>
            <?php else: ?>
                <a  href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            <?php endif; ?>
            <label for="menu"></label>
            <input type="checkbox" id="menu">
            <?php
                $args = array(
                    'theme_location' => 'header',
                    'menu' => 'main',
                    'container' => 'nav',
                    'container_class' => 'menu',
                    'menu_class' => 'menu-list',
                    'menu_id' => '',
                    'items_wrap' => '<ul class="menu-list">%3$s</ul>'
                );
                wp_nav_menu($args);
            ?>
            <!--<div class="header-icon">
                <a class="icon-search" href="#"></a>
            </div>-->
        </div>
    </header>  


    <main class="main">
    
    <div class="header_search"><?php /* get_search_form(); */?></div>