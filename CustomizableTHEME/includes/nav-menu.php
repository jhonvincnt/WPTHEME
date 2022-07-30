<?php

// Enabling Navigation menu

register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'secondary' => __('Footer Menu'),
));

function add_additional_class_on_li($classes, $item, $args){

    if(in_array('current-menu-item', $classes)){
        $classes[] = 'active';
    }

    if(isset($args->add_li_class)){
        $classes[] = $args->add_li_class;
    }

    return $classes;
}

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


function add_links_atts($atts){
    $atts['class'] = 'nav-link';
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_links_atts');