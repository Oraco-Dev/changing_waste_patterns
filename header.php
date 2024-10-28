<?php

$headerHomeMenu = array(
    'menu' => 'Header - Menu',
    // Specify the menu name here
    'menu_class' => 'header__inner-menu-item',
    'menu_id' => 'header__inner-menu',
  );

  $serviceMenuItems = wp_get_nav_menu_items('Services - Menu');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="author" content="Oraco Agency">
    <meta name="description" content="Changing Waste Patterns">
    <meta name="keywords" content="Waste, Hospitality, Business, Recycling">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changing Waste Patterns</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://use.typekit.net/vop5oal.css">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9P53F4HKLZ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-9P53F4HKLZ');
    </script>
    <?php wp_head(); ?>
</head>

<body>

    <div class="bt__button">
        <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/02/icons8-up-arrow-100.png"
            alt="Back to top arrow" class="bt__button-img" />
    </div>

    <div class="menu">
        <div class="container">
            <div class="menu__inner">
                <a href="/">HOME</a>
                <a href="/about">ABOUT</a>
                <div class="accordion mobile-menu">
                    <div class="accordion-item mobile-menu">
                        <div class="accordion-item__head mobile-menu">
                            <a>
                                SERVICES
                            </a>
                            <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/02/icons8-chevron-50-1.png"
                                class="accordion-item__head-img" />
                        </div>
                        <div class="accordion-item__content mobile-menu">
                            <?php

                            $child_menu_items = array();

              // Loop through the menu items
              foreach ($serviceMenuItems as $menu_item) {
                if ($menu_item->menu_item_parent != 0) {
                  // This menu item has a parent, so it's a child menu item
                  $child_menu_items[] = $menu_item;
                }
              }

              // Check if there are child menu items
              if (!empty($child_menu_items)) {
                // Loop through the child menu items
                foreach ($child_menu_items as $child_menu_item) {
                  // Display the child menu item's title and URL
                  echo '<a href="' . esc_url($child_menu_item->url) . '">' . esc_html($child_menu_item->title) . '</a>';
                }
              }
              ?>
                        </div>
                    </div>
                </div>
                <a href="/blog">BLOG</a>
                <a href="/shop">ABOUT</a>
                <a href="/contact">CONTACT</a>
            </div>
        </div>
    </div>

    <!-- MEGA MENU -->

    <!-- <header class="header">
        <div class="header__container">
            <div class="header__container-left">
                <div class="logo">
                    <a href="/home"><img
                            src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Logo.svg"
                            class="logo__img" />
                    </a>
                </div>
                <input type="radio" name="slider" id="menu-btn">
                <input type="radio" name="slider" id="close-btn">
            </div>
            <div class="header__container-right">
                <ul class="header__links">
                    <label for="close-btn" class="header__btn close-btn"><i class="fas fa-times"></i></label>
                    <li><a href="/home">Home</a></li>
                    <li>
                        <a href="#" class="link desktop-item">
                            <input type="checkbox" id="showMega">
                            <label for="showMega" class="mobile-item">Services</label>
                            <span class="mask">
                                <div class="link-container">
                                    <span class="link-title1 title">Services</span>
                                    <span class="link-title2 title">Services</span>
                                </div>
                            </span>
                            <div class="link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-chevron-down icon" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-chevron-down icon" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </div>

                        </a>
                        <div class="header__box">
                            <div class="header__box-content">

                                <div class="header__box-content-row">
                                    
                                    <div class="header__box-content-row-column">
                                        <header>Design Services</header>
                                        <ul>
                                            <li><a href="#">Graphics</a></li>
                                            <li><a href="#">Vectors</a></li>
                                            <li><a href="#">Business cards</a></li>
                                            <li><a href="#">Custom logo</a></li>
                                        </ul>
                                    </div>
                                    <div class="header__box-content-row-column">
                                        <header>Email Services</header>
                                        <ul>
                                            <li><a href="#">Personal Email</a></li>
                                            <li><a href="#">Business Email</a></li>
                                            <li><a href="#">Mobile Email</a></li>
                                            <li><a href="#">Web Marketing</a></li>
                                        </ul>
                                    </div>
                                    <div class="header__box-content-row-column">
                                        <img src="https://fadzrinmadu.github.io/hosted-assets/responsive-mega-menu-and-dropdown-menu-using-only-html-and-css/img.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <div>
                                    <div class="header__box-content-cta">
                                        <button>ABCDEFG</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="header__cta">
                    <button class="button primary-orange">BOOK A CONSULT</button>
                </div>
                <div class="hamburger">
                    <div class="hamburger__icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>

            <label for="menu-btn" class="btn menu-btn desktop-only"><i class="fas fa-bars"></i></label>


        </div>
    </header> -->

    <!-- REGULAR MENU -->

    <header class="header">
        <div class="header__container">
            <div class="header__container-left">
                <div class="logo">
                    <a href="/home"><img
                            src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Logo.svg"
                            class="logo__img" />
                    </a>
                </div>

            </div>
            <div class="header__container-right">
                <div class="header__menu desktop-only">
                    <?php
                        wp_nav_menu($headerHomeMenu);
                    ?>
                </div>
                <div class="header__cta">
                    <a href="/contact"><button class="button primary-orange">BOOK A CONSULT</button></a>
                </div>
                <div class="hamburger">
                    <div class="hamburger__icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>