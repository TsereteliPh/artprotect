<section class="reviews">
	<div class="container--large reviews__container">
		<?php
			$reviews_group = get_sub_field( 'reviews-group' );
			if ( $reviews_group ) :
				?>

				<div class="reviews__header">
					<ul class="reset-list reviews__tabs js-tabs">
						<?php foreach ( $reviews_group as $key => $reviews ) : ?>
							<li class="reviews__tab<?php echo $key == 0 ? ' active' : ''; ?>" data-tab="<?php echo $reviews['tax']->slug ?>"><?php echo $reviews['tax']->name; ?></li>
						<?php endforeach; ?>
					</ul>

					<button class="btn btn--fill reviews__btn" type="button" data-fancybox data-src="<?php //todo modal ?>">Оставить свой отзыв</button>
				</div>

				<div class="reviews__content">
					<?php foreach ( $reviews_group as $key => $reviews ) : ?>
						<ul class="reset-list reviews__list<?php echo $key == 0 ? ' active' : ''; ?>" id="<?php echo $reviews['tax']->slug; ?>">
							<?php
								foreach ( $reviews['reviews'] as $post ) {
									get_template_part('layouts/partials/cards/review-card', null, array(
										'class' => 'reviews__item'
									));
								}

								wp_reset_postdata();
							?>
						</ul>
					<?php endforeach; ?>
				</div>
				<?php
			endif;
		?>
	</div>
</section>
