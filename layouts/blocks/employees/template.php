<?php $protect = get_sub_field( 'protect' ); ?>

<section class="employees<?php echo $protect ? ' employees--indent' : ''; ?>">
	<div class="container--large employees__container">
		<?php
			$title = get_sub_field( 'title' );
			if ( $title['text'] ) {
				echo sprintf(
					'<%1$s class="title employees__title">
						%2$s
						<span>%3$s</span>
					</%1$s>',
					$title['type'],
					$title['text'],
					$title['indent']
				);
			}
		?>

		<?php
			$male = get_sub_field( 'male' );
			$female = get_sub_field( 'female' );
		?>

		<div class="employees__content">
			<div class="employees__male">
				<div class="employees__info">
					<svg width="31" height="38"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-shield"></use></svg>

					<?php if ( $male['name'] ) : ?>
						<div class="employees__name"><?php echo $male['name']; ?></div>
					<?php endif; ?>

					<?php if ( $male['position'] ) : ?>
						<div class="employees__job-title"><?php echo $male['position']; ?></div>
					<?php endif; ?>
				</div>

				<?php if ( $male['text'] ) : ?>
					<div class="employees__text"><?php echo $male['text']; ?></div>
				<?php endif; ?>
			</div>

			<div class="employees__female">
				<div class="employees__info">
					<svg width="31" height="38"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-shield"></use></svg>

					<?php if ( $female['name'] ) : ?>
						<div class="employees__name"><?php echo $female['name']; ?></div>
					<?php endif; ?>

					<?php if ( $female['position'] ) : ?>
						<div class="employees__job-title"><?php echo $female['position']; ?></div>
					<?php endif; ?>
				</div>

				<?php if ( $female['text'] ) : ?>
					<div class="employees__text"><?php echo $female['text']; ?></div>
				<?php endif; ?>

				<?php
					$link = get_sub_field( 'link' );
					if ( $link ) :
						?>

						<a href="<?php echo $link['url']; ?>" class="employees__link" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>

						<svg class="employees__arrow" width="100" height="15"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow"></use></svg>

						<?php
					endif;
				?>
			</div>
		</div>
	</div>

	<?php if ( $protect ) : ?>
		<svg class="employees__protect" width="1350" height="250"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-protect"></use></svg>
	<?php endif; ?>
</section>
