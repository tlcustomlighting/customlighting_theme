<?php
/*
searchform.php
search form handling
Marquis Massie
*/
?>
<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
    <div>
       <input type="text" value="" name="s" id="s"/>
       <input type="submit" value="Search" id="searchsubmit" class="btn btn-default"/> 
    </div>
</form>