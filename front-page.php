<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

	<?php get_template_part( 'global-templates/hero2' , 'none' ); ?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php if(wp_is_mobile()){
						get_template_part( 'global-templates/accordion-info'); // if mobile get accordion
					}
					else{
						get_template_part( 'global-templates/card-info'); // if not mobile get cards
						?> <hr>
					<?php } ?>
				<?php endwhile; // end of the loop. ?>
				<section id="dog-cards"><?php get_template_part( 'global-templates/dog-cards'); ?></section>
				<section id="slider-2"><?php get_template_part( 'global-templates/success-slider'); ?></section>
				<section id="adopt"><?php echo do_shortcode('[wpforms id="90" title="false" description="false"]') ?> </section>
			</main><!-- #main -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
