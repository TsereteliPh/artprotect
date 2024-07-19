<section class="services">
	<div class="container--large services__container">
		<ul class="reset-list services__list js-show-more-container">
			<?php
				$query = new WP_Query( [
					'post_type' => 'services',
					'posts_per_page' => 6,
					'paged' => 1,
				] );

				$posts = $query->posts;

				if ( $query->have_posts() ) {
					if ( is_archive() ) {
						foreach ( $posts as $post ) {
							get_template_part('/layouts/partials/cards/service-card', null, array(
								'class' => 'services__item',
							) );
						}
					} else {
						while ( $query->have_posts() ) {
							$query->the_post();

							get_template_part('/layouts/partials/cards/service-card', null, array(
								'class' => 'services__item',
							) );
						}

						wp_reset_postdata();
					}
				}
			?>
		</ul>

		<button class="btn-show-more services__btn js-show-more<?php echo ( $query->max_num_pages > 1) ? '' : ' hidden'; ?>" type="button">
			Показать еще

			<svg width="100" height="15"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow"></use></svg>
		</button>

		<script>
			let posts = '<?php echo json_encode($query->query_vars); ?>';
			let current_page = <?php echo ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>;
			let max_pages = <?php echo $query->max_num_pages; ?>;
		</script>
	</div>
</section>
