<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php the_content(); ?>
		<p> <?php _e('born: ', 'understrap'); echo get_field('born'); ?> </p>
		<p> <?php _e('available in this location: ', 'understrap');  ?>
		<p></p><?php the_taxonomies()?></p>
		<p> <?php _e('withers at this current time: ', 'understrap'); echo get_field('withers'); ?> cm </p>
		<p> <?php _e('weight at this current time: ', 'understrap'); echo get_field('weight'); ?> kg </p>
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
