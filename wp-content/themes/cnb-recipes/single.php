<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CNB-Recipes
 */

get_header();
?>

	<div class="grid-x align-center">
	<main id="primary" class="site-main">
		<?php while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<hr>
		<?php

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array('prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'cnb-recipes' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'cnb-recipes' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();

			
			get_template_part( 'template-parts/content', 'none' );


			get_sidebar();
			get_footer();


		elseif (get_row_layout() == 'recipe_block') : // End of the loop.

			$recipe_id = get_sub_field('recipe');
			?>

			<h4>recipe_name</h4>
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
					<tr>
						<td class="text-left"><img src="<?= get_sub_field('image', $recipe_id)['sizes']['thumbnail']; ?>" /></td>
							<td><?php the_field('recipe_name'); ?></td>
							<td class="recipe-collaborator"><?php the_field('collaborator', $recipe_id); ?></td>
							<td class="recipe-difficulty"></td><?php the_field('difficulty', $recipe_id); ?></td>
							<td class="recipe-yield"><?php the_field('yield', $recipe_id); ?></td>
							<td class="recipe-total-time"><?php the_field('total_time', $recipe_id); ?></td>
							<td class="recipe-description"><?php the_field('description', $recipe_id); ?></td>
							<td class="recipe-ingredients"><?php the_field('ingredients', $recipe_id); ?></td>
							<td class="recipe-instructions"><?php the_field('instructions', $recipe_id); ?></td>
				</tbody>
			</table>
						
			<?php 
		endif;

		endwhile; // End of the loop.

		?>
