<?php

$events_query = new WP_Query(
    array(
        'post_type' => 'events',
        'posts_per_page' => 2,
        'orderby' => 'date',
        'order' => 'DESC'
    )
);

require_once(get_template_directory() . '/php/custom-functions.php');

?>


<section class="events">
    <div class="container">
        <div class="events__header">
            <h3>UPCOMING EVENTS</h3>
            <h4>Lunch and Learn</h4>
        </div>
        <div class="events__blog">
            <?php
                if ($events_query->have_posts()) {
                    while ($events_query->have_posts()) {
                        $events_query->the_post();

                        $postId = get_the_ID();
                        $date = get_the_date();
                        $title = get_the_title();
                        $link = get_permalink();
                        $eventTime = get_post_meta($postId, 'eventtime', true);
                        $imageUrl = get_the_post_thumbnail_url(get_the_ID());
                        $categories = get_the_category($postId);


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

                        $outputEventTime = convertDateFormat($date);

                        get_template_part('template-parts/blog-card', null, array('title' => $title, 'link' => $link, 'imageUrl' => $imageUrl, 'date' => $date, 'allCategories' => $categoriesArray, 'isEvent' => true, 'eventTime' => $outputEventTime));
                    }

                    wp_reset_postdata(); // Reset the query
                } else {
                    echo '<h2 class="events__blog-empty">No upcoming events, check back soon!</h2>';
                }
                ?>
        </div>
        <?php
            // Output the button only if there are events
            if ($events_query->have_posts()) {
        ?>
        <div class="events__button">
            <a href="/events"><button class="button primary-orange">ALL EVENTS</button></a>
        </div>
        <?php } ?>
    </div>


</section>