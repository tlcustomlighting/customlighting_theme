<?php
/*
search.php
file to ouput search form results
Marquis Massie
*/
?>
<?php
    get_header(); ?>
     <div class="row">
        <div class="col-md-3 filter">
            <form method="post" action="">
                <!-- Form data with multiple checkboxes sends an array of the values of each checkbox that was checked off. Find a way to access array to use them as categories for the filter-->
                <ul class="nav navbar-default">
                    <div>
                        <button id="filter-button" type="button" class="pull-left navbar-toggle" data-toggle="collapse" data-target="#filterBar"><i class="fa fa-cog" aria-hidden="true"></i></button>
                        <div id="filterBar" class="collapse navbar-collapse">
                            <li>
                            <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#mat">Material</button>
                                <ul id="mat" class="collapse">
                                    <li><input type="checkbox" name="material[]" value="acrylic"><label for="acrylic">Acrylic</label></li>
                                    <li><input type="checkbox" name="material[]" value="ceramic"><label for="ceramic">Ceramic</label></li>
                                    <li><input type="checkbox" name="material[]" value="crystal"><label for="crystal">Crystal</label></li>
                                    <li><input type="checkbox" name="material[]" value="glass"><label for="glass">Glass</label></li>
                                    <li><input type="checkbox" name="material[]" value="laquer"><label for="laquer">Laquer</label></li>
                                    <li><input type="checkbox" name="material[]" value="leather"><label for="leather">Leather</label></li>
                                    <li><input type="checkbox" name="material[]" value="metal"><label for="metal">Metal</label></li>
                                    <li><input type="checkbox" name="material[]" value="natural"><label for="natural">Natural</label></li>
                                    <li><input type="checkbox" name="material[]" value="stone"><label for="stone">Stone</label></li>
                                </ul><!-- Categories -->
                            </li>
                            <li>
                            <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#color">Color</button>
                            <ul id="color" class="collapse">
                                    <li><input type="checkbox" name="color[]" value="black"><label for="black">Black</label></li>
                                    <li><input type="checkbox" name="color[]" value="blue"><label for="blue">Blue</label></li>
                                    <li><input type="checkbox" name="color[]" value="brown"><label for="brown">Brown</label></li>
                                    <li><input type="checkbox" name="color[]" value="cream"><label for="cream">Cream</label></li>
                                    <li><input type="checkbox" name="color[]" value="gold"><label for="gold">Gold</label></li>
                                    <li><input type="checkbox" name="color[]" value="green"><label for="green">Green</label></li>
                                    <li><input type="checkbox" name="color[]" value="grey"><label for="grey">Grey</label></li>
                                    <li><input type="checkbox" name="color[]" value=""maroon><label for="maroon">Maroon</label></li>
                                    <li><input type="checkbox" name="color[]" value="orange"><label for="orange">Orange</label></li>
                                    <li><input type="checkbox" name="color[]" value="pink"><label for="pink">Pink</label></li>
                                    <li><input type="checkbox" name="color[]" value="purple"><label for="purple">Purple</label></li>
                                    <li><input type="checkbox" name="color[]" value="red"><label for="red">Red</label></li>
                                    <li><input type="checkbox" name="color[]" value="silver"><label for="silver">Silver</label></li>
                                    <li><input type="checkbox" name="color[]" value="transparent"><label for="transparent">Transparent</label></li>
                                    <li><input type="checkbox" name="color[]" value="white"><label for="white">White</label></li>
                                    <li><input type="checkbox" name="color[]" value="yellow"><label for="yellow">Yellow</label></li>
                                    <li><input type="checkbox" name="color[]" value="chocolate"><label for="chocolate">Chocolate</label></li>
                            </ul>
                            </li>
                            <li>
                            <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#styles">Style</button>
                            <ul id="styles" class="collapse">
                                <li><input type="checkbox" name="style[]" value="bamboo"><label for="bamboo">Bamboo</label></li>
                                <li><input type="checkbox" name="style[]" value="contemporary"><label for="contemporary">Contemporary</label></li>
                                <li><input type="checkbox" name="style[]" value="classic"><label for="classic">Classic</label></li>
                                <li><input type="checkbox" name="style[]" value="anodize"><label for="anodize">Anodized</label></li>
                                <li><input type="checkbox" name="style[]" value="eclectic"><label for="eclectic">Eclectic</label></li>
                                <li><input type="checkbox" name="style[]" value="brushed"><label for="brushed">Brushed</label></li>
                                <li><input type="checkbox" name="style[]" value="canvas"><label for="canvas">Canvas</label></li>
                                <li><input type="checkbox" name="style[]" value="course"><label for="course">Course</label></li>
                                <li><input type="checkbox" name="style[]" value="flat"><label for="flat">Flat</label></li>
                                <li><input type="checkbox" name="style[]" value="glimmer"><label for="glimmer">Glimmer</label></li>
                                <li><input type="checkbox" name="style[]" value="gloss"><label for="gloss">Gloss</label></li>
                                <li><input type="checkbox" name="style[]" value="heavy dot"><label for="heavy dot">Heavy Dot</label></li>
                                <li><input type="checkbox" name="style[]" value="light canvas"><label for="light canvas">Light Canvas</label></li>
                                <li><input type="checkbox" name="style[]" value="light dot"><label for="light dot">Light Dot</label></li>
                                <li><input type="checkbox" name="style[]" value="linen"><label for="linen">Linen</label></li>
                                <li><input type="checkbox" name="style[]" value="matte"><label for="matte">Matte</label></li>
                                <li><input type="checkbox" name="style[]" value="medium dot"><label for="medium dot">Medium Dot</label></li>
                                <li><input type="checkbox" name="style[]" value="metallic"><label for="metallic">Metallic</label></li>
                                <li><input type="checkbox" name="style[]" value="nubby weave"><label for="nubby weave">Nubby Weave</label></li>
                                <li><input type="checkbox" name="style[]" value="smooth"><label for="smooth">Smooth</label></li>
                                <li><input type="checkbox" name="style[]" value="weave"><label for="weave">Weave</label></li>
                                <li><input type="checkbox" name="style[]" value="wrinkle"><label for="wrinkle">Wrinkle</label></li>
                                <li><input type="checkbox" name="style[]" value="zigzag line"><label for="zigzag line">ZigZag Line</label></li>
                            </ul>
                            </li>
                        </div>
                    </div>
                </ul>
                <button type="submit">Filter</button>
            </form>
        </div>
        <div class="col-md-6 text-center">
             <!-- Results of search -->
            <?php if(have_posts()) :
                while(have_posts()) : the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
                <?php endwhile;
                else :
                    echo "<p>No content found</p>";
                endif; ?>
        </div>
        <div class="col-md-3 blog-col list-unstyled well well-lg text-left">
            <?php dynamic_sidebar('sidebar1'); ?>
        </div>
        <div class="row" style="margin-right:0;">
    <h4 class="text-center">Suggested Pieces</h4>
    <!-- New suggestion slider  -->
    <div id="myCar" class="carousel slide container" data-ride="carousel">
        <ol class="carousel-indicators list-unstyled">
            <li data-target="#myCar" data-slide-to="0" name="materials" class="active"></li>
            <li data-target="#myCar" data-slide-to="1" name="inspirations"></li>
            <li data-target="#myCar" data-slide-to="2" name="fixtures-and-shades"></li>
        </ol>
         <!-- Wrapper for slides. Each item points to a page and each image should be the featured image for that page.-->
        <div class="carousel-inner" role="listbox">
            <?php $mats = get_posts(array('post_type'=>'attachment', 'post_mime_type'=>'image',  'category_name'=>'material', 'numberposts'=>4));
            $ins = get_posts(array('post_type'=>'attachment', 'post_mime_type'=>'image',  'category_name'=>'inspire', 'numberposts'=>4));
            $fix = get_posts(array('post_type'=>'attachment', 'post_mime_type'=>'image',  'category_name'=>'fixtures-and-shades', 'numberposts'=>4));
            $images = array($mats, $ins); ?>
            <div class="item active">
                <ul class="suggest-slide">
                   <?php
                        foreach($fix as $f){
                            echo '<li>'.wp_get_attachment_image($f->ID).'</li>';
                        }
                    ?> 
                </ul>
            </div>
            <?php 
            $count = 0;
            foreach($images as $image){ ?>
                <div class="item">
                    <ul class="suggest-slide">
                        <?php foreach($image as $group){
                            echo '<li>'.wp_get_attachment_image($group->ID).'</li>';
                        } ?>
                    </ul>
                </div>
            <?php } ?>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCar" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCar" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
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
                <li><a href="<?php /* News page */ ?>"></a><span><?php the_post_thumbnail(); ?></span></li>
                <?php $count++; ?>
            <?php endwhile; ?>
        </ul>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e('Sorry, no posts matched this criteria.'); ?></p>
    <?php endif; ?>
        </div>
    </div>
   <?php get_footer();
?>