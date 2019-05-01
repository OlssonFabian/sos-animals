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
]);

if ($information->have_posts()){
?>
<section id="wrapper-dogs">
	<div class="wrapper" id="wrapper-dogs">
		<div class="col-md">
			<div class="d-flex justify-content-around">
		<?php
	while ($information->have_posts()) {
		$information->the_post();
		get_template_part('loop-templates/content' , 'dog');
	} ?>
</section>
			</div>
		</div>
	</div>
<?php
}
