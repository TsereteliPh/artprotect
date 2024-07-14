<?php
	$welcome = get_field( 'welcome' );
	if ( $welcome ) :
		?>

		<section class="welcome">
			<div class="container welcome__container">
				<div class="welcome__content">
					<?php if ( $welcome['title'] ) : ?>
						<h1 class="welcome__title">
							<?php if ( $welcome['title']['highlighted'] ) : ?>
								<span><?php echo $welcome['title']['highlighted']; ?></span>
							<?php endif; ?>

							<?php echo $welcome['title']['text']; ?>
						</h1>
					<?php endif; ?>

					<?php if ( $welcome['text'] ) : ?>
						<div class="welcome__text"><?php echo $welcome['text']; ?></div>
					<?php endif; ?>

					<button class="btn btn--fill welcome__btn" type="button" data-fancybox data-src="#consultation">
						<svg width="24" height="24"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-message"></use></svg>
						ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ
					</button>

					<button class="btn welcome__callback" type="button" data-fancybox data-src="#callback">
						<svg width="22" height="22"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-callback"></use></svg>
						Заказать звонок
					</button>

					<?php if ( $welcome['link'] ) : ?>
						<a href="<?php echo $welcome['link']['url']; ?>" class="welcome__link" target="<?php echo $welcome['link']['target']; ?>">
							<div class="btn-arrow">
								<svg width="12" height="12"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
							</div>

							Или

							<span><?php echo $welcome['link']['title']; ?></span>
						</a>
					<?php endif; ?>
				</div>
			</div>

			<svg class="welcome__arrow" width="100" height="15"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow"></use></svg>
		</section>

		<?php
	endif;
?>
