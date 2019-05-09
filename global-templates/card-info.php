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
<?php
$information = new WP_query([
 'post_type' => 'sos_information',
 'posts_per_page' => 3,
 'posts_per_page' => 3,
 'order_by' => 'name',
 'order' => 'asc',
]);

if ($information->have_posts()){
?>
<section id="information">
	<div class="wrapper" id="wrapper-information">
		<div class="col-md">
			<div class="d-flex justify-content-around">
				<?php
				while ($information->have_posts()) {
					$information->the_post();
					get_template_part('loop-templates/content' , 'single');
				} ?>
			</div>
		</div>
	</div>
</section>
<?php
}
