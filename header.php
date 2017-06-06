<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie" lang="en">
<![endif]-->
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>?version=1.0">
        <title><?php bloginfo('name'); ?></title>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-97705556-1', 'auto');
            ga('send', 'pageview');
	    </script>
        <?php wp_head(); ?>
    </head>
    <body<?php body_class(); ?>>
        <div class="row login">
            <div class="col-sm-6 title">
                <a href="<?php echo home_url();?>" style="text-decoration:none; color:black;"><h3><strong>tL<span style="color:red;">*</span> Custom Lighting</strong></h3></a>
            </div>
            <div class="col-sm-3 text-right"><a href="<?php echo get_page_link(1598); ?>"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;</a></div>
            <div class="col-sm-3 social">
            	<ul>
                    <li><a href="https://www.instagram.com/tlcustomlighting"><i class="fa fa-instagram fa-2x"></i></a></li>
                    <li><a href="https://www.facebook.com/tlcustomlighting"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/townsend-lighting"><i class="fa fa-linkedin fa-2x"></i></a></li>
                    <li><a href="https://www.pinterest.com/tlcustomlight"><i class="fa fa-pinterest fa-2x"></i></a></li>
                </ul>
            </div>
         </div>
         <div class="row banner header">
            <div class="col-md-3 text-center">
                <h2 class="text-nowrap"><span><a href="<?php echo home_url(); ?>" style="text-decoration:none;">tL<span style="color:rgb(175, 39, 47);">*</span> Custom Lighting</a></span><span class="owner" style="color:gray;margin-left:7px;"><strong></strong></span><span class="phone"></span><span class="email"></span></h2>
            </div>
            <div class="col-md-9 text-center">
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
                            <a href="#" class="second-nav dropdown-toggle " data-toggle="dropdown" style="background-color:lightgray;">Company<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <div class="col-sm-12 text-center" style="font-size: 10pt;">
                                    <?php $args2 = array('theme_location' => 'com-sub'); ?>
                                    <?php wp_nav_menu($args2); ?>
                                </div>
                            </ul> 
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
         </div>
         <div class="container-fluid index">