<!-- works -->

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
        <?php
        $args = array(  
                        
        'post_type' => 'work',
        'post_status' => 'publish',
        'posts_per_page' => -1, 					
    );
               
    $loop = new WP_Query( $args ); 					
	while ( $loop->have_posts() ) : $loop->the_post(); 
    ?>
    <?php get_template_part("loop-templates/content", "work"); ?>

        <?php						
        endwhile;
        wp_reset_postdata(); 
        ?>
    </div>
</div>