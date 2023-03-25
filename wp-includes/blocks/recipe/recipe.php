<?php

/**
 * recipe Block Template.
 *
 * @param    array        $block      The block settings and attributes.
 * @param    string       $content    The block inner HTML (empty).
 * @param    bool         $is_preview True during AJAX preview.
 * @param    (int|string) $post_id    The post ID this block is saved to.
 */
 
// Create id attribute allowing for custom "anchor" value.
$id = 'recipe-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'recipe';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text             = get_field('recipe') ?: 'Place your recipe title here';
$collaborator     = get_field('collaborator') ?: 'Stock Pot Collective';
$image            = get_field('image') ?: 295;
$total_time       = get_field('total_time') ?: '30 minutes';
$yield            = get_field('yield') ?: '4 servings';
$difficulty       = get_field('difficulty') ?: 'Easy';
$ingredients      = get_field('ingredients') ?: 'List ingredients here';
$instructions     = get_field('instructions') ?: 'Describe the process.';
$background_color = get_field('background_color');
$text_color       = get_field('text_color');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <blockquote class="recipe-blockquote">
        <span class="recipe-text"><?php echo $text; ?></span>
        <span class="recipe-collaborator"><?php echo $collaborator; ?></span>
        <span class="recipe-total-time"><?php echo $total_time; ?></span>
        <span class="recipe-yield"><?php echo $yield; ?></span>
        <span class="recipe-difficulty"><?php echo $difficulty; ?></span>
        <span class="recipe-ingredients"><?php echo $ingredients; ?></span>
        <span class="recipe-instructions"><?php echo $instructions; ?></span>
    </blockquote>
    <div class="recipe-image">
        <?php echo wp_get_attachment_image( $image, 'full' ); ?>
    </div>
    <style type="text/css">
        #<?php echo $id; ?> {
            background: <?php echo $background_color; ?>;
            color: <?php echo $text_color; ?>;
        }
    </style>
</div>