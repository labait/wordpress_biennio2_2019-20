<?php

/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part('global-templates/left-sidebar-check'); ?>

			<main class="site-main" id="main">

				<?php while (have_posts()) : the_post(); ?>

					<?php get_template_part('loop-templates/content', 'single'); ?>

					<?php
					$images = get_field('gallery');
					if ($images) :
					?>
						<h2><?php _e("Gallery", "portoflio_biennio2"); ?></h2>
						<ul>
							<?php foreach ($images as $image) : ?>
								<li>
									<a href="<?php echo $image['image']['url']; ?>" data-lightbox="gallery" data-title="<?php echo $image['alt']; ?>">
										<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
									</a>
									<p><?php echo $image['caption']; ?></p>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>

					<?php //understrap_post_nav(); 
					?>

				<?php endwhile; // end of the loop. 
				?>

			</main><!-- #main -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php get_footer();
