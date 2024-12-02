<?php
	$small_text = get_sub_field( 'small_text' );
	$faq = get_sub_field( 'faq' );
?>
<section class="faq">
	<div class="container">
		<div class="faq__header">
			<?php get_template_part( '/layouts/partials/highlighted-title', null, array(
				'class' => 'faq__title',
				'title' => get_sub_field( 'title' )
			) ); ?>

			<?php if ( $small_text ) : ?>
				<div class="faq__small-text"><?php echo $small_text; ?></div>
			<?php endif; ?>
		</div>

		<?php if ( $faq ) : ?>
			<ul class="reset-list faq__list js-accordion">
				<?php foreach ( $faq as $item ) : ?>
					<li class="faq__item">
						<button class="faq__item-button"><?php echo $item['question']; ?></button>

						<div class="faq__item-answer"><?php echo $item['answer']; ?></div>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
</section>
