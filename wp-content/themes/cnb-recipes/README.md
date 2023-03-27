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

### Other considerations.

I wasn't able to address any aesthetics for this project in the alloted time but plan to continue this process. I'd also like to write tests for the block and add a custom post type for recipes.














[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

_s
===

Hi. I'm a starter theme called `_s`, or `underscores`, if you like. I'm a theme meant for hacking so don't use me as a Parent Theme. Instead try turning me into the next, most awesome, WordPress theme out there. That's what I'm here for.

My ultra-minimal CSS might make me look like theme tartare but that means less stuff to get in your way when you're designing your awesome theme. Here are some of the other more interesting things you'll find here:

* A modern workflow with a pre-made command-line interface to turn your project into a more pleasant experience.
* A just right amount of lean, well-commented, modern, HTML5 templates.
* A custom header implementation in `inc/custom-header.php`. Just add the code snippet found in the comments of `inc/custom-header.php` to your `header.php` template.
* Custom template tags in `inc/template-tags.php` that keep your templates clean and neat and prevent code duplication.
* Some small tweaks in `inc/template-functions.php` that can improve your theming experience.
* A script at `js/navigation.js` that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It's enqueued in `functions.php`.
* 2 sample layouts in `sass/layouts/` made using CSS Grid for a sidebar on either side of your content. Just uncomment the layout of your choice in `sass/style.scss`.
Note: `.no-sidebar` styles are automatically loaded.
* Smartly organized starter CSS in `style.css` that will help you to quickly get your design off the ground.
* Full support for `WooCommerce plugin` integration with hooks in `inc/woocommerce.php`, styling override woocommerce.css with product gallery features (zoom, swipe, lightbox) enabled.
* Licensed under GPLv2 or later. :) Use it to make something cool.

Installation
---------------

### Requirements

`_s` requires the following dependencies:

- [Node.js](https://nodejs.org/)
- [Composer](https://getcomposer.org/)

### Quick Start

Clone or download this repository, change its name to something else (like, say, `megatherium-is-awesome`), and then you'll need to do a six-step find and replace on the name in all the templates.

1. Search for `'_s'` (inside single quotations) to capture the text domain and replace with: `'megatherium-is-awesome'`.
2. Search for `_s_` to capture all the functions names and replace with: `megatherium_is_awesome_`.
3. Search for `Text Domain: _s` in `style.css` and replace with: `Text Domain: megatherium-is-awesome`.
4. Search for <code>&nbsp;_s</code> (with a space before it) to capture DocBlocks and replace with: <code>&nbsp;Megatherium_is_Awesome</code>.
5. Search for `_s-` to capture prefixed handles and replace with: `megatherium-is-awesome-`.
6. Search for `_S_` (in uppercase) to capture constants and replace with: `MEGATHERIUM_IS_AWESOME_`.

Then, update the stylesheet header in `style.css`, the links in `footer.php` with your own information and rename `_s.pot` from `languages` folder to use the theme's slug. Next, update or delete this readme.

### Setup

To start using all the tools that come with `_s`  you need to install the necessary Node.js and Composer dependencies :

```sh
$ composer install
$ npm install
```

### Available CLI commands

`_s` comes packed with CLI commands tailored for WordPress theme development :

- `composer lint:wpcs` : checks all PHP files against [PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
- `composer lint:php` : checks all PHP files for syntax errors.
- `composer make-pot` : generates a .pot file in the `languages/` directory.
- `npm run compile:css` : compiles SASS files to css.
- `npm run compile:rtl` : generates an RTL stylesheet.
- `npm run watch` : watches all SASS files and recompiles them to css when they change.
- `npm run lint:scss` : checks all SASS files against [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/).
- `npm run lint:js` : checks all JavaScript files against [JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/).
- `npm run bundle` : generates a .zip archive for distribution, excluding development and system files.

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!
