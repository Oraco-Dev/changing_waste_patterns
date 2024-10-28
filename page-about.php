<?php

get_header();

?>

<main class="about-page">

    <section class="about-page__banner">

        <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Web_Image1-min-scaled.jpg"
            alt="Background image of woman doing gardening" class="about-page__banner-img" />
        <div class="about-page__banner-left">
            <h1>ABOUT US</h1>
            <span class="intro-text">Here at Changing Waste Patterns, we're on a mission to revolutionise the way we
                handle waste.
                Picture a future where the hospitality industry and our homes produce zero waste, contributing to
                cleaner oceans and reduced landfill pollution – all vital steps in combating the challenges posed by
                the climate crisis.</span>
        </div>
        <div class="about-page__banner-right">
            <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Pattern2.svg"
                alt="Shape Icons" class="about-page__banner-right-img" />
        </div>

    </section>

    <section class="about-page__founder">
        <div class="container">
            <div class="about-page__founder-left">
                <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/02/CWP_Kate-min.png"
                    alt="Image of changing waste patters owner" class="about-page__founder-left-img" />
            </div>
            <div class="about-page__founder-right">
                <h2>FOUNDER STORY</h2>
                <h5>ABOUT KATE</h5>
                <p>Do you ever wheel out your weekly bins, and question how you accumulate so much waste?"
                    <br />
                    <br />
                    My AHA moment came when studying Permaculture. My eyes were opened to a world where there can be
                    harmony between people and the environment. Permaculture cemented what I had always known, we can
                    live well with less and value what we have already.  I made a conscious decision to change my waste
                    patterns.
                    <br />
                    <br />
                    I quickly discovered this to be quite a mission in a consumer driven world where single use is the
                    norm, plastic is pervasive and there is an environmental cost to everything we own.  I was seeing
                    waste everywhere: packaging, resources, time, opportunity and money. All being wasted. I realised,
                    if I can change my habits then I can help individuals and businesses to change theirs as well.
                </p>
            </div>
        </div>
    </section>

    <section class="about-page__vision">
        <div class="container">
            <div class="about-page__vision-left">
                <h2>VISION</h2>
                <h5>A FUTURE WHERE THERE IS NO WASTE IN ORDER TO ENHANCE HEALTH AND WELL-BEING.</h5>
            </div>
            <div class="about-page__vision-right">
                <h2>MISSION</h2>
                <h5>TO EDUCATE BUSINESSES AND CONSUMERS ABOUT HOW BEST TO MANAGE THEIR WASTE, WHAT ALTERNATIVES THEY CAN
                    IMPLEMENT AND WHY IT'S NEEDED.</h5>
            </div>
        </div>
    </section>

    <section class="about-page__boxes">
        <div class="about-page__boxes-box one">
        </div>
        <div class="about-page__boxes-box two">
            <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/02/Group-1.svg"
                class="about-page__boxes-box-text two" alt="" />
        </div>
        <div class="about-page__boxes-box three">
        </div>
        <div class="about-page__boxes-box four">
            <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/02/Group.svg"
                class="about-page__boxes-box-text four" alt="" />
        </div>
    </section>

    <section class="about-page__greenwashing">
        <div class="container">
            <div class="about-page__greenwashing-left">
                <h1 class="about-page__greenwashing-left-title">NAVIGATING GREEN WASHING</h1>
                <p class="about-page__greenwashing-left-content">By misleading the public to believe that a company or
                    other entity is doing more to protect the
                    environment than it is, greenwashing promotes false solutions to the climate crisis that distract
                    from and delay concrete and credible action. Changing Waste Patterns is your guide through the
                    greenwashing noise. We're committed to providing transparent, accurate information to ensure your
                    sustainability efforts are well-informed and impactful.
                </p>
            </div>
            <div class="about-page__greenwashing-right">
                <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Images1.png"
                    class="about-page__greenwashing-right-img" class="" />
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/services', null, array('isHomepage' => false, 'marginTop' => '')) ?>

    <section class="about-page__navigation">
        <div class="container">
            <div class="about-page__navigation-boxes">
                <a href="/shop" class="about-page__navigation-boxes-box one">
                    <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Icon7.svg"
                        class="about-page__navigation-boxes-box-icon" alt="Navigation Icon - Shop" />
                    <button class="button primary-teal">SHOP</button>
                </a>
                <a href="/blog" class="about-page__navigation-boxes-box two">
                    <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Icon3.svg"
                        class="about-page__navigation-boxes-box-icon two" alt="Navigation Icon - Blog" />
                    <button class="button primary-violet">BLOG</button>
                </a>
                <a href="/events" class="about-page__navigation-boxes-box three">
                    <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Icon4.svg"
                        class="about-page__navigation-boxes-box-icon" alt="Navigation Icon - Events" />
                    <button class="button light-green">EVENTS</button>
                </a>
                <a href="/contact" class="about-page__navigation-boxes-box four">
                    <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Icon6.svg"
                        class="about-page__navigation-boxes-box-icon" alt="Navigation Icon - Mail" />
                    <button class="button primary-orange">GET IN TOUCH</button>
                </a>
            </div>
        </div>
    </section>

</main>

<? get_footer(); ?>