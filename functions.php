<?php
//Include custom stylesheet style.css
function customLighting_resources(){
    //Register CSS folder Files
    wp_register_style('style', get_stylesheet_uri());
    wp_register_style('normalize', get_template_directory_uri().'/css/normalize.css', false, '1.1', 'all');
    wp_register_style('header', get_template_directory_uri().'/css/header.css', false, '1.1', 'all');
    wp_register_style('footer', get_template_directory_uri().'/css/footer.css', false, '1.1', 'all');
    wp_register_style('home', get_template_directory_uri().'/css/home.css', false, '1.1', 'all');
    wp_register_style('page_temp', get_template_directory_uri().'/css/page_temp.css', false, '1.1', 'all');
    wp_register_style('fixtures_and_shades', get_template_directory_uri().'/css/fixtures_and_shades.css', false, '1.1', 'all');
    wp_register_style('attachments', get_template_directory_uri().'/css/attachments.css', false, '1.1', 'all');
    wp_register_style('news_page', get_template_directory_uri().'/css/news_page.css', false, '1.1', 'all');
    wp_register_style('overview', get_template_directory_uri().'/css/overview.css', false, '1.1', 'all');
    wp_register_style('clients_page', get_template_directory_uri().'/css/clients_page.css', false, '1.1', 'all');
    wp_register_style('desktop', get_template_directory_uri().'/css/desktop.css', false, '1.1', 'all');
    
    // Enqueue CSS Folder Files
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css', false, '1.1', 'all');
    wp_enqueue_style('header', get_template_directory_uri().'/css/header.css', false, '1.1', 'all');
    wp_enqueue_style('footer', get_template_directory_uri().'/css/footer.css', false, '1.1', 'all');
    wp_enqueue_style('home', get_template_directory_uri().'/css/home.css', false, '1.1', 'all');
    wp_enqueue_style('page-temp', get_template_directory_uri().'/css/page_temp.css', false, '1.1', 'all');
    wp_enqueue_style('fixtures_and_shades', get_template_directory_uri().'/css/fixtures_and_shades.css', false, '1.1', 'all');
    wp_enqueue_style('attachments', get_template_directory_uri().'/css/attachments.css', false, '1.1', 'all');
    wp_enqueue_style('news_page', get_template_directory_uri().'/css/news_page.css', false, '1.1', 'all');
    wp_enqueue_style('overview', get_template_directory_uri().'/css/overview.css', false, '1.1', 'all');
    wp_enqueue_style('client_page', get_template_directory_uri().'/css/clients_page.css', false, '1.1', 'all');
    wp_enqueue_style('desktop', get_template_directory_uri().'/css/desktop.css', false, '1.1', 'all');
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
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 50, 50 );
?>