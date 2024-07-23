<section class="links">
	<div class="container links__container">
		<div class="links__box">
			<?php
				$title = get_sub_field( 'title' );
				if ( $title['highlighted'] || $title['text'] ) {
					echo sprintf(
						'<%1$s class="title links__title">
							<span>%2$s</span>
							%3$s
						</%1$s>',
						$title['type'],
						$title['highlighted'],
						$title['text']
					);
				}
			?>

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
