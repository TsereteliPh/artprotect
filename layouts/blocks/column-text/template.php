<?php
	$title = get_sub_field( 'title' );
	$small_text = get_sub_field( 'small_text' );
	$text = get_sub_field( 'text' );
?>
<section class="column-text">
	<div class="container column-text__container">
		<div class="column-text__box">
			<?php
				if ( $title['text'] ) {
					echo sprintf(
						'<%1$s class="column-text__title">%2$s</%1$s>',
						$title['type'],
						$title['text'],
					);
				}
			?>

			<?php if ( $small_text ) : ?>
				<div class="column-text__small-text"><?php echo $small_text; ?></div>
			<?php endif; ?>
		</div>

		<?php if ( $text ) : ?>
			<div class="column-text__text"><?php echo $text; ?></div>
		<?php endif; ?>
	</div>
</section>
