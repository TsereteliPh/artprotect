<?php
if ( ! empty( $args['title']['text'] ) || ! empty( $args['title']['highlighted'] ) ) {
	echo sprintf(
		'<%1$s class="title %2$s">
			<span>%3$s</span>
			%4$s
		</%1$s>',
		$args['title']['type'],
		$args['class'],
		$args['title']['highlighted'],
		$args['title']['text']
	);
}
