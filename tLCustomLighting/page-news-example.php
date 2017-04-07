<?php
/*
File: page-news-example.php
Author: Marquis Massie
Description: Page to contain posts for tlCustom Lighting website.
*/
get_header();
?>

<div class="main-blog list-unstyled text-center">
    <?php dynamic_sidebar('sidebar1'); ?>
</div>

<?php
get_footer();
?>