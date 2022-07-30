<?php
function addfeaturedImageSupport(){
    add_theme_support('post-thumbnails');

    add_image_size('single-page-main-image', 600, 250, true);
    add_image_size('blog-list', 220, 2120, false);
    add_image_size('image_for_slider', 300, 280, false);
}

add_action('after_setup_theme', 'addfeaturedImageSupport');


// limit excerpt length

function limitExcerptLength(){
    return 10;
}

add_filter('excerpt_length', 'limitExcerptLength');