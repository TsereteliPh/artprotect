</main>

<footer class="footer">
	<div class="container--large footer__container">
		<div class="footer__info">
			<div class="title footer__label">Обратная связь</div>

			<div class="footer__text">Заполните форму, мы свяжемся с вами для обсуждения проблемы</div>
		</div>

		<form method="POST" class="footer__form" name="Консультация">
			<input type="text" class="input footer__input" name="client_name" placeholder="Ваше имя" required>

			<input type="tel" class="input footer__input" name="client_tel" pattern=".{18,}" placeholder="+7 (999) 999-99-99" required>

			<button class="btn btn--fill footer__form-submit" type="submit">Проконсультироваться</button>

			<a href="<?php echo get_privacy_policy_url(); ?>" class="footer__form-policy">Я соглашаюсь с политикой конфиденциальности</a>

			<input type="text" class="hidden" name="page_request" value="<?php echo is_archive() ? get_the_archive_title() : get_the_title(); ?>">

			<?php wp_nonce_field( 'Консультация', 'footer-nonce' ); ?>
		</form>

		<div class="footer__info">
			<div class="title footer__label">Контакты</div>

			<svg width="101" height="16"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow"></use></svg>
		</div>

		<div class="footer__content">
			<?php
				$phones = get_field( 'phones', 'options' );
				$email = get_field( 'email', 'options' );
			?>

			<div class="footer__phones-wrapper">
				<?php if ( $phones ) : ?>
					<div class="footer__phones">
						<?php foreach ( $phones as $tel ) : ?>
							<a href="tel:<?php echo preg_replace( '/[^0-9,+]/', '', $tel['tel'] ); ?>" class="footer__tel"><?php echo $tel['tel']; ?></a>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>

				<button class="btn footer__callback" type="button" data-fancybox data-src="#callback">
					<svg width="22" height="22"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-callback"></use></svg>
					Заказать звонок
				</button>
			</div>

			<div class="footer__addresses">
				<?php if ( $email ) : ?>
					<a href="mailto:<?php echo $email; ?>" class="footer__email"><?php echo $email; ?></a>
				<?php endif; ?>
			</div>

			<div class="footer__policy">
				© <?php echo date( 'Y' ); ?>. Все права защищены
				<a href="<?php echo get_privacy_policy_url(); ?>">Политика конфиденциальности</a>
			</div>

			<a href="<?php echo bloginfo( 'url' ); ?>" class="footer__logo" aria-label="Логотип компании ARTprotect"></a>
		</div>

		<svg class="footer__protect" width="1344" height="250"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-protect"></use></svg>
	</div>
</footer>

<?php get_template_part('layouts/partials/modals'); ?>

<?php wp_footer(); ?>

</body>
</html>
