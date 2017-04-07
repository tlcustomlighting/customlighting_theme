<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>?version=1.0">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body<?php body_class(); ?>>
        <div class="row login">
            <div class="col-sm-6 title"><a href="<?php echo home_url();?>"><h2><strong>tL<span style="color:red;">*</span> Custom Lighting</strong></h2></a></div>
            <div class="col-sm-3 text-right"></div>
            <div class="col-sm-1"><a href="<?php echo get_page_link(97); ?>"></a></div>
            <div class="col-sm-2"></div>
         </div>
         <div class="row banner header">
            <div class="col-md-4 text-center">
                <h2 class="text-nowrap"><span><a href="<?php echo home_url(); ?>" style="text-decoration:none;">tL<span style="color:red;">*</span> Custom Lighting</a></span></h2>
            </div>
            <div class="col-md-8 text-center">
                <nav class="navbar navbar-default">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#customBar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="site-nav collapse navbar-collapse" id="customBar">
                        <div class="main-nav">
                            <!-- Navigation menu for website built with wordpress. Page links are retrieved from the wordpress admin database. Set visible pages by navigating to Appearence-menus in dashboard.-->
                            <?php $args = array('theme_location' => 'main'); ?>
                            <?php wp_nav_menu( $args ); ?>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background-color:lightgray;">Company<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4 text-center">
                                    <?php $args2 = array('theme_location' => 'com-sub'); ?>
                                    <?php wp_nav_menu($args2); ?>
                                </div>
                                <div class="col-sm-4"></div>
                            </ul> 
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
         </div>
         <div class="container-fluid index">