<li class="review-card <?php echo $args['class']; ?>">
	<?php $info = get_field( 'person-info' ); ?>

	<div class="review-card__info">
		<?php echo wp_get_attachment_image( $info['img'] ? $info['img'] : 376, 'thumbnail', false, array( 'class' => 'review-card__info-img') ); ?>

		<div class="review-card__info-name"><?php the_title(); ?></div>

		<?php if ( $info['rating'] ) : ?>
			<div class="review-card__info-rating">
				<?php for ($i=0; $i < 5; $i++) : ?>
					<svg class="review-card__info-star<?php echo $i < $info['rating'] ? ' review-card__info-star--bright' : ''; ?>" width="13" height="12"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-star"></use></svg>
				<?php endfor; ?>
			</div>
		<?php endif; ?>

		<?php if ( $info['city'] ) : ?>
			<div class="review-card__info-city"><?php echo $info['city']; ?></div>
		<?php endif; ?>

		<?php if ( $info['site'] ) : ?>
			<div class="review-card__info-site">Сайт: <a href="<?php echo $info['site']; ?>" target="_blank"><?php echo $info['site']; ?></a></div>
		<?php endif; ?>
	</div>

	<?php
		$review_letter = get_field( 'review-letter' );
		$review_video = get_field( 'review-video' );
		$review_text = get_field( 'review-text' );
	?>

	<?php if ( $review_text ) : ?>
		<div class="review-card__text"><?php echo $review_text; ?></div>
	<?php endif; ?>

	<?php if ( $review_letter ) : ?>
		<a href="<?php echo $review_letter['url']; ?>" class="review-card__letter" data-fancybox>
			<?php echo wp_get_attachment_image( $review_letter['ID'], 'medium', false ); ?>
		</a>
	<?php endif; ?>

	<?php if ( $review_video ) : ?>
		<a href="<?php echo $review_video[$review_video['type']]; ?>" class="review-card__video" data-fancybox>
			<?php echo wp_get_attachment_image( $review_video['preview'] ? $review_video['preview'] : 150, 'medium', false ); ?>

			<svg width="40" height="40"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-play"></use></svg>
		</a>
	<?php endif; ?>
</li>
