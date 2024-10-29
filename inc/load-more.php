<?php
add_action( 'wp_ajax_load_more', 'load_more' );
add_action( 'wp_ajax_nopriv_load_more', 'load_more' );
function load_more() {
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1;

	$query = new WP_Query( $args );

	$return_html = '';
	if( $query->have_posts() ) {
		while( $query->have_posts() ) {
			$query->the_post();
			if ( $args['post_type'] == 'services' ) {
				$return_html .= get_template_part('layouts/partials/cards/post-card', null, array(
					'class' => 'services__item'
				));
			} else if ( $args['post_type'] == 'cases' ) {
				$return_html .= get_template_part('layouts/partials/cards/post-card', null, array(
					'class' => 'cases__item'
				));
			} else if ( $args['cat'] == 7 ) {
				$return_html .= get_template_part('layouts/partials/cards/blog-card', null, array(
					'class' => 'blog__item'
				));
			}
		}
		wp_reset_postdata();
	}

	echo $return_html;
	wp_die();
}
