<?php
/*
File: attachment.php
Author: Marquis Massie
Description: attachment page for each image in the image galleries
*/
get_header();
?>
<a href="<?php echo get_page_link(12); ?>"><p><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to gallery</p></a>
<div class="text-center display">
    <?php $category = get_the_category($attachment->ID);
    echo '<p>'.$category[0]->cat_name.'</p>';?>
    <h2 class="post-title"><?php the_title(); ?></h2>
    <?php echo wp_get_attachment_image(get_the_ID(), 'large'); ?>
</div>

<?php
get_footer();
?>