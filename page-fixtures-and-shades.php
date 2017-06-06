<?php get_header(); ?>
    <div class="row" style="margin-right:0;">
        <div class="col-md-12" style="padding-right:0;">
            <div class="table-responsive text-center">
                <table class="fixture-table">
                    <tr>
                        <td style="background-image:url('http://tlcustomlighting.com/wp-content/uploads/2015/04/photo-3-300x300.jpg');"><a href="<?php echo get_page_link(26); ?>"><h3 class="fixture-title">Table Lamps</h3></a></td>
                        <td style="background-image:url('http://tlcustomlighting.com/wp-content/uploads/2015/05/Tapered-Leg-Floor-Lamp-big-300x300.jpg');"><a href="<?php echo get_page_link(438); ?>"><h3 class="fixture-title">Floor Lamps</h3></a></td>
                    </tr>
                    <tr>
                        <td style="background-image:url('http://tlcustomlighting.com/wp-content/uploads/2015/04/Photo-Jul-24-11-35-31-AM-HDR1-300x300.jpg');"><a href="<?php echo get_page_link(23); ?>"><h3 class="fixture-title">Sconces</h3></a></td>
                        <td style="background-image:url('http://tlcustomlighting.com/wp-content/uploads/2015/02/pendantthumb-300x300.jpg');"><a href="<?php echo get_page_link(21); ?>"><h3 class="fixture-title">Pendants</h3></a></td>
                    </tr>
                    <tr>
                        <td style="background-image:url('http://tlcustomlighting.com/wp-content/uploads/2015/04/linked-in-300x300.jpg');"><a href="<?php echo get_page_link(19); ?>"><h3 class="fixture-title">Chandeliers</h3></a></td>
                        <td style="background-image:url('http://tlcustomlighting.com/wp-content/uploads/2015/05/Bamboo-Sticks-Ceiling-Mount-300x300.jpg');"><a href="<?php echo get_page_link(28); ?>"><h3 class="fixture-title">Ceiling Mounts</h3></a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- News grid -->
    <h3 class="text-center">Newest Posts</h3>
    <div id="newsCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators list-unstyled">
        <li data-target="#newCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#newsCarousel" data-slide-to="1"></li>
        <li data-target="#newsCarousel" data-slide-to="2"></li>
    </ol>
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
                <?php while($wpb->have_posts() && $count < 4) : $wpb->the_post(); ?>
                    <li><span><?php the_post_thumbnail(); $count++;?></span></li>
                <?php endwhile; ?>
            </ul>
        </div>
        <div class="item">
            <ul class="news-grid">
                <?php while($wpb->have_posts() && $count < 8) : $wpb->the_post(); ?>
                    <li><span><?php the_post_thumbnail(); $count++;?></span></li>
                <?php endwhile; ?>
            </ul>
        </div>
        <div class="item">
            <ul class="news-grid">
                <?php while($wpb->have_posts() && $count < 12) : $wpb->the_post(); ?>
                    <li><span><?php the_post_thumbnail(); $count++; ?></span></li>
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