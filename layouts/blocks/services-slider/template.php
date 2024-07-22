<section class="services-slider">
	<div class="container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'services-slider__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php
			$services = get_sub_field( 'services' );
			if ( $services ) :
				?>

				<div class="services-slider__slider swiper">
					<ul class="reset-list services-slider__list swiper-wrapper">
						<?php foreach ( $services as $service ) : ?>
							<?php
								$post = $service['service'];
								setup_postdata( $post );
							?>

							<li class="services-slider__item swiper-slide">
								<div class="services-slider__item-icon">
									<?php echo wp_get_attachment_image( $service['icon'], 'medium', false ); ?>
								</div>

								<div class="services-slider__item-label"><?php the_title(); ?></div>

								<div class="services-slider__item-excerpt"><?php echo adem_excerpt(150); ?></div>

								<a href="<?php the_permalink(); ?>" class="btn services-slider__item-link">
									Узнать больше

									<div class="btn-arrow">
										<svg width="12" height="12"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
									</div>
								</a>
							</li>
						<?php endforeach; ?>

						<?php wp_reset_postdata(); ?>
					</ul>

					<div class="services-slider__controls">
						<div class="btn-prev services-slider__prev">
							<svg width="100" height="15"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow"></use></svg>
						</div>

						<div class="btn-next services-slider__next">
							<svg width="100" height="15"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow"></use></svg>
						</div>
					</div>
				</div>

				<?php
			endif;
		?>
	</div>
</section>
