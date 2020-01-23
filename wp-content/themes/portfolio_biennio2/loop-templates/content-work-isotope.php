<div <?php post_class("grid-item wow fadeInUp"); ?> data-wow-duration="2s" id="work-<?php the_ID(); ?>">
    <a href=" <?php echo get_post_permalink(); ?>">
        <?php the_post_thumbnail("medium-large", array("class" => "image")); ?>
        <div class="info">
            <?php the_title(); ?>
        </div>
    </a>
</div>