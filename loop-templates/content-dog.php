<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$dogBorn = new DateTime(get_field('born')); // get date when dog was born
//var_dump($dogBorn);
$currentDate = new DateTime(date("Y/m/d")); // get today
//var_dump($currentDate);
$interval = $dogBorn->diff($currentDate);

?>


<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<div class="entry-content card p-2">

		<?php the_content(); ?>
		<p> <?php _e('sex', 'understrap'); the_field('gender'); ?> </p>
		<p> <?php _e('born: ', 'understrap'); echo $dogBorn->format('d M Y') . '  (' . $interval->format('%y years %m months and %d days') . ')';?> </p>
		<h3> <?php _e('information about the dog: ', 'understrap');  ?> </h3>
		<p><?php the_taxonomies()?></p>
		<?php

    if ( get_post_meta( $post->ID, 'withers', true ) ) { ?>

        <p> <?php _e('withers at this current time: ', 'understrap'); echo get_field('withers'); ?> cm </p>

    <?php } else {

		_e('withers at this current time: is unknown ', 'understrap');

    }?>

	<?php if ( get_post_meta( $post->ID, 'weight', true ) ) { ?>

        <p> <?php _e('weight at this current time: ', 'understrap'); echo get_field('weight'); ?> kg </p>

    <?php } else {

		?> <p> <?php _e('weight at this current time: is unknown ', 'understrap'); ?> </p> <?php

    }?>

		<?php if (get_field('adopted')){
		?> <p> <?php _e('this dog was adopted: ', 'understrap'); echo get_field('adopted'); ?></p>
		<?php }

		else{
			_e('this dog is available for adoption ', 'understrap');
		}

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
