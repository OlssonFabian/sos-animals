<section id="slider">
      <div class="flexslider">
        <ul class="slides">
        <?php query_posts(array('post_type' => 'sos_dogs','orderby' => 'rand')); if(have_posts()) : while(have_posts()) : the_post();?>
            <li class="slide">
            <?php the_title(); ?>
            <?php the_post_thumbnail(); ?>
			<?php the_excerpt(); ?>
          </li>
        <?php endwhile; endif; wp_reset_query(); ?>
        </ul>
    </div>
</section>
