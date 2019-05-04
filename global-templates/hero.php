<?php
/**
 * Hero setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<?php if ( is_active_sidebar( 'hero' ) || is_active_sidebar( 'statichero' ) || is_active_sidebar( 'herocanvas' ) ) : ?>

	<div class="wrapper" id="wrapper-hero">
	<a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><?php _e('Find your best friend!', 'sos-dogs') ?></a>

	<h1><?php bloginfo( 'name' ); ?></h1>
	<!-- <div class="background-image-hero" style= "<?php get_theme_file_uri('sidebar-templates/sidebar', 'hero') ?>"> </div> -->

		<?php get_template_part( 'sidebar-templates/sidebar', 'hero' ); ?>

		<?php get_template_part( 'sidebar-templates/sidebar', 'herocanvas' ); ?>

		<?php get_template_part( 'sidebar-templates/sidebar', 'statichero' ); ?>

	</div>

<?php endif; ?>
