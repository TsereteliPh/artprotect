<?php get_header(); ?>

<section class="single-services">
	<div class="container single-services__container">
		<h1 class="title single-services__title"><?php the_title(); ?></h1>

		<div class="single-services__excerpt"><?php the_excerpt(); ?></div>

		<?php if ( get_the_post_thumbnail() ) : ?>
			<div class="single-services__img"><?php the_post_thumbnail( 'full' ); ?></div>
		<?php endif; ?>

		<div class="single-services__content">
			<div class="single-services__text"><?php the_field( 'text' ); ?></div>

			<div class="single-services__sidebar">
				<?php if ( get_field( 'price' ) ) : ?>
					<div class="single-services__option single-services__option--price">
						<div class="single-services__label">Стоимость:</div>

						<div class="single-services__option-text">от <?php the_field( 'price' ); ?> рублей</div>
					</div>
				<?php endif; ?>

				<?php if ( get_field( 'deadline' ) ) : ?>
					<div class="single-services__option single-services__option--price">
						<div class="single-services__label">Срок:</div>

						<div class="single-services__option-text"><?php the_field( 'deadline' ); ?></div>
					</div>
				<?php endif; ?>

				<button class="btn btn--fill single-services__btn" type="button" data-fancybox data-src="#callback">Заказать услугу</button>

				<?php
					$query = new WP_Query([
						'post_type' => 'services',
						'post__not_in' => [ get_the_ID() ],
						'posts_per_page' => 5
					]);

					$posts = $query->posts;

					if ( $posts ) :
						?>

						<div class="single-services__also">
							<div class="single-services__label">Смотрите также</div>

							<div class="single-services__also-links">
								<?php foreach ( $posts as $post ) : ?>
									<a href="<?php echo the_permalink( $post->ID ); ?>" class="single-services__also-link"><?php echo $post->post_title; ?></a>
								<?php endforeach; ?>
							</div>
						</div>

						<?php wp_reset_postdata(); ?>

						<?php
					endif;
				?>

				<div class="single-services__share">
					<div class="single-services__label">Поделиться</div>

					<?php echo do_shortcode( '[Sassy_Social_Share]' ); ?>
				</div>
			</div>
		</div>

		<?php
			$next_post = get_next_post();

			if ( $next_post ) :
				?>

				<a href="<?php the_permalink( $next_post ); ?>" class="single-services__next">
					<div class="single-services__next-label">Следующая услуга</div>

					<div class="single-services__next-title"><?php echo $next_post->post_title; ?></div>

					<svg width="100" height="15"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow"></use></svg>
				</a>

				<?php
			endif;
		?>
	</div>
</section>

<?php get_template_part('layouts/partials/blocks'); ?>

<?php get_footer(); ?>
