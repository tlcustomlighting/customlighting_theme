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
    <div class="row" style="margin-right:0;margin-bottom: 15px;">
        <h3 class="text-center">News</h3>
        <div class="col-sm-12 news">
            <?php $wpb = new WP_QUERY(array('post_type'=>'post', 'post_status'=>'publish', 'post_per_page'=>-1));
            $shuff_complete = shuffle($wpb);
            ?>
    <?php if ($wpb->have_posts()) :  $count = 0;?>
        <ul class="pseudo-news list-unstyled">
            <?php while ($wpb->have_posts() and $count < 4) : $wpb->the_post(); ?>
                <li><a href="<?php echo get_page_link(16); ?>"><span><?php the_post_thumbnail(); ?></span></a></li>
                <?php $count++; ?>
            <?php endwhile; ?>
        </ul>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e('Sorry, no posts matched this criteria.'); ?></p>
    <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>