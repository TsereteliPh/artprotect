<section class="employees-slider">
	<div class="container--large">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'employees-slider__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php
			$employees = get_sub_field( 'employees' );
			if ( $employees ) :
				?>

				<div class="employees-slider__slider swiper">
					<ul class="reset-list employees-slider__list swiper-wrapper">
						<?php foreach ( $employees as $employee ) : ?>
							<li class="employees-slider__item swiper-slide">
								<div class="employees-slider__item-photo">
									<?php echo wp_get_attachment_image( $employee['photo'] ? $employee['photo'] : 150, 'large', false ); ?>
								</div>

								<?php if ( $employee['name'] || $employee['position'] ) : ?>
									<div class="employees-slider__item-info">
										<svg width="31" height="38"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-shield"></use></svg>

										<?php if ( $employee['name'] ) : ?>
											<div class="employees-slider__item-name"><?php echo $employee['name']; ?></div>
										<?php endif; ?>

										<?php if ( $employee['position'] ) : ?>
											<div class="employees-slider__item-job-title"><?php echo $employee['position']; ?></div>
										<?php endif; ?>
									</div>
								<?php endif; ?>
							</li>
						<?php endforeach; ?>
					</ul>

					<div class="employees-slider__controls">
						<div class="btn-prev employees-slider__prev">
							<svg width="100" height="15"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow"></use></svg>
						</div>

						<div class="btn-next employees-slider__next">
							<svg width="100" height="15"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow"></use></svg>
						</div>
					</div>
				</div>

				<?php
			endif;
		?>
	</div>
</section>
