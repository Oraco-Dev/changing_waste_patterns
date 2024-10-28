<?php

require_once(get_template_directory() . '/php/custom-functions.php');

/*
Template Name: Single Event Page
*/
$current_post = get_queried_object();
$postID = get_the_ID();

// Post Fields
$featured_image_url = get_the_post_thumbnail_url($postID, 'full');
$title = get_the_title($postID);
$content = get_the_content('content', $postID);
$authorID = get_post_field('post_author', $postID);
$author = get_the_author_meta('display_name', $authorID);


// Event Only Fields
$eventTime = get_post_meta($postID, 'eventtime', true);
$outputEventTime = convertDateFormat($eventTime);

// Next and previous blog links
// $previous_post_link = get_previous_post(true);
// $next_post_link = get_next_post(true);
// $previous_post_url = get_permalink($previous_post_link);
// $next_post_url = get_permalink($next_post_link);

get_header();

?>

<section class="single-events">
    <div class="single-events__banner">
        <div class="single-events__banner-meta">
            <h1><?php echo $title ?></h1>
        </div>
        <img src="<?php echo $featured_image_url ?>" class="single-events__banner-img" alt="Blog Background Image" />
    </div>
    <div class="single-events__content">
        <div class="single-events__content-meta container">
            <h2><?php echo $author ?></h2>
            <div>
                <h4>Event Date: <?php echo $outputEventTime ?></h4>
            </div>
        </div>
        <div class="container">
            <p><?php echo $content ?></p>
        </div>
    </div>
</section>

<?php
get_template_part('template-parts/call-to-action', null, array());
?>



<?php
get_footer();
?>