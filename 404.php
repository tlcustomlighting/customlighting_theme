<?php
/*
File: 404.php
Author: Marquis Massie
Description: 404 error code page for tl*Custom Lighting website visitors who attempt to navigate to a page that does not exist within our backend.
Version: 1.0
*/
 get_header(); ?>

<div class="row error-404">
    <div class="col-md-12 text-center">
     <h1>Error 404: Page Not Found</h1>
     <p>We could not find the page you are looking for. Try looking back in our <a href="<?php echo home_url(); ?>">homepage</a> or <a href="<?php /* Contact Page */ ?>">contact us</a>.</p>
    </div>
</div>
 
 <?php
 get_footer();
 ?>