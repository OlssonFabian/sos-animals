<div id="hero">
	<div class="container">
		<h1><?php the_field('title'); ?></h1>
		<h2><?php the_field('sub_title'); ?></h2>
		<?php 

		$link = get_field('button');

		if( $link ): ?>
			
			<a class="button btn btn-primary" href="<?php echo $link['url']; ?>"><?php _e('Adopt Now!', 'understrap')?></a>

		<?php endif; ?>
	</div>

	<?php

	$image = wp_get_attachment_image_src(get_field('sos_hero_image'), 'hero-size');

	if( $image ): ?>
	<style type="text/css">
		#hero {
			background-image: url(<?php echo $image[0]; ?>);
		}
	</style>
	<?php endif; ?>

</div>
