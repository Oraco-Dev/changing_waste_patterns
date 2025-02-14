<?php

/*
Template Name: Blogs Archive Page
*/

get_header();

include_once 'php/custom-functions.php';

// GET POST CATEGORIES
$categories = get_terms(
    array(
        'taxonomy' => 'category',
        'hide_empty' => 1,
        'object_ids' => get_posts(
            array(
                'post_type' => 'post',
                'posts_per_page' => -1,
                'fields' => 'ids',
            )
        ),
    )
);

$blog_posts_query = new WP_Query(
    array(
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC'
    )
)



?>

<section class="blog-filter">
    <div class="container">
        <div class="blog-filter__inner">
            <div class="blog-filter__badges">
                <div class="blog-filter__badges-title">
                    <h1>The Pattern Changer Blog</h1>
                </div>
                <div class="blog-filter__badges-badge">
                    <?php
                    foreach ($categories as $category) {
                        $categoryName = $category->name;
                        $categorySlug = $category->slug;
                        $categoryLink = get_category_link($category->cat_ID);
                        $randomIndex = generateRandomIndex($hexCodes, $usedIndices);

                        get_template_part('template-parts/category-badge', null, array('categoryName' => $categoryName, 'categorySlug' => $categorySlug, 'categoryLink' => $categoryLink, 'randomHexCode' => $randomIndex));
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog">
    <div class="container">
        <div class="blog__inner">
            <div class="blog__row">
                <?php
                if ($blog_posts_query->have_posts()) {
                    while ($blog_posts_query->have_posts()) {
                        $blog_posts_query->the_post();
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

                        // Converts array to json
                        $categoriesArray = json_encode($categoryNames);

                        get_template_part('template-parts/blog-card', null, array('link' => $link, 'title' => $title, 'imageUrl' => $featured_image_url, 'allCategories' => $categoriesArray,  'isEvent' => false, 'date' => $date, 'eventTime' => ''));
                    }
                } else {
                    "<h4> Oops, there doesn't seem to be any blogs right now.";
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