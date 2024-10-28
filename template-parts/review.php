<?php

$postId = $args['postId'];

?>

<?php
$reviewItemCount = 0; // Initialize the review item count

// Loop to check for existence of custom fields
while (get_post_meta($args['postId'], 'reviewcontent' . ($reviewItemCount + 1), true)) {
    $reviewItemCount++;
}

for ($i = 1; $i <= $reviewItemCount; $i++) {
    $contentField = 'reviewcontent' . $i;
    $nameField = 'reviewname' . $i;
    $roleField = 'reviewrole' . $i;

    $reviewContent = get_post_meta($args['postId'], $contentField, true);
    $nameContent = get_post_meta($args['postId'], $nameField, true);
    $roleContent = get_post_meta($args['postId'], $roleField, true);
    ?>
<div class="splide__slide">
    <span class="splide__slide-content"><?php echo $reviewContent ?></span>
    <div class="splide__slide-user">
        <span class="splide__slide-user-name"><?php echo $nameContent ?></span>
        <span class="splide__slide-user-role"><?php echo $roleContent?></span>
    </div>
</div>
<?php
}
?>