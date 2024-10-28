<?php get_header();

/*
Template Name: Services Pages
*/

// post content
$postID = get_the_ID();
$featured_image_url = get_the_post_thumbnail_url($postID, 'full');
$title = get_the_title($postID);
$content = get_the_content($postID);

?>

<main class="service-page">

    <section class="service-page__waste">
        <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/01/CWP_Pattern1.svg"
            class="service-page__waste-icon" alt="Pink Icons" />
        <div class="service-page__waste-left">
            <img src="<?php echo $featured_image_url ?>" class="service-page__waste-left-img" alt="Image about waste" />
        </div>
        <div class="service-page__waste-right">
            <div class="service-page__waste-right-content">
                <span class="service-page__waste-right-content-services">OUR SERVICES</span>
                <h1><?php echo $title ?></h1>
                <p><?php echo $content ?></p>
                <a href="/contact"><button class="button primary-orange">GET IN TOUCH</button></a>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/faq', null, array('postId' => $postID)) ?>
    <?php get_template_part('template-parts/events', null, array()) ?>
    <?php get_template_part('template-parts/call-to-action', null, array()) ?>

</main>

<?php get_footer(); ?>