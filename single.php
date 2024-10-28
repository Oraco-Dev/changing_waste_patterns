<?php

/*
Template Name: Single Blog Page
*/

$postID = get_the_ID();

// Post Fields
$featured_image_url = get_the_post_thumbnail_url($postID, 'full');
$title = get_the_title($postID);
$content = get_the_content('content', $postID);
$authorID = get_post_field('post_author', $postID);
$author = get_the_author_meta('display_name', $authorID);
$date = get_post_field('post_date', $postID);
$formattedDate = date('d/m/y', strtotime($date));
$dateObj = DateTime::createFromFormat('d/m/y', $formattedDate);
$formattedDateFinal = $dateObj->format('d M Y');
// Event Only Fields
$eventTime = get_post_meta($postID, 'eventtime', true);

get_header();

?>

<section class="single">
    <div class="single__banner">
        <div class="single__banner-meta">
            <h1><?php echo $title ?></h1>
        </div>
        <img src="<?php echo $featured_image_url ?>" class="single__banner-img" alt="Blog Background Image" />
    </div>
    <div class="single__content">
        <div class="single__content-meta container">
            <h2><?php echo $author ?></h2>
            <div>
                <h4>Date Created: <?php echo $formattedDateFinal ?></h4>
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