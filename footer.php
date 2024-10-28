<!-- WORDPRESS TEMPLATE FOR FOOTER -->

<?php
    $args = array(
        'post_type' => 'partners', // Your custom post type name
        'posts_per_page' => -1, // To get all posts
        'order' => 'ASC',
    );

    $partners_query = new WP_Query($args);
?>

<footer class="footer">
    <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Pattern5.svg"
        alt="Colourful Shape - Pink Square" class="footer__icon one" />
    <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/02/Vector-1.svg"
        alt="Colourful Shape - Yellow Square" class="footer__icon two" />
    <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Pattern4.svg"
        alt="Colourful Shape - Green Circle" class="footer__icon three" />
    <div class="container">
        <section class="footer__top">
            <h5>OUR PARNTERS:</h5>
            <?php
                if ($partners_query->have_posts()) :
                    while ($partners_query->have_posts()) :
                        $partners_query->the_post();
                        $partner_link = get_post_meta(get_the_ID(), 'link', true); // Custom field for link
                        $partner_image = get_the_post_thumbnail_url(); // Featured image URL

                        // Output the HTML for each partner
                        echo '<a href="' . esc_url($partner_link) . '" target="_blank"><img src="' . esc_url($partner_image) . '" alt="' . esc_attr(get_the_title()) . '" class="footer__top-img" /></a>';
                  
                    endwhile;
                    wp_reset_postdata();
                endif;
            ?>
        </section>
        <section class="footer__middle">
            <div class="footer__middle-col one">
                <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Logo1.svg"
                    alt="Changing Waste Patterns - Logo" />
                <div class="footer__middle-col-meta">
                    <p>Kate Stitfold</p>
                    <p>0412 560 521</p>
                    <p><a href="mailto:changingwastepatterns@gmail.com">changingwastepatterns@gmail.com</a></p>
                </div>
            </div>
            <div class="footer__middle-col two">
                <div class="footer__middle-col-meta">
                    <h5>QUICK LINKS</h5>
                    <a href="/" target="_blank">Home</a>
                    <a href="/about" target="_blank">About us</a>
                    <a href="/services" target="_blank">Services</a>
                    <a href="/blog" target="_blank">Blog</a>
                    <a href="/shop" target="_blank">Shop</a>
                    <a href="/contact" target="_blank">Contact</a>
                </div>
            </div>
            <div class="footer__middle-col three">
                <div class="footer__middle-col-meta">
                    <h5>ACKNOWLEDGEMENT OF COUNTRY</h5>
                    <p>Changing Waste Patterns acknowledges Nerm/Nairm as a living system and the Bunurong and Wurudjeri
                        people and their living connection to Country through their Elders past, present and emerging.
                        We acknowledge the migration paths of all our ancestors as we come together to advance our
                        positive environmental outcomes.</p>
                </div>
        </section>
    </div>
    <section class="footer__bottom">
        <div class="footer__bottom-left">
            <p> ©
                <?php echo do_shortcode('[current_year]'); ?>
                Changing Waste Patterns | Website by <a href="https://oraco.com.au" target="_blank">Oraco</a>
            </p>

        </div>
        <div class="footer__bottom-middle">
            <a href="">
                <p>Privacy Policy</p>
            </a>
        </div>
        <div class="footer__bottom-right">
            <p>Follow us on socials</p>
            <div class="footer__bottom-right-socials">
                <a href="https://www.instagram.com/changingwastepatterns/" target="_blank"><img
                        src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Insta.svg"
                        alt="Instagram Icon" class="footer__bottom-right-socials-icon" /></a>
                <a href="https://www.facebook.com/profile.php?id=61555840543174" target="_blank"><img
                        src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_FB.svg"
                        alt="Facebook Icon" class="footer__bottom-right-socials-icon" /></a>
            </div>
        </div>
    </section>
</footer>



<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var splide = new Splide('.splide', {
        type: 'loop',
        drag: 'free',
        snap: true,
        perPage: 1,
        pagination: false,
        arrows: false,
        // breakpoints: {
        //     600: {
        //         perPage: 1,
        //         padding: "40px",
        //         gap: '10px',
        //     },
        // }

    });

    splide.mount();

    var prevButton = document.getElementById('prevButton');
    var nextButton = document.getElementById('nextButton');

    // Bind click events to custom buttons
    prevButton.addEventListener('click', function() {
        console.log('prev');
        splide.go('+1');
    });

    nextButton.addEventListener('click', function() {
        splide.go('-1');
    });
});
</script>

</body>

</html>

<?php wp_footer(); ?>