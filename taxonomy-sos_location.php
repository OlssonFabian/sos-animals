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

		<div class="row">

			<main class="site-main" id="main">

				<?php if(have_posts()) : ?>

					<header class="page-header">
					</header><!-- .page-header -->
						<?php /* Start the Loop */ ?>
						<div class="container d-flex flex-wrap justify-content-start">
						<?php while (have_posts() ) : the_post(); ?>

							<div class="col-lg-3 col-md-5 col-sm-12 m-3"> <?php get_template_part( 'loop-templates/content', 'dog-card' );?> </div>
					<?php endwhile; ?>
						</div>
				<?php else : ?>

				<?php endif; ?>

			</main><!-- #main -->

		</div> <!-- .row -->
<!-- The pagination component -->
<?php understrap_pagination(); ?>
	</div><!-- #content -->
	</div><!-- #archive-wrapper -->

<?php get_footer(); ?>
