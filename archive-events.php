<?php
get_header();

/*
Template Name: Events Archive Page
*/

require_once(get_template_directory() . '/php/custom-functions.php');


$events_posts_query = new WP_Query(
    array(
        'post_type' => 'events',
        'orderby' => 'date',
        'order' => 'DESC'
        )
    )
        
        

?>

<section class="events-page">
    <div class="container">
        <h1 class="events-page__title">UPCOMING EVENTS</h1>
        <div class="events-page__inner">
            <div class="events-page__row">
                <?php
                if ($events_posts_query->have_posts()) {
                    while ($events_posts_query->have_posts()) {
                        $events_posts_query->the_post();
                        $post_id = get_the_ID();
                        $link = get_permalink();
                        $title = get_the_title();
                        $excerpt = get_the_excerpt();
                        $featured_image_url = get_the_post_thumbnail_url(get_the_ID());
                        // Retrieve the categories assigned to the current post
                        $categories = get_the_category($post_id);
                        $date = get_the_date();


                        // Create an array to store category names
                        $categoryNames = array();

                        // Loops over array and adds categories to array.
                        if ($categories) {
                            foreach ($categories as $category) {
                                $categoryNames[] = $category->name;
                            }
                        }

                        $outputEventTime = convertDateFormat($date);


                        // Converts array to json
                        $categoriesArray = json_encode($categoryNames);

                        get_template_part('template-parts/blog-card', null, array('link' => $link, 'title' => $title, 'imageUrl' => $featured_image_url, 'allCategories' => $categoriesArray, 'date' => $date, 'isEvent' => true, 'eventTime' => $outputEventTime));
                    }
                } 
                // Restore original post data
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>

<?php
get_template_part('template-parts/call-to-action', null, array());
?>

<?php get_footer() ?>