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
            <div class="col-md-12 filter">
                <form method="post" action="">
                    <!-- Form data with multiple checkboxes sends an array of the values of each checkbox that was checked off. Find a way to access array to use them as categories for the filter-->
                    <ul class="nav navbar-default">
                        <div>
                            <button id="filter-button" type="button" class="pull-left navbar-toggle" data-toggle="collapse" data-target="#filterBar"><i class="fa fa-cog" aria-hidden="true"></i></button>
                            <div id="filterBar" class="collapse navbar-collapse" style="background-color: white;">
                                <li>
                                <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#mat">Material</button>
                                    <ul id="mat" class="collapse">
                                        <li><input type="checkbox" name="material[]" value="acrylic"><label for="acrylic">Acrylic</label></li>
                                        <li><input type="checkbox" name="material[]" value="bamboo"><label for="bamboo">Bamboo</label></li>
                                        <li><input type="checkbox" name="material[]" value="ceramic"><label for="ceramic">Ceramic</label></li>
                                        <li><input type="checkbox" name="material[]" value="crystal"><label for="crystal">Crystal</label></li>
                                        <li><input type="checkbox" name="material[]" value="glass"><label for="glass">Glass</label></li>
                                        <li><input type="checkbox" name="material[]" value="laquer"><label for="laquer">Laquer</label></li>
                                        <li><input type="checkbox" name="material[]" value="leather"><label for="leather">Leather</label></li>
                                        <li><input type="checkbox" name="material[]" value="metal"><label for="metal">Metal</label></li>
                                        <li><input type="checkbox" name="material[]" value="natural"><label for="natural">Natural</label></li>
                                        <li><input type="checkbox" name="material[]" value="stone"><label for="stone">Stone</label></li>
                                        <li><input type="checkbox" name="material[]" value="shell"><label for="shell">Shell</label></li>
                                        <li><input type="checkbox" name="material[]" value="faux-alabaster"><label for="faux-alabaster">Faux Alabaster</label></li>
                                        <li><input type="checkbox" name="material[]" value="wood"><label for="wood">Wood</label></li>
                                        <li><input type="checkbox" name="material[]" value="liquid"><label for="liquid">Liquid</label></li>
                                        <li><input type="checkbox" name="material[]" value="plaster"><label for="plaster">Plaster</label></li>
                                        <li><input type="checkbox" name="material[]" value="fabric"><label for="fabric">Fabric</label></li>
                                        <li><input type="checkbox" name="material[]" value="food"><label for="food">Food</label></li>
                                        <li><input type="checkbox" name="material[]" value="text-tile"><label for="text-tile">Text-Tile</label></li>
                                        <li><input type="checkbox" name="material[]" value="concrete"><label for="concrete">Concrete</label></li>
                                        <li><input type="checkbox" name="material[]" value="texture"><label for="texture">Texture</label></li>
                                    </ul><!-- Categories -->
                                </li>
                                <li>
                                <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#color">Color</button>
                                <ul id="color" class="collapse">
                                        <li><input type="checkbox" name="color[]" value="black"><label for="black">Black</label></li>
                                        <li><input type="checkbox" name="color[]" value="blue"><label for="blue">Blue</label></li>
                                        <li><input type="checkbox" name="color[]" value="brown"><label for="brown">Brown</label></li>
                                        <li><input type="checkbox" name="color[]" value="cream"><label for="cream">Cream</label></li>
                                        <li><input type="checkbox" name="color[]" value="gold"><label for="gold">Gold</label></li>
                                        <li><input type="checkbox" name="color[]" value="green"><label for="green">Green</label></li>
                                        <li><input type="checkbox" name="color[]" value="grey"><label for="grey">Grey</label></li>
                                        <li><input type="checkbox" name="color[]" value="maroon"><label for="maroon">Maroon</label></li>
                                        <li><input type="checkbox" name="color[]" value="orange"><label for="orange">Orange</label></li>
                                        <li><input type="checkbox" name="color[]" value="pink"><label for="pink">Pink</label></li>
                                        <li><input type="checkbox" name="color[]" value="purple"><label for="purple">Purple</label></li>
                                        <li><input type="checkbox" name="color[]" value="red"><label for="red">Red</label></li>
                                        <li><input type="checkbox" name="color[]" value="silver"><label for="silver">Silver</label></li>
                                        <li><input type="checkbox" name="color[]" value="transparent"><label for="transparent">Transparent</label></li>
                                        <li><input type="checkbox" name="color[]" value="white"><label for="white">White</label></li>
                                        <li><input type="checkbox" name="color[]" value="yellow"><label for="yellow">Yellow</label></li>
                                        <li><input type="checkbox" name="color[]" value="chocolate"><label for="chocolate">Chocolate</label></li>
                                        <li><input type="checkbox" name="color[]" value="opal"><label for="opal">Opal</label></li>
                                        <li><input type="checkbox" name="color[]" value="amber"><label for="amber">Amber</label></li>
                                        <li><input type="checkbox" name="color[]" value="multi-color"><label for="multi-color">Multi-Color</label></li>
                                        <li><input type="checkbox" name="color[]" value="ice"><label for="ice">Ice</label></li>
                                        <li><input type="checkbox" name="color[]" value="olive"><label for="olive">Olive</label></li>
                                        <li><input type="checkbox" name="color[]" value="lemon"><label for="lemon">Lemon</label></li>
                                        <li><input type="checkbox" name="color[]" value="bronze"><label for="bronze">Bronze</label></li>
                                </ul>
                                </li>
                                <li>
                                <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#styles">Style</button>
                                <ul id="styles" class="collapse">
                                    <li><input type="checkbox" name="style[]" value="alabaster-scone"><label for="alabaster-scone">Alabaster Scone</label></li>
                                    <li><input type="checkbox" name="style[]" value="antique"><label for="antique">Antique</label></li>
                                    <li><input type="checkbox" name="style[]" value="art-decor"><label for="art-decor">Art Decor</label></li>
                                    <li><input type="checkbox" name="style[]" value="contemporary"><label for="contemporary">Contemporary</label></li>
                                    <li><input type="checkbox" name="style[]" value="classic"><label for="classic">Classic</label></li>
                                    <li><input type="checkbox" name="style[]" value="anodize"><label for="anodize">Anodized</label></li>
                                    <li><input type="checkbox" name="style[]" value="eclectic"><label for="eclectic">Eclectic</label></li>
                                    <li><input type="checkbox" name="style[]" value="brushed"><label for="brushed">Brushed</label></li>
                                    <li><input type="checkbox" name="style[]" value="canvas"><label for="canvas">Canvas</label></li>
                                    <li><input type="checkbox" name="style[]" value="course"><label for="course">Course</label></li>
                                    <li><input type="checkbox" name="style[]" value="english-victorian"><label for="english-victorian">English Victorian</label></li>
                                    <li><input type="checkbox" name="style[]" value="flat"><label for="flat">Flat</label></li>
                                    <li><input type="checkbox" name="style[]" value="french"><label for="french">French</label></li>
                                    <li><input type="checkbox" name="style[]" value="glimmer"><label for="glimmer">Glimmer</label></li>
                                    <li><input type="checkbox" name="style[]" value="gloss"><label for="gloss">Gloss</label></li>
                                    <li><input type="checkbox" name="style[]" value="heavy dot"><label for="heavy dot">Heavy Dot</label></li>
                                    <li><input type="checkbox" name="style[]" value="industrial"><label for="industrial">Industrial</label></li>
                                    <li><input type="checkbox" name="style[]" value="light canvas"><label for="light canvas">Light Canvas</label></li>
                                    <li><input type="checkbox" name="style[]" value="light dot"><label for="light dot">Light Dot</label></li>
                                    <li><input type="checkbox" name="style[]" value="linen"><label for="linen">Linen</label></li>
                                    <li><input type="checkbox" name="style[]" value="matte"><label for="matte">Matte</label></li>
                                    <li><input type="checkbox" name="style[]" value="medium dot"><label for="medium dot">Medium Dot</label></li>
                                    <li><input type="checkbox" name="style[]" value="metallic"><label for="metallic">Metallic</label></li>
                                    <li><input type="checkbox" name="style[]" value="mid-century"><label for="mid-century">Mid-Century</label></li>
                                    <li><input type="checkbox" name="style[]" value="modern"><label for="modern">Modern</label></li>
                                    <li><input type="checkbox" name="style[]" value="nubby weave"><label for="nubby weave">Nubby Weave</label></li>
                                    <li><input type="checkbox" name="style[]" value="rustic"><label for="rustic">Rustic</label></li>
                                    <li><input type="checkbox" name="style[]" value="scandinavian"><label for="scandinavian">Scandinavian</label></li>
                                    <li><input type="checkbox" name="style[]" value="shape"><label for="shape">Shape</label></li>
                                    <li><input type="checkbox" name="style[]" value="smooth"><label for="smooth">Smooth</label></li>
                                    <li><input type="checkbox" name="style[]" value="tropical"><label for="tropical">Tropical</label></li>
                                    <li><input type="checkbox" name="style[]" value="vintage"><label for="vintage">Vintage</label></li>
                                    <li><input type="checkbox" name="style[]" value="weave"><label for="weave">Weave</label></li>
                                    <li><input type="checkbox" name="style[]" value="whimsical"><label for="whimsical">Whimsical</label></li>
                                    <li><input type="checkbox" name="style[]" value="wrinkle"><label for="wrinkle">Wrinkle</label></li>
                                    <li><input type="checkbox" name="style[]" value="zigzag line"><label for="zigzag line">ZigZag Line</label></li>
                                </ul>
                                </li>
                            </div>
                        </div>
                    </ul>
                    <button type="submit" class="filter-button btn btn-default">Filter</button>
                </form>
            </div>
         </div><!-- end filter row -->
        <div class="row">
            <div class="col-md-12 text-center">
                 <!-- Results of search -->
                <?php if(have_posts()) : the_post(); ?>
                    <h2><?php
                        $post_thumbnail_id = get_post_thumbnail_id( $post_id );
                        $alt = get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true );
                        echo $alt;
                    ?></h2>
                <?php the_content(); ?>
                    <?php else :
                        echo "<p>No content found</p>";
                    endif; ?>
            </div>
        </div>
     <!-- News grid -->
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
   <?php get_footer();
?>