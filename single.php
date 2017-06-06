<?php
/*
File:
Author:
Descritpion:
Version:
*/
get_header();
?>
<div class="row">
    <div class="col-md-12">
        <a href="<?php echo get_page_link(16); ?>"><p><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to News</p></a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="text-center display">
            <?php if(have_posts()) : the_post(); ?>
                <h2 class="post-title"><?php the_title(); ?></h2>
                <?php echo the_post_thumbnail(array(300, 300)); ?>
                <p><?php the_content(); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>