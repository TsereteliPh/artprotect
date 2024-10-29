<li class="blog-card <?php echo $args['class']; ?>">
	<div class="blog-card__img">
		<?php
			if ( get_the_post_thumbnail_url() ) {
				the_post_thumbnail( 'medium' );
			} else {
				echo wp_get_attachment_image( 150, 'medium', false );
			}
		?>
	</div>

	<a href="<?php the_permalink(); ?>" class="blog-card__link"><?php the_title(); ?></a>
</li>
