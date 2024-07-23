<section class="cases-slider">
	<div class="container--large">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'cases-slider__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php
			$cases = get_sub_field( 'cases' );
			if ( $cases ) :
				?>

				<div class="cases-slider__slider swiper">
					<ul class="reset-list swiper-wrapper">
						<?php foreach ( $cases as $case ) : ?>
							<li class="cases-slider__item swiper-slide">
								<?php
									$post = $case['case'];
									setup_postdata( $post );
								?>

								<?php if ( $case['text'] ) : ?>
									<div class="cases-slider__item-text"><?php echo $case['text']; ?></div>
								<?php endif; ?>

								<?php if ( $case['client'] ) : ?>
									<div class="cases-slider__item-client">Клиент - <?php echo $case['client']; ?></div>
								<?php endif; ?>

								<a href="<?php the_permalink(); ?>" class="cases-slider__item-link">
									Подробнее

									<div class="btn-arrow">
										<svg width="12" height="12"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
									</div>
								</a>
							</li>
						<?php endforeach; ?>

						<?php wp_reset_postdata(); ?>
					</ul>

					<div class="cases-slider__controls">
						<div class="btn-prev cases-slider__prev">
							<svg width="100" height="15"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow"></use></svg>
						</div>

						<?php
							$link = get_sub_field( 'link' );
							if ( $link ) :
								?>

								<a href="<?php echo $link['url']; ?>" class="cases-slider__link" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>

								<?php
							endif;
						?>

						<div class="btn-next cases-slider__next">
							<svg width="100" height="15"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow"></use></svg>
						</div>
					</div>
				</div>

				<?php
			endif;
		?>
	</div>
</section>
