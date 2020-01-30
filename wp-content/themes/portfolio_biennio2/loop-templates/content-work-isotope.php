<div <?php post_class("grid-item wow fadeInUp"); ?> data-wow-duration="2s" id="work-<?php the_ID(); ?>">
    <a class="link" href=" <?php echo get_post_permalink(); ?>">
        <?php the_post_thumbnail("medium-large", array("class" => "image")); ?>
    </a>
    <div class="info">
        <?php
        the_category();

        if (false) :
            $terms = get_terms('work_category');
            if (!empty($terms) && !is_wp_error($terms)) {
                echo '<ul class="categories">';
                foreach ($terms as $term) {
                    echo '<li>' . $term->name . '</li>';
                }
                echo '</ul>';
            }
        endif;
        ?>
        <div class="title"><?php the_title(); ?></div>
    </div>
</div>