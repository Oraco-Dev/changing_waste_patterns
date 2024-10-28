<?php

$postId = $args['postId'];

?>

<?php
$accordionItemCount = 0; // Initialize the accordion item count

// Loop to check for existence of custom fields
while (get_post_meta($args['postId'], 'accordiontitle' . ($accordionItemCount + 1), true)) {
    $accordionItemCount++;
}

for ($i = 1; $i <= $accordionItemCount; $i++) {
    $titleField = 'accordiontitle' . $i;
    $contentField = 'accordioncontent' . $i;

    $accordionTitle = get_post_meta($args['postId'], $titleField, true);
    $accordionContent = get_post_meta($args['postId'], $contentField, true);
    ?>
<div class="accordion-item">
    <div class="accordion-item__head">
        <h4>
            <?php echo $accordionTitle; ?>
        </h4>
        <img src="https://changingwastepatterns.com.au/wp-content/uploads/2024/02/icons8-plus-60.png"
            class="accordion-item__head-img" />
    </div>
    <div class="accordion-item__content">
        <p>
            <?php echo $accordionContent; ?>
        </p>
    </div>
</div>
<?php
}
?>