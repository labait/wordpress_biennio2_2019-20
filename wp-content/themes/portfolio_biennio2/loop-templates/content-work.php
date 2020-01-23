<div <?php post_class("col col-md-6 wow heartBeat"); ?> id="work-<?php the_ID(); ?>" data-wow-duration="1s">
    <a href="#">
        <?php the_post_thumbnail("medium-large", array("class"=>"image")); ?>
    </a>
    
    <div class="info">
        <?php the_title(); ?>   
    </div>
   
</div>	