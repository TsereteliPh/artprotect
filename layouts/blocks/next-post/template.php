<?php
	$next_post = get_next_post();
	if ( $next_post->post_type === 'cases' || $next_post->post_type === 'services' ) :
		?>

		<section class="next-post">
			<div class="container next-post__container">
				<a href="<?php the_permalink( $next_post ); ?>" class="next-post__link">
					<div class="next-post__label"><?php echo $next_post->post_type === 'cases' ? 'Следующий кейс' : 'Следующая услуга'; ?></div>

					<div class="next-post__title">
						<?php if ( $next_post->post_type === 'cases' ) : ?>
							<?php
								$title = get_field( 'title', $next_post->ID );
								if ( $title['text'] ) :
									?>

									Представляем интересы:<br>

									<?php
								endif;
							?>

							<?php echo $title['text'] ? $title['text'] : get_the_title( $next_post->ID ); ?>

							<?php if ( $title['link']['title'] ) : ?>
								<span><?php echo $title['link']['title']; ?></span>
							<?php endif; ?>
						<?php else : ?>
							<?php echo $next_post->post_title; ?>
						<?php endif; ?>
					</div>

					<svg width="100" height="15"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow"></use></svg>
				</a>
			</div>
		</section>

		<?php
	endif;
?>
