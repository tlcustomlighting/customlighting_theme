<?php
//Include custom stylesheet style.css
function customLighting_resources(){
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'customLighting_resources');

//Navigation Menu
register_nav_menus(array(
    'main' => __('Main Menu')
));

//Company sub-menu
register_nav_menus(array(
    'com-sub' => __('Company Sub Menu')
));

/* Widget Locations */
function widgetInit(){
    register_sidebar(array('name' => 'Sidebar', 'id'=> 'sidebar1'));
    
    register_sidebar(array('name' => 'Sidebar', 'id'=> 'sidebar2'));
}
add_action('widgets_init', 'widgetInit');
/* Image Categories and Tags */
function wptp_add_categories_to_attachments(){
    register_taxonomy_for_object_type('category', 'attachment');
}
add_action('init', 'wptp_add_categories_to_attachments');

function wptp_add_tags_to_attachments(){
    register_taxonomy_for_object_type('post_tag', 'attachment');
}
add_action('init', 'wptp_add_tags_to_attachments');

function attachment_search($query){
    if($query->is_search){
        $query->set('post_type', array('post', 'attachment'));
        $query->set('post_status', array('publish', 'inherit'));
    }
    return $query;
}
add_filter('pre_get_posts', 'attachment_search');
?>