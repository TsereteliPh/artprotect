<section class="main-text">
	<div class="container main-text__container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'main-text__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php if ( get_sub_field( 'text' ) ) : ?>
			<div class="main-text__text">
				<?php the_sub_field( 'text' ); ?>
			</div>
		<?php endif; ?>
	</div>
</section>
