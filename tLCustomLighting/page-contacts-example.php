<?php
/*
File: page-contacts-example.php
Description: configuration file for contacts-example.php page
Author: Marquis Massie
*/

get_header();
?>

<div class="container-fluid">
    <div class="row">
        <div class="row">
            <h2>USA OFFICE</h2>
            <blockquote>
                23371 Mulholland Dr.
               Woodland Hills, CA 91364
                Phone: +1 310.622.7313
                 Fax: +1 310.300.4484
            usaoffice@tlcustomlighting.com
            </blockquote>
        </div><br/>
        <div class="row">
            <h2>EUROPE OFFICE</h2>
            <blockquote>
                Via Maistra 49
               CH 7500 St.Moritz
             Phone: +1 310.622.7313
        europeoffice@tlcustomlighting.com
            </blockquote>
        </div><br/>
    </div>
    <div class="row">
        <?php dynamic_sidebar("sidebar2"); ?>
    </div>
</div>
<?php get_footer(); ?>