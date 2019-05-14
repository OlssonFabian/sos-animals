<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper d-flex" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1" >
	<h1><?php echo get_the_archive_title(); ?></h1>
		<div class="row">
				<?php if(have_posts()) : ?>
					<?php while (have_posts() ) : the_post(); ?>
					<div class="col-lg-4 col-md-4 col-sm-6 mb-3"> <?php get_template_part( 'loop-templates/content', 'dog-card' );?> </div>
					<?php endwhile; ?>
					<?php else : ?>
					<?php endif; ?>
			</div> <!-- .row -->
			<!-- The pagination component -->
			<?php understrap_pagination(); ?>
		</div><!-- #content -->
	</div><!-- #archive-wrapper -->

<?php get_footer(); ?>
