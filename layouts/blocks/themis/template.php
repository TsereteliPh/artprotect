<section class="themis">
	<div class="container--large themis__container">
		<?php if ( get_sub_field( 'text' ) ) : ?>
			<div class="themis__text"><?php the_sub_field( 'text' ); ?></div>
		<?php endif; ?>

		<?php if ( get_sub_field( 'small_text' ) ) : ?>
			<div class="themis__small-text"><?php the_sub_field( 'small_text' ); ?></div>
		<?php endif; ?>
	</div>
</section>
