<!-- social -->

				<ul>
					<?php
					$args = array(  
						'post_type' => 'social',
						'post_status' => 'publish',
						'posts_per_page' => -1, 					
					);
					$loop = new WP_Query( $args ); 					
					while ( $loop->have_posts() ) : $loop->the_post(); 
					?>

					<li >
						<a href="<?php the_field("url");?>" target="_blank">
							<i class="fa <?php the_field("icon"); ?>"> </i>
							<div class="title"><?php the_title();?></div>
						</a>

					</li>	

					<?php						
					endwhile;
					wp_reset_postdata(); 
			    	?>
				</ul>