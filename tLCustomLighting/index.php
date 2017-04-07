<?php
    get_header(); ?>
    <div class="row parent-div">
        <div class="col-md-9 content-col">
            <div class="col-md-12">
                <!-- Slideshow that generates all currently available pages on the site -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators list-unstyled">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides. Each item points to a page and each image should be the featured image for that page.-->
                    <div class="carousel-inner" role="listbox">
                        <div class="item">
                            <a href="<?php echo get_page_link(16); ?>"><img src="http://localhost:8888/wordpress/wp-content/uploads/2017/03/tl-lighitng-home5-1-300x300.jpg" alt="Chania" width="700" height="300"></a>
                            <h2 class="carousel-title text-center">Fixtures &amp; Shades</h2>
                            
                        </div>
                        <div class="item active">
                            <a href="<?php echo get_page_link(12); ?>"><img src="http://localhost:8888/wordpress/wp-content/uploads/2017/03/featherlady-1-300x214.jpg" width="700" height="300"alt="floral"></a>
                            <h2 class="carousel-title text-center">Inspirations</h2>
                        </div>
                        <div class="item">
                            <a href="<?php echo get_page_link(14); ?>"><img src="http://localhost:8888/wordpress/wp-content/uploads/2017/03/btm-right-townsend2-1-300x200.jpg" alt="spiral"width="700" height="300"></a>
                            <h2 class="carousel-title text-center">Materials</h2>
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 blog-col list-unstyled well well-lg text-center" style="width:40%;">
            <?php dynamic_sidebar('sidebar1'); ?>
        </div>
    </div>
   <?php get_footer();
?>