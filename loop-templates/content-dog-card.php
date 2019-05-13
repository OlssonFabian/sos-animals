<div class="card info-card m-2" style="width: 18rem;">
	<div class="img-wrapper">
		<?php the_post_thumbnail('weird'); ?>
		<?php
			if(has_term( 'dogs', 'sos_adopted')){
				echo '<img class="img-adopted" src="' . get_stylesheet_directory_uri() . '/img/adopted.png" alt="adopted" />';
			}
		?>
	</div>

	<div class="card-body">
		<h5 class="card-title"><?php the_title(); ?> </h5>
		<p> <?php _e('sex', 'understrap'); the_field('gender'); ?> </p>
		<p class="card-text"> <?php the_excerpt(); ?></p>
	</div>
</div>
