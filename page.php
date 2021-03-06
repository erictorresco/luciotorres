<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * To generate specific templates for your pages you can use:
 * /mytheme/templates/page-mypage.twig
 * (which will still route through this PHP file)
 * OR
 * /mytheme/page-mypage.php
 * (in which case you'll want to duplicate this file and save to the above path)
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

use Timber;

$context = Timber::context();

$timber_post     = new Timber\Post();
$context['post'] = $timber_post;
$templates = ['page-' . $timber_post->post_name . '.twig', 'page.twig'];
if (is_front_page()) {
    $args = ['posts_per_page' => 5];
    $context['posts'] = Timber::get_posts($args);
    array_unshift($templates, 'front-page.twig');
}

Timber::render($templates, $context);


// $data = Timber::get_context();
// $data['page'] = new TimberPost();

// $templates = array('page.twig');
// if (is_front_page()) {

//     // get latest three posts
//     $args = array(
//         'posts_per_page' => 3
//     );
//     $data['posts'] = Timber::get_posts($args);

//     // add your twig view to the front of the templates array
//     array_unshift($templates, 'front-page.twig');
// }

// Timber::render($templates, $data);
