<?php get_header();

$postID = get_the_ID();

$blog_posts_query = new WP_Query(
    array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC'
    )
)

?>


<main class="front-page">

    <section class="front-page__banner">
        <div class="front-page__banner-title">
            <h1>IT'S ALL ABOUT BEING WILLING <br /> TO TRY ANOTHER WAY.</h1>
        </div>
        <div class="front-page__banner-boxes">
            <div class="front-page__banner-boxes-box one">
                <h5>WE DREAM OF A FUTURE WHERE THE HOSPITALITY INDUSTRY AND OUR HOMES PRODUCE NO WASTE</h5>
                <a href="/services/hospitality-businesses/"><button class="button primary-orange">LEARN
                        MORE</button></a>
            </div>
            <div class="front-page__banner-boxes-box two">
                <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/02/Group-1.svg"
                    class="front-page__banner-boxes-box-text two" alt="" />
            </div>
            <div class="front-page__banner-boxes-box three">
                <h5>WE DREAM OF A FUTURE WHERE THE HOSPITALITY INDUSTRY AND OUR HOMES PRODUCE NO WASTE</h5>
            </div>
            <div class="front-page__banner-boxes-box four">
                <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/02/Group.svg"
                    class="front-page__banner-boxes-box-text four" alt="" />
            </div>
        </div>
    </section>

    <section class="front-page__intro"> <img
            src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Pattern4.svg"
            class="front-page__intro-icon one" alt="Green Circle Icon" />
        <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Pattern5.svg"
            class="front-page__intro-icon two" alt="Pink Square Icon" />
        <div class="container">
            <div class="front-page__intro-left">
                <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/02/CWP_Kate-min.png"
                    class="front-page__intro-left-img" alt="Kate the owner of changing waste patterns - smiling" />
            </div>
            <div class="front-page__intro-right">
                <h3 class="front-page__intro-right-title">Changing Waste Patterns <br /> one business at a time.</h3>
                <span class="intro-text">By working with businesses and consumers, we hope to reduce end-to-end waste
                    generation by looking at waste as a resource before recycling. Our founder Kate is confident that
                    Changing Waste Patterns can assist businesses to change their waste habits and in so doing, reduce
                    ongoing costs.</span>
                <a href="/about"><button class="button primary-orange">ABOUT US</button></a>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/services', null, array('isHomepage' => true, 'marginTop' => 'margin-top')) ?>

    <section class="front-page__started">
        <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Web_Image1-min-scaled.jpg"
            alt="Get started background image" class="front-page__started-img" />
        <div class="container">
            <div class="front-page__started-left">
                <div class="front-page__started-left-content">
                    <h2>GET STARTED</h2>
                    <p>Single use consumption and costs are increasing and there seems to be no way out. Changing Waste
                        Patterns is here to help. Let’s flip the negative narrative into something positive where your
                        clients and staff are all about being willing to try another way. Book a consult today and
                        together we can make a difference.</p>
                    <a href="/contact"><button class="button primary-orange">BOOK A CONSULT</button></a>
                </div>
            </div>

        </div>
    </section>

    <section class="front-page__waste">
        <div class="front-page__waste-left">
            <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/02/Product-Page-Image.jpg"
                class="front-page__waste-left-img" alt="Image about waste" />
        </div>
        <div class="front-page__waste-right">
            <div class="front-page__waste-right-content">
                <h5>EBOOK</h5>
                <h3>Living with Less Waste</h3>
                <p>"It's one little thing at a time," she says. Ben acknowledges he has a way to go to quit his plastic
                    habit, but by being more aware of his consumption and habits he feels he can make a difference, at
                    least to his little patch of the world.
                    <br />
                    <br />
                    Are you ready to kick your plastic habit? Living with Less Waste offers some handy tips which can be
                    easily embedded into your daily routine to help you and your household Change your Waste Patterns.
                </p>
                <!-- <h4>$XX.XX</h4> -->
               
               <a href="/shop"> <button class="button primary-orange">Shop Now</button></a>
            </div>
        </div>
    </section>



    <?php get_template_part('template-parts/faq', null, array('postId' => $postID)) ?>


    <section class="front-page__reviews">
        <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Web_Image4-min.jpeg"
            class="front-page__reviews-img" alt="Reviews Background Image" />
        <div class="front-page__reviews-overlay"></div>
        <div class="splide">
            <div class="splide__track">
                <div class="splide__list">
                    <?php get_template_part('template-parts/review', null, array('postId' => $postID)) ?>
                </div>
            </div>
        </div>
        <div class="slider-buttons">
            <button id="prevButton"> <img
                    src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Arrows2.svg"
                    class="front-page__reviews-btns-btn-img" alt="Previous button - slider" /></button>
            <button id="nextButton"> <img
                    src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Arrows1.svg"
                    class="front-page__reviews-btns-btn-img" alt="Previous button - slider" /></button>
        </div>
    </section>

    <section class="front-page__blogs container">
        <div class="front-page__blogs-header">
            <h3>The Pattern Changer Blog</h3>
            <a href="/blog"><button class="button light-green">ALL ARTICLES</button></a>
        </div>
        <div class="front-page__blogs-blog">
            <?php
                if ($blog_posts_query->have_posts()) {
                    while ($blog_posts_query->have_posts()) {
                        $blog_posts_query->the_post();

                        $post_id = get_the_ID();
                        $date = get_the_date();
                        $title = get_the_title();
                        $link = get_permalink();
                      
                        $image_url = get_the_post_thumbnail_url(get_the_ID());
                        $categories = get_the_category($post_id);


                        // Create an array to store category names
                        $categoryNames = array();

                        // Loops over array and adds categories to array.
                        if ($categories) {
                            foreach ($categories as $category) {
                                $categoryNames[] = $category->name;
                            }
                        }

                        // Converts array to json
                        $categoriesArray = json_encode($categoryNames);



                        get_template_part('template-parts/blog-card', null, array('title' => $title, 'link' => $link, 'imageUrl' => $image_url, 'date' => $date, 'allCategories' => $categoriesArray, 'isEvent' => false, 'eventTime' => ''));
                    }

                    wp_reset_postdata(); // Reset the query
                }
                ?>
        </div>
    </section>



    <?php get_template_part('template-parts/events', null, array()) ?>
    <?php get_template_part('template-parts/call-to-action', null, array()) ?>

</main>

<?php get_footer(); ?>