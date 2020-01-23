<?php
/**
 * Template Name: homepage isotope
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
  <?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>


<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

				<h1>I'm a <span id="typed1" class="typed"></span></h1>

					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'loop-templates/content', 'page' ); ?>
					<?php endwhile; // end of the loop. ?>
					<?php wp_reset_postdata();?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->
		
		<section id="works">
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <h2>Works</h2>
            </div>	
        </div>			
    </div>
</section>	

<div class="container">
    <div class="row">
		<div class="col col-12">
			<div class="grid">
				<?php
				$query = new WP_Query(array(                 
					'post_type' => 'work',
					'post_status' => 'publish',
					'posts_per_page' => -1, 					
				)); 					
				while ( $query->have_posts() ) : $query->the_post(); 
				?>
				<?php get_template_part("loop-templates/content", "work-isotope"); ?>
				<?php endwhile; wp_reset_postdata(); ?>
				</div>
		</div>
    </div>
</div>
		
	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer();
