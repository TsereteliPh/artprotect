<?php
	$text = get_sub_field( 'text' );
	$services = get_sub_field( 'services' );
?>
<section class="info-slider">
	<div class="container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'info-slider__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php if ( $text ) : ?>
			<div class="info-slider__text"><?php echo $text; ?></div>
		<?php endif; ?>

		<?php if ( $services ) : ?>
			<div class="info-slider__slider swiper">
				<ul class="reset-list info-slider__list swiper-wrapper">
					<?php foreach ( $services as $service ) : ?>
						<?php
							$info = get_sub_field( 'content' ) === 'info';
							if ( ! $info ) {
								$post = $service['service'];
								setup_postdata( $post );
							}
						?>

						<li class="info-slider__item swiper-slide">
							<div class="info-slider__item-icon">
								<?php echo wp_get_attachment_image( $service['icon'], 'medium', false ); ?>
							</div>

							<div class="info-slider__item-label"><?php echo $info ? $service['title'] : the_title(); ?></div>

							<div class="info-slider__item-excerpt"><?php echo $info ? $service['text'] : adem_excerpt(150); ?></div>

							<?php if ( ! $info ) : ?>
								<a href="<?php the_permalink(); ?>" class="btn info-slider__item-link">
									Узнать больше

									<div class="btn-arrow">
										<svg width="12" height="12"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
									</div>
								</a>
							<?php endif; ?>

							<?php if ( $info && $service['link'] ) : ?>
								<a href="<?php echo $service['link']['url']; ?>" class="btn info-slider__item-link" target="<?php echo $service['link']['target']; ?>">
									Узнать больше

									<div class="btn-arrow">
										<svg width="12" height="12"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
									</div>
								</a>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>

					<?php if ( ! $info ) wp_reset_postdata(); ?>
				</ul>

				<div class="info-slider__controls">
					<div class="btn-prev info-slider__prev">
						<svg width="100" height="15"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow"></use></svg>
					</div>

					<div class="btn-next info-slider__next">
						<svg width="100" height="15"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow"></use></svg>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>
