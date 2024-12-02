<?php
	$small_text = get_sub_field( 'small_text' );
	$advantages = get_sub_field( 'advantages' );
?>
<section class="advantages">
	<div class="container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'advantages__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php if ( $small_text ) : ?>
			<div class="advantages__small-text"><?php echo $small_text; ?></div>
		<?php endif; ?>

		<?php if ( $advantages ) : ?>
			<ul class="reset-list advantages__list">
				<?php foreach ( $advantages as $advantage ) : ?>
					<li class="advantages__item">
						<div class="advantages__item-icon">
							<?php echo wp_get_attachment_image( $advantage['icon'], 'thumbnail', false ); ?>
						</div>

						<div class="advantages__item-title"><?php echo $advantage['title']; ?></div>

						<div class="advantages__item-text"><?php echo $advantage['text']; ?></div>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>

		<button class="btn btn--fill advantages__button" type="button" data-fancybox data-src="#consultation">Проконсультироваться</button>
	</div>
</section>
