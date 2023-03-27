=== CNB-Recipes ===

Hello and thank you for reviewing my code!

Country Natural Beef is a sustainable cattle company looking to relaunch e-commerce.

I wanted to design a custom recipe block that could be used to promote sales for weddings and large events. Users would see relevant recipes appiear similar to suggested sales via meta fields. Below are the files I worked on and thought process.

### /template/block/recipes/block.json

This block definition provides instructions on how to register and style the block in the WordPress editor using the ACF plugin.

### /functions.php

Registered a new block type named "recipe" for the Advanced Custom Fields (ACF) plugin. The block type is defined with a name, title, description, template file path, category, icon, and keywords.

The function first checks if the "acf_register_block_type" function exists before calling it. If it does exist, the "recipe" block is registered.

### /recipe.php

Created a template file for the recipe block. The file is responsible for rendering the block's content using the Advanced Custom Fields plugin.

The template starts by defining the block's unique ID and class name based on the block's settings and attributes. The ID and class are used to apply custom styling to the block if needed.

The block's content is then rendered using PHP code. The content is structured using a HTML table with a header row and multiple body rows. The header row contains the column names, while the body rows display the data for each recipe.

The template uses the "have_rows" function to check if there are any recipes added to the block. If there are, a while loop is used to iterate through each recipe and display its data in a table row. The data is fetched using ACF's "the_sub_field" function, which retrieves the value of a sub-field within the repeater field.

The template also includes a thumbnail image for each recipe, which is fetched using the "get_sub_field" function and the "sizes" parameter to get the thumbnail size of the image.

Overall, this template provides a simple and structured way to display recipes within the WordPress editor using the ACF plugin.

### single.php

This is a PHP template file for displaying single posts in the CNB-Recipes WordPress theme.

The template uses the WordPress loop to display the post content and includes navigation links to the previous and next posts. It also checks if comments are open or if there are comments to display and loads the comments template if necessary.

Additionally, the template includes an "elseif" statement that checks if the current row layout is a "recipe_block". If it is, the template retrieves the recipe ID and displays a table with the recipe's name, collaborator, difficulty, yield, total time, description, ingredients, and instructions. It also displays the recipe image, which is retrieved using the "get_sub_field" function.


Contributors: automattic
Tags: custom-background, custom-logo, custom-menu, featured-images, threaded-comments, translation-ready

Requires at least: 4.5
Tested up to: 5.4
Requires PHP: 5.6
Stable tag: 1.0.0
License: GNU General Public License v2 or later
License URI: LICENSE

A starter theme called CNB-Recipes.

== Description ==

Description

== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload Theme and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= Does this theme support any plugins? =

CNB-Recipes includes support for WooCommerce and for Infinite Scroll in Jetpack.

== Changelog ==

= 1.0 - May 12 2015 =
* Initial release

== Credits ==

* Based on Underscores https://underscores.me/, (C) 2012-2020 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css https://necolas.github.io/normalize.css/, (C) 2012-2018 Nicolas Gallagher and Jonathan Neal, [MIT](https://opensource.org/licenses/MIT)
