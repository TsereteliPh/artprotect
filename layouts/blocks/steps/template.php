<section class="steps">
	<div class="container--large steps__container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'steps__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php
			$steps = get_sub_field( 'steps' );
			if ( $steps ) :
				?>

				<ul class="reset-list steps__list">
					<?php foreach ( $steps as $step ) : ?>
						<li class="steps__item">
							<?php if ( $step['label'] ) : ?>
								<div class="steps__item-label"><?php echo $step['label']; ?></div>
							<?php endif; ?>

							<?php if ( $step['text'] ) : ?>
								<div class="steps__item-text"><?php echo $step['text']; ?></div>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>

				<?php
			endif;
		?>
	</div>
</section>
