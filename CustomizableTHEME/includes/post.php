<?php

function create_slider_post_type(){
    
    $args = array(
        'labels'=> array(
            'name' => 'Slider',
            'singular_name' => 'Slider'
        ),
        'description'=> ' Post type for post slider',
        'supports' => array(
            'title',
            'editor',
            //'author',
            //'excerpt',
            'thumbnail',
            //'comment',
        ),
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => true,
    );
    
    
    register_post_type('slider', $args);
}

add_action('init','create_slider_post_type');