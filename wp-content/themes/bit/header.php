<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bit
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.cdnfonts.com/css/acumin-pro" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper">
    <header class="header <?php if(is_page([7,9,155])):?>header_white<?php else :?>header_black<?php endif;?>">
        <div class="header__main">
            <div class="header__container container">
                <div class="header__row">
                    <a href="<?php echo home_url() ?>" class="header__logo logo">
                        <img src="<?php echo get_field('logo', 'options')['url'] ?>" alt="logo">
                    </a>
                    <nav class="header__menu menu" data-da="mobile-header__body, 0, 992">
                        <?php wp_nav_menu(['menu_class' => 'menu__list', 'add_li_class'  => 'menu__item', 'link_class'   => 'menu__link']); ?>
                    </nav>
                    <a href="<?php echo get_field('button', 'options')['url'] ?>" class="header__get-btn btn btn_small"><span><?php echo get_field('button', 'options')['title'] ?></span></a>
                    <button class="header__burger">
                        <span></span><span></span><span></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="header__mobile mobile-header">
            <div class="mobile-header__inner">
                <div class="mobile-header__container container">
                    <div class="mobile-header__body"></div>
                </div>
            </div>
        </div>
    </header>