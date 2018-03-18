<?php

get_header(); ?>
	
	<!-- site-content -->
	<div class="site-content">
		<div class="hero">
			<h1>Welcome!</h1>
			<?php if (have_posts()) :
				while (have_posts()) : the_post();

				the_content();

				endwhile;

				else :
					echo '<p>No content found</p>';

				endif; ?>
				</div><!-- End of .hero-->
				<!-- home-columns -->
				<div class="home-columns">
					
						<h2>Recent Posts</h2>
						
						<?php // news posts loop begins here
						$newsPosts = new WP_Query('posts_per_page=3');

						if ($newsPosts->have_posts()) :

							while ($newsPosts->have_posts()) : $newsPosts->the_post(); ?>
								<!-- post-item -->
								<div class="post-item">

									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></br><span class="subtle-date"><?php the_time('n/j/Y'); ?></span></h4>

									<?php the_excerpt(); ?>

									</div><!-- /post-item -->
							<?php endwhile;

							else :
								// fallback no content message here
						endif;
						wp_reset_postdata();

						?>
						
						<span class="horiz-center"><a href="<?php echo get_page_link(56); ?>" class="btn-a">View all Posts</a></span>
						
				</div><!-- /home-columns -->
			
	</div><!-- /site-content -->
	
	<?php get_footer();

?>