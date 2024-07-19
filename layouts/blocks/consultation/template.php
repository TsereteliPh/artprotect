<section class="consultation">
	<div class="container--large consultation__container">
		<?php
			$title = get_sub_field( 'title' );
			if ( $title['text'] ) {
				echo sprintf(
					'<%1$s class="title consultation__title">
						<span>%2$s</span>
						%3$s
					</%1$s>',
					$title['type'],
					$title['highlighted'],
					$title['text']
				);
			}
		?>

		<button class="btn btn--fill consultation__btn" type="button" data-fancybox data-src="#consultation">Получить консультацию по моей ситуации</button>
	</div>
</section>
