<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'adem_setup' ) ) {
	function adem_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
		add_theme_support( 'editor-styles' );
		add_editor_style();

		register_nav_menus(
			array(
				'menu_main' => 'Основное меню',
			)
		);
	}

	//	register thumbnails
//	add_image_size( '123x123', 123, 123, true );

	//	register post types
	register_post_type( 'services', [
		'label' => null,
		'labels' => [
			'name' => 'Услуги',
			'singular_name' => 'Услуга',
			'add_new' => 'Добавить услугу',
			'add_new_item' => 'Добавить услугу',
			'edit_item' => 'Редактировать услугу',
			'new_item' => 'Новая услуга',
			'view_item' => 'Смотреть услугу',
			'search_items' => 'Найти услугу',
			'not_found' => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'menu_name' => 'Услуги',
		],
		'public' => true,
		'show_in_menu' => true,
		'menu_position' => 21,
		'menu_icon' => 'dashicons-portfolio',
		'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
		'taxonomies' => ['services_type'],
		'has_archive' => false,
		'rewrite' => false,
		'query_var' => true,
		'publicly_queryable' => true
	] );

	register_post_type( 'cases', [
		'label' => null,
		'labels' => [
			'name' => 'Кейсы',
			'singular_name' => 'Кейс',
			'add_new' => 'Добавить кейс',
			'add_new_item' => 'Добавить кейс',
			'edit_item' => 'Редактировать кейс',
			'new_item' => 'Новый кейс',
			'view_item' => 'Смотреть кейс',
			'search_items' => 'Найти кейс',
			'not_found' => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'menu_name' => 'Кейсы',
		],
		'public' => true,
		'show_in_menu' => true,
		'menu_position' => 22,
		'menu_icon' => 'dashicons-groups',
		'supports' => ['title', 'editor', 'excerpt'],
		'taxonomies' => ['cases_type'],
		'has_archive' => false,
		'rewrite' => false,
		'query_var' => true,
		'publicly_queryable' => true
	] );
}

add_action( 'after_setup_theme', 'adem_setup' );

// Return classic widgets
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
add_filter( 'use_widgets_block_editor', '__return_false' );

add_action( 'wp_enqueue_scripts', 'adem_scripts' );
function adem_scripts() {
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'wc-block-style' );
	wp_dequeue_style( 'global-styles' );
	wp_dequeue_style( 'classic-theme-styles' );
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/vendor/css/fancybox.css', array(), '4.0.31' );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/assets/vendor/js/fancybox.umd.js', array(), '4.0.31', true );
	wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/vendor/css/swiper-bundle.min.css', array(), '10.3.1' );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/vendor/js/swiper-bundle.min.js', array(), '10.3.1', true );
	wp_enqueue_style( 'adem', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_script( 'adem', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true ); //! change to minified version
	wp_localize_script( 'adem', 'adem_ajax', array( 'url' => admin_url( 'admin-ajax.php' ) ) );
}

// disable scale images
add_filter( 'big_image_size_threshold', '__return_false' );

// remove prefix in archive title
add_filter( 'get_the_archive_title_prefix', '__return_empty_string' );

// excerpt
function adem_excerpt( $limit, $ID = null ) {
	return mb_substr( get_the_excerpt( $ID ), 0, $limit ) . '...';
}

// Breadcrumbs indent
add_action('wp_footer', 'adem_breadcrumbs_indent');
function adem_breadcrumbs_indent() {
	$links = get_field( 'links', 'options' );
	?>
		<script>
			const breadcrumbs = document.querySelector('.breadcrumb');

			if (breadcrumbs) {
				const main = document.querySelector('.main');

				let indent = window.innerWidth > 576 ? 50 : 30;

				let mainIndent = parseInt(getComputedStyle(main).marginTop);

				main.style.marginTop = breadcrumbs.clientHeight + mainIndent + indent + 'px';
			}
		</script>
	<?php
}

require 'inc/acf.php';
require 'inc/load-more.php';
require 'inc/mail.php';
require 'inc/svg.php';
require 'inc/tiny-mce.php';
require 'inc/traffic.php';
