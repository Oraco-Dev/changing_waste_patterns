<?php

get_header();

$postID = get_the_ID();

?>

<main class="contact-page">

    <section class="contact-page__banner">
        <div class="contact-page__banner-left">
            <h1>GET IN TOUCH</h1>
            <?php echo do_shortcode('[gravityform id="2" title="false"]'); ?>
            <div class="contact-page__banner-left-meta">
                <p>Kate Stitfold</p>
                <p>0412 560 521</p>
                <p><a href="mailto:changingwastepatterns@gmail.com">changingwastepatterns@gmail.com</a></p>
            </div>
        </div>
        <div class="contact-page__banner-right">
            <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Web_Image1-min-scaled.jpg"
                alt="Background image of woman doing gardening" class="contact-page__banner-right-img" />
        </div>


    </section>

    <section class="contact-page__navigation">
        <div class="container">
            <div class="contact-page__navigation-boxes">
                <a href="/shop" class="contact-page__navigation-boxes-box one">
                    <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Icon7.svg"
                        class="contact-page__navigation-boxes-box-icon" alt="Navigation Icon - Shop" />
                    <button class="button primary-teal">SHOP</button>
                </a>
                <a href="/blog" class="contact-page__navigation-boxes-box two">
                    <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Icon3.svg"
                        class="contact-page__navigation-boxes-box-icon two" alt="Navigation Icon - Shop" />
                    <button class="button primary-violet">BLOG</button>
                </a>
                <a href="/events" class="contact-page__navigation-boxes-box three">
                    <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Icon4.svg"
                        class="contact-page__navigation-boxes-box-icon" alt="Navigation Icon - Shop" />
                    <button class="button light-green">EVENTS</button>
                </a>
                <a href="/services/new-businesses/" class="contact-page__navigation-boxes-box four">
                    <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Icon1.svg"
                        class="contact-page__navigation-boxes-box-icon" alt="Navigation Icon - Shop" />
                    <button class="button primary-orange">SERVICES</button>
                </a>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/call-to-action', null, array()) ?>

</main>

<?php get_footer(); ?>