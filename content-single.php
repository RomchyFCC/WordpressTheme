	<article class="post">
	<?php the_post_thumbnail('banner-image'); ?>
		<h2><?php the_title(); ?></h2>

		<p class="post-info"><?php the_time('F j, Y g:i a'); ?> | Posted in

			<?php

			$categories = get_the_category();
			$separator = ", ";
			$output = '';

			if ($categories) {

				foreach ($categories as $category) {

					$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $separator;

				}

				echo trim($output, $separator);

			}

			?>

			</p>

		<?php the_content(); ?>
	</article>