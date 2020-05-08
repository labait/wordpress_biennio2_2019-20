<?php

/**
 * Template Name: Homepage Alternate Images
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
?>

<?php if (is_front_page()) : ?>
  <?php get_template_part('global-templates/hero'); ?>
<?php endif; ?>


<div class="wrapper" id="full-width-page-wrapper">
  <div class="<?php echo esc_attr($container); ?>" id="content">

    <div class="row">

      <div class="col-md-12 content-area" id="primary">

        <main class="site-main" id="main" role="main">

          <!-- content -->
          <div class="content">
            <?php while (have_posts()) : the_post(); ?>
              <h1>
                <?php the_title(); ?>
              </h1>
            <?php endwhile;
            wp_reset_postdata(); ?>
          </div>

          <!-- works -->
          <div id="works" class="container">
            <?php
            $args = array(
              'post_type' => 'work',
              'post_status' => 'publish',
              'posts_per_page' => -1,
            );
            $query = new WP_Query($args);
            while ($query->have_posts()) : $query->the_post();
            ?>

              <div class="work row">
                <div class="
                  content col-12 col-md-6 wow  
                  <?php echo ($query->current_post % 2 == 0 ? 'offset-md-6' : ''); ?> 
                  <?php echo ($query->current_post % 2 == 0 ? 'fadeInRight' : 'fadeInLeft'); ?> 
                  " data-wow-duration="0.6s">
                  <div class="texts">
                    <h2>
                      <?php the_title(); ?>
                    </h2>
                  </div>

                  <a href="#">
                    <?php the_post_thumbnail("medium-large", array("class" => "image")); ?>
                  </a>

                  <?php //the_content(); 
                  ?>
                </div>
              </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
          </div>

        </main><!-- #main -->

      </div><!-- #primary -->

    </div><!-- .row end -->

  </div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer();
