<li class="service-card <?php echo $args['class']; ?>">
	<div class="service-card__title"><?php the_title(); ?></div>

	<div class="service-card__excerpt"><?php echo adem_excerpt( 360 ); ?></div>

	<a href="<?php the_permalink(); ?>" class="btn service-card__link">
		Узнать больше

		<div class="btn-arrow">
			<svg width="12" height="12"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-diagonal"></use></svg>
		</div>
	</a>
</li>
