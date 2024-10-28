<?php
$date = $args['date'];
$link = $args['link'];
$title = $args['title'];
$image_url = $args['imageUrl'];
$all_categories = $args['allCategories'];
$all_categories_json = json_decode($all_categories);
$isEvent = $args['isEvent'];
$eventTime = $args['eventTime'];

$categoryClasses = 'blog-card__category';

if ($isEvent) {
    $categoryClasses .= ' event';
}

?>

<a href="<?php echo $link ?>" class="blog-card" data-category='<?php echo $all_categories ?>'>
    <div class="blog-card__categories">
        <?php
        foreach ($all_categories_json as $category) {
            echo '<div class="' . $categoryClasses . '"><span>' . $category . '</span></div>';
        }
        ?>
    </div>

    <div class="blog-card__image-container">
        <img src="<?php echo esc_url($image_url) ?>" class="blog-card__img" />
        <div class="blog-card__overlay"></div> <!-- Overlay for the image -->
        <?php if ($isEvent): ?>
        <div class="blog-card__event">
            <?php
            echo '<div class="blog-card__event-time"><span>' . $eventTime . '</span></div>';
            ?>
        </div>
        <?php endif; ?>
    </div>
    <div class="blog-card__meta">
        <span class="blog-card__meta-date">
            <?php echo $date ?>
        </span>
        <h4 class="blog-card__meta-title">
            <?php echo $title ?>
        </h4>
        <span class="blog-card__meta-btn">Read More <span><img
                    src="https://changingwastepatterns.com.au/wp-content/uploads/2024/02/icons8-right-arrow-50-1.png"
                    class="blog-card__meta-img" /></span></span>
    </div>
</a>