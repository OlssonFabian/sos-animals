<?php
	$accordionItems = new WP_query([
		'post_type' => 'sos_information',
		'posts_per_page' => 3,
       ]);

	if ($accordionItems->have_posts()) {
		?>
			<div class="accordion" id="accordion-information">
				<?php
					while ($accordionItems->have_posts()) {
						$accordionItems->the_post();
						?>
							<div class="card">
								<div class="card-header">
									<h2 class="mb-0">
										<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-info-<?php the_ID(); ?>">
											<?php the_title(); ?>
										</button>
									</h2>
								</div>

								<div id="accordion-info-<?php the_ID(); ?>" class="collapse" data-parent="#accordion-information">
									<div class="card-body">
										<?php the_content(); ?>
									</div>
								</div>
							</div>
						<?php
					}
				?>
			</div><!-- End of Accordion -->

		<?php
		// reset postdata to main loop
		wp_reset_postdata();
	} else {
		?>
			<p><em><?php _e('Sorry, no USPSs found.', 'onepager'); ?></em></p>
		<?php
	}
?>
