<li class="post-card <?php echo $args['class']; ?>">
	<div class="post-card__title">
		<?php if ( get_post_type() === 'cases' ) : ?>
			<?php
				$title = get_field( 'title' );
				if ( $title['text'] ) :
					?>

					Представляем интересы:<br>

					<?php
				endif;
			?>

			<?php echo $title['text'] ? $title['text'] : get_the_title(); ?>

			<?php if ( $title['link'] ) : ?>
				<a href="<?php echo $title['link']['url']; ?>" target="<?php echo $title['link']['target']; ?>"><?php echo $title['link']['title']; ?></a>
			<?php endif; ?>
		<?php else : ?>
			<?php the_title(); ?>
		<?php endif; ?>
	</div>

	<?php if ( get_the_excerpt() ) : ?>
		<div class="post-card__excerpt"><?php echo adem_excerpt( 360 ); ?></div>
	<?php endif; ?>

	<a href="<?php the_permalink(); ?>" class="btn post-card__link">
		Узнать больше

		<div class="btn-arrow">
			<svg width="12" height="12"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
		</div>
	</a>
</li>
