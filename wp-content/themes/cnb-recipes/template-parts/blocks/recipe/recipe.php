<?php

$className = 'recipe';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>

<div class="<?php echo $anchor; ?>class="<?php echo esc_attr( $class_name ); ?>">
    <div class="grid-x grid-margin-x">
        <div class="cell">
            <?php if (have_rows('recipe')) : ?>
                <table>
                    <thead>
                        <th></th>
                        <th>Collaborator</th>
                        <th>Difficulty</th>
                        <th>Yield</th>
                        <th>Total Time</th>
                        <th>Description</th>
                        <th>Ingredients</th>
                        <th>Instructions</th>                        
                    </thead>
                    <tbody>
                        <?php while (have_rows('recipe')) : the_row(); ?>
                            <tr>
                                <td class="text-left">
                                    <img src="<?= get_sub_field('image')['sizes']
                                    ['thumbnail']; ?>"<br/>
                                    <strong><?php the_sub_field('name'); ?></strong>
                                </td>
                                <td class="recipe-collaborator"><?php the_sub_field('collaborator'); ?></td>
                                <td class="recipe-difficulty"></td><?php the_sub_field('difficulty'); ?></td>
                                <td class="recipe-yield"><?php the_sub_field('yield'); ?></td>
                                <td class="recipe-total-time"><?php the_sub_field('total_time'); ?></td>
                                <td class="recipe-description"><?php the_sub_field('description'); ?></td>
                                <td class="recipe-ingredients"><?php the_sub_field('ingredients'); ?></td>
                                <td class="recipe-instructions"><?php the_sub_field('instructions'); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
</div>