<div class="container information-cards">
  <div class="row d-flex justify-content-between">

      <?php

$args = array(
  'post_type' => 'sos_dogs'
);

$the_query = new WP_Query($args);

while ($the_query->have_posts()) : $the_query->the_post(); ?>

<div class="card info-card" style="width: 18rem;">
  <?php the_post_thumbnail('weird'); ?>
  <div class="card-body">
    <h5 class="card-title"><?php the_title(); ?> </h5>
    <p class="card-text"> <?php the_excerpt(); ?></p>
  </div>
</div>
      <?php endwhile; wp_reset_postdata(); ?>
  </div>
</div>
