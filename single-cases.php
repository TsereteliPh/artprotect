<?php get_header(); ?>

<section class="single-cases">
	<div class="container--large single-cases__container">
		<?php $title = get_field( 'title' ); ?>

		<div class="single-cases__title">
			<?php if ( $title['img'] ) echo wp_get_attachment_image( $title['img'], 'thumbnail', false, array( 'class' => 'single-cases__title-img' ) ); ?>

			<h1 class="title single-cases__title-text">
				<?php if ( $title['text'] ) : ?>
					ПРЕДСТАВЛЯЕМ ИНТЕРЕСЫ:<br>
				<?php endif; ?>

				<?php echo $title['text'] ? $title['text'] : get_the_title(); ?>

				<?php if ( $title['link'] ) : ?>
					<a href="<?php echo $title['link']['url']; ?>" class="single-cases__title-link" target="<?php echo $title['link']['target']; ?>"><?php echo $title['link']['title']; ?></a>
				<?php endif; ?>
			</h1>

			<svg width="1350" height="250"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-protect"></use></svg>
		</div>

		<?php
			$lists = get_field( 'lists' );
			if ( $lists ) :
				?>

				<div class="single-cases__content">
					<?php foreach ( $lists as $list ) : ?>
						<div class="single-cases__box">
							<div class="single-cases__label"><?php echo $list['title']; ?></div>

							<ul class="reset-list single-cases__list st-ul">
								<?php foreach ( $list['elements'] as $item ) : ?>
									<li class="single-cases__item"><?php echo $item['text']; ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php endforeach; ?>
				</div>

				<?php
			endif;
		?>
	</div>
</section>

<?php get_template_part('layouts/partials/blocks'); ?>

<?php get_footer(); ?>