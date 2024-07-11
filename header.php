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
<?php wp_body_open(); ?>

<?php
	$tel = get_field( 'tel', 'options' );
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

			<?php if ( $tel ) : ?>
				<a href="tel:<?php echo preg_replace( '/[^0-9,+]/', '', $tel ); ?>" class="header__tel"><?php echo $tel; ?></a>
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

				<?php if ( $tel ) : ?>
					<a href="tel:<?php echo preg_replace( '/[^0-9,+]/', '', $tel ); ?>" class="header__drop-tel"><?php echo $tel; ?></a>
				<?php endif; ?>

				<button class="btn header__drop-callback" type="button" data-fancybox data-src="#callback">
					<svg width="22" height="22"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-callback"></use></svg>
					Заказать звонок
				</button>
			</div>
		</div>
	</div>
</header>

<main class="main">
