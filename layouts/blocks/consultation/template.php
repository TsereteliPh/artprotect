<section class="consultation">
	<div class="container--large consultation__container">
		<?php get_template_part( '/layouts/partials/highlighted-title', null, array(
			'class' => 'consultation__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<button class="btn btn--fill consultation__btn" type="button" data-fancybox data-src="#consultation">Получить консультацию по моей ситуации</button>
	</div>
</section>
