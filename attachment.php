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
<?php
get_footer();
?>