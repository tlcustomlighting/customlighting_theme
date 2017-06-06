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
                        <div class="item active">
                            <a href="<?php echo get_page_link(353); ?>"><img src="http://tlcustomlighting.com/wp-content/uploads/2015/05/tl-lighitng-home5-300x300.jpg" alt="tlCustom Lighting Table Lamp" style="min-width:450px;height:400px;"></a>
                            <h2 class="carousel-title">Fixtures &amp; Shades</h2>
                        </div>
                        <div class="item">
                            <a href="<?php echo get_page_link(14); ?>"><img src="http://tlcustomlighting.com/wp-content/uploads/2015/06/1e0da5f91571f665b5952a5525b93e3f-300x300.jpg" alt="Red Fish" style="min-width:450px;height:400px;"></a>
                            <h2 class="carousel-title">Inspirations</h2>
                        </div>
                        <div class="item">
                            <a href="<?php echo get_page_link(16); ?>"><img src="http://tlcustomlighting.com/wp-content/uploads/2015/04/btm-right-townsend2-300x200.jpg" alt="Spiral" style="min-width:450px;height:400px;"></a>
                            <h2 class="carousel-title">Materials</h2>
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
    </div>
<h3 class="text-center">Newest Posts</h3>
<div id="newsCarousel" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides. Each item points to a page and each image should be the featured image for that page.-->
    <div class="carousel-inner" role="listbox">
        <?php
            /* Use the count variable to keep track of how many thumbnails array displayed in the array for the carouel slider. Please DO NOT change the values as it will disrupt the code unless you have contacted the original author.
            */
            $wpb = new WP_QUERY(array('post_type'=>'post', 'post_status'=>'publish', 'post_per_page'=>-1)); 
                const slider_size = 18; ?>
            <?php if ($wpb->have_posts()) :  $count = 0; ?>
        <div class="item active">
            <ul class="news-grid">
                <?php while($wpb->have_posts() && $count < 6) : $wpb->the_post(); ?>
                    <li><a href="<?php echo get_page_link(16); ?>"><span><?php the_post_thumbnail(); $count++;?></span></a></li>
                <?php endwhile; ?>
            </ul>
        </div>
        <div class="item">
            <ul class="news-grid">
                <?php while($wpb->have_posts() && $count < 12) : $wpb->the_post(); ?>
                    <li><a href="<?php echo get_page_link(16); ?>"><span><?php the_post_thumbnail(); $count++;?></span></a></li>
                <?php endwhile; ?>
            </ul>
        </div>
        <div class="item">
            <ul class="news-grid">
                <?php while($wpb->have_posts() && $count < 18) : $wpb->the_post(); ?>
                    <li><a href="<?php echo get_page_link(16); ?>"><span><?php the_post_thumbnail(); $count++;?></span></a></li>
                <?php endwhile; ?>
            </ul>
        </div>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e('Sorry, no posts matched this criteria.'); ?></p>
    <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>