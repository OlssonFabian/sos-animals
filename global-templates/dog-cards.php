<div class="container information-cards">
  <div class="row d-flex justify-content-around">
      <?php

$args = array(
  'post_type' => 'sos_dogs'
);

$the_query = new WP_Query($args);

while ($the_query->have_posts()) : $the_query->the_post(); ?>
<?php get_template_part( 'loop-templates/content', 'dog-card' ); ?>
				<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
