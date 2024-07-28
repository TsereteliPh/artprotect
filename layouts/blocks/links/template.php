<section class="links">
	<div class="container links__container">
		<div class="links__box">
			<?php get_template_part( '/layouts/partials/highlighted-title', null, array(
				'class' => 'links__title',
				'title' => get_sub_field( 'title' )
			) ); ?>

			<?php if ( get_sub_field( 'text' ) ) : ?>
				<div class="links__text"><?php the_sub_field( 'text' ); ?></div>
			<?php endif; ?>
		</div>

		<?php
			$links = get_sub_field( 'links' );
			if ( $links ) :
				?>

				<ul class="reset-list links__list">
					<?php foreach ( $links as $link ) : ?>
						<li class="links__item">
							<a href="<?php echo $link['link']; ?>" class="links__link"><?php echo $link['link']; ?></a>
						</li>
					<?php endforeach; ?>
				</ul>

				<?php
			endif;
		?>
	</div>
</section>
