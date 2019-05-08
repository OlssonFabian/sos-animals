<div class="container information-cards">
  <div class="row d-flex justify-content-between">
      <?php

$value = intval(get_field('dogs_shown_on_frontpage', 'option')); 

if(get_field('dogs_shown_on_frontpage', 'option')) {
    $value = intval(get_field('dogs_shown_on_frontpage', 'option')); 
} else {
    $value = -1;
}
 

$args = array(
  'post_type' => 'sos_dogs',
  'posts_per_page' => $value
);

$the_query = new WP_Query($args);

while ($the_query->have_posts()) : $the_query->the_post(); ?>
<?php get_template_part( 'loop-templates/content', 'dog-card' ); ?>
				<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
