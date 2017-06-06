<?php
/*
File: attachment.php
Author: Marquis Massie
Description: attachment page for each image in the image galleries
*/
get_header();
?>
<?php
    $category = get_the_category($attachment->ID);
?>
<div class="row">
    <a href="<?php if($category[0]->slug == "inspire"){echo get_page_link(14);} elseif($category[0]->slug == "material"){echo get_page_link(192);} elseif($category[0]->slug == "table-lamps"){echo get_page_link(26);} elseif($category[0]->slug == "floor-lamps"){echo get_page_link(438);} elseif($category[0]->slug == "pendants"){echo get_page_link(21);} elseif($category[0]->slug == "sconces"){echo get_page_link(23);} elseif($category[0]->slug == "chandelier"){echo get_page_link(19);} elseif($category[0]->slug == "ceiling-mounts"){echo get_page_link(28);} else{echo get_home_url();} ?>">
        <p style="margin-left: 15px;padding-top: 50px;"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back to <?php echo $category[0]->name; ?></p>
    </a>
    <div class="display">
        <h2 class="post-title"><?php echo get_post_meta($attachment_id, '_wp_attachment_image_alt', true); ?></h2>
        <?php echo wp_get_attachment_image(get_the_ID(), 'large'); ?>
    </div>
</div>
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
<?php
get_footer();
?>