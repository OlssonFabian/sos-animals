<section id="slider" class="text-center">
      <div class="flexslider">
        <ul class="slides">
        <?php query_posts(array('post_type' => 'sos_success','orderby' => 'rand')); if(have_posts()) : while(have_posts()) : the_post();?>
            <li class="slide">
            <h1><?php the_title(); ?></h1>
						<?php the_excerpt(); ?>



						<?php
						$rating = get_field( "rating" );
						if($rating){
						$star='<i class="fa fa-star-o fa-3x"></i>';
						$score = '<i class="fa fa-star fa-3x"></i>';
						$stars = array($star,$star,$star,$star,$star);

						foreach (range(1, $rating) as $number) {
							array_unshift ($stars, $score);
							array_pop ($stars);
						}
							echo implode($stars,' ');
						} ?>



          </li>
        <?php endwhile; endif; wp_reset_query(); ?>
        </ul>
    </div>
</section>
