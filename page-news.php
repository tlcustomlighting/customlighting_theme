<?php
/*
File: page-news-example.php
Author: Marquis Massie
Description: Page to contain posts for tlCustom Lighting website.
*/
get_header();
?>
<!-- News grid -->
<div class="row">
    <h2 class="text-center news-title">tL<span style="color:rgb(172,39,47);">*</span> Custom Lighting News</h2>
</div>
<div class="row text-center">
    <?php $wpb = new WP_QUERY(array('post_type'=>'post', 'post_status'=>'publish', 'post_per_page'=>-1)); ?>
    <?php if ($wpb->have_posts()) :  ?>
        <ul class="news_grid">
            <?php while ($wpb->have_posts()) : $wpb->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><span><?php the_post_thumbnail(); ?></span><span><?php the_title(); ?></span></a></li>
            <?php endwhile; ?>
        </ul>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e('Sorry, no posts matched this criteria.'); ?></p>
    <?php endif; ?>
</div>
<?php
get_footer();
?>