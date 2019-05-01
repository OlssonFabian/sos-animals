<section id="slider" class="text-center">
      <div class="flexslider">
        <ul class="slides">
        <?php query_posts(array('post_type' => 'sos_success','orderby' => 'rand')); if(have_posts()) : while(have_posts()) : the_post();?>
            <li class="slide">
            <h1><?php the_title(); ?></h1>
						<?php the_excerpt(); ?>
          </li>
        <?php endwhile; endif; wp_reset_query(); ?>
        </ul>
    </div>
</section>
