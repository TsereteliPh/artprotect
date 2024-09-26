<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K8SWV9FF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php wp_body_open(); ?>

<?php
	$phones = get_field( 'phones', 'options' );
	$email = get_field( 'email', 'options' );
?>

<header class="header">
	<div class="container--large">
		<div class="header__panel">
			<a href="<?php echo bloginfo( 'url' ); ?>" class="header__logo" aria-label="Логотип компании ARTprotect"></a>

			<?php wp_nav_menu(array(
				'theme_location' => 'menu_main',
				'container' => '',
				'menu_id' => 'menu-main',
				'menu_class' => 'reset-list header__menu'
			)); ?>

			<?php if ( $phones ) : ?>
				<div class="header__phones">
					<?php foreach ( $phones as $tel ) : ?>
						<a href="tel:<?php echo preg_replace( '/[^0-9,+]/', '', $tel['tel'] ); ?>" class="header__tel"><?php echo $tel['tel']; ?></a>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>

			<button class="btn header__callback" type="button" data-fancybox data-src="#callback">
				<svg width="22" height="22"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-callback"></use></svg>
				Заказать звонок
			</button>

			<button class="header__burger" type="button" aria-label="Открыть меню">
				<span></span>
			</button>
		</div>

		<div class="header__drop">
			<?php wp_nav_menu(array(
				'theme_location' => 'menu_main',
				'container' => '',
				'menu_id' => 'menu-main',
				'menu_class' => 'reset-list header__drop-menu'
			)); ?>

			<div class="header__drop-info">
				<?php if ( $email )	: ?>
					<a href="mailto:<?php echo $email; ?>" class="header__drop-email"><?php echo $email; ?></a>
				<?php endif; ?>

				<?php if ( $phones ) : ?>
					<div class="header__drop-phones">
						<?php foreach ( $phones as $tel ) : ?>
							<a href="tel:<?php echo preg_replace( '/[^0-9,+]/', '', $tel['tel'] ); ?>" class="header__drop-tel"><?php echo $tel['tel']; ?></a>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>

				<button class="btn header__drop-callback" type="button" data-fancybox data-src="#callback">
					<svg width="22" height="22"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-callback"></use></svg>
					Заказать звонок
				</button>
			</div>
		</div>
	</div>
</header>

<div class="gradient-background">
	<div class="gradient-background__element"></div>
	<div class="gradient-background__element"></div>
	<div class="gradient-background__element"></div>
	<div class="gradient-background__element"></div>
</div>

<?php if ( ! is_front_page() && function_exists( 'yoast_breadcrumb' ) ) : ?>
	<div class="breadcrumb">
		<div class="container">
			<?php echo yoast_breadcrumb(); ?>
		</div>
	</div>
<?php endif ?>

<main class="main<?php echo is_front_page() ? ' main--index' : ''; ?>">
	<?php if ( is_front_page() ) get_template_part( 'layouts/partials/welcome' ); ?>

	<?php if ( ! is_front_page() && get_field( 'page_title_background' ) ) : ?>
		<section class="page-title">
			<div class="container--large page-title__container">
				<div class="page-title__background"><?php the_field( 'page_title_background' ); ?></div>

				<h1 class="title page-title__title"><?php the_field( 'page_title' ); ?></h1>
			</div>
		</section>
	<?php endif; ?>
