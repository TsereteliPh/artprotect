<section class="how-it-works">
	<div class="container how-it-works__container">
		<div class="how-it-works__content">
			<?php get_template_part( '/layouts/partials/title', null, array(
				'class' => 'how-it-works__title',
				'title' => get_sub_field( 'title' )
			) ); ?>

			<?php if ( get_sub_field( 'text' ) ) : ?>
				<div class="how-it-works__text"><?php the_sub_field( 'text' ); ?></div>
			<?php endif; ?>

			<div class="how-it-works__arrow">
				<svg width="100" height="15"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow"></use></svg>
			</div>

			<button class="btn btn--fill how-it-works__btn" type="button" data-fancybox data-src="#consultation">Проконсультироваться</button>
		</div>

		<div class="how-it-works__scheme">
			<div class="how-it-works__scheme-box">
				<div class="how-it-works__scheme-object how-it-works__scheme-object--art">
					<div class="how-it-works__scheme-icon">
						<svg width="39" height="41"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-art"></use></svg>
					</div>

					<div class="how-it-works__scheme-label">Автор</div>
				</div>

				<div class="how-it-works__scheme-object how-it-works__scheme-object--logo">
					<div class="how-it-works__scheme-icon">
						<div class="how-it-works__scheme-icon-logo"></div>
					</div>

					<div class="how-it-works__scheme-label">АртПроект</div>
				</div>

				<div class="how-it-works__scheme-object how-it-works__scheme-object--court">
					<div class="how-it-works__scheme-icon">
						<svg width="39" height="36"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-court"></use></svg>
					</div>

					<div class="how-it-works__scheme-label">Суд</div>
				</div>

				<div class="how-it-works__scheme-object how-it-works__scheme-object--intruder">
					<div class="how-it-works__scheme-icon">
						<svg width="31" height="38"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-intruder"></use></svg>
					</div>

					<div class="how-it-works__scheme-label">Нарушители</div>
				</div>
			</div>

			<?php
				$scheme = get_sub_field( 'scheme' );
				if ( $scheme ) :
					?>

					<ol class="how-it-works__scheme-list">
						<?php foreach ( $scheme as $item ) : ?>
							<li class="how-it-works__scheme-item"><?php echo $item['text']; ?></li>
						<?php endforeach; ?>
					</ol>

					<?php
				endif;
			?>
		</div>
	</div>
</section>
