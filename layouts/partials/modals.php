<?php
	$privacy_url = get_privacy_policy_url();

	if ( is_archive() ) {
		$page_title = get_the_archive_title();
	} else {
		$page_title = get_the_title();
	}
?>

<div class="modal modal--success" id="success">
	<div class="modal__info">
		<div class="title modal__title">Спасибо!</div>

		<div class="modal__text">Мы получили вашу заявку и успешно её обработали! Наши специалисты свяжутся с вами в ближайшее время.</div>
	</div>
</div>

<div class="modal modal--callback" id="callback">
	<div class="modal__info">
		<div class="title modal__title">Заказать звонок</div>

		<div class="modal__text">Заполните форму, мы свяжемся с вами для обсуждения проблемы</div>
	</div>

	<form method="POST" class="modal__form" name="Звонок">
		<input type="text" class="input modal__input" name="client_name" placeholder="Ваше имя" required>

		<input type="tel" class="input modal__input" name="client_tel" pattern=".{18,}" placeholder="+7 (999) 999-99-99" required>

		<a href="<?php echo $privacy_url; ?>" class="modal__policy">Я соглашаюсь с политикой конфиденциальности</a>

		<button class="btn btn--fill modal__submit" type="submit">Заказать звонок</button>

		<input type="text" class="hidden" name="page_request" value="<?php echo $page_title; ?>">

		<?php wp_nonce_field( 'Звонок', 'modal-callback-nonce' ); ?>
	</form>
</div>

<div class="modal modal--consultation" id="consultation">
	<div class="modal__info">
		<div class="title modal__title">Получить консультацию</div>
	</div>

	<form method="POST" class="modal__form" name="Консультация">
		<input type="text" class="input modal__input" name="client_name" placeholder="Ваше имя" required>

		<input type="tel" class="input modal__input" name="client_tel" pattern=".{18,}" title="Минимум 16 символов" placeholder="+7 (999) 999-99-99" required>

		<textarea class="input modal__textarea" name="client_message" placeholder="Ваш вопрос"></textarea>

		<a href="<?php echo $privacy_url; ?>" class="modal__policy">Я соглашаюсь с политикой конфиденциальности</a>

		<button class="btn btn--fill modal__submit" type="submit">Проконсультироваться</button>

		<input type="text" class="hidden" name="page_request" value="<?php echo $page_title; ?>">

		<?php wp_nonce_field( 'Консультация', 'modal-consultation-nonce' ); ?>
	</form>
</div>

<div class="modal modal--consultation" id="review">
	<div class="modal__info">
		<div class="title modal__title">Оставить отзыв</div>
	</div>

	<form method="POST" class="modal__form" name="Отзыв">
		<input type="text" class="input modal__input" name="client_name" placeholder="Ваше имя" required>

		<input type="email" class="input modal__input" name="client_email" placeholder="E - mail" required>

		<textarea class="input modal__textarea" name="client_message" placeholder="Ваш отзыв" required></textarea>

		<a href="<?php echo $privacy_url; ?>" class="modal__policy">Я соглашаюсь с политикой конфиденциальности</a>

		<button class="btn btn--fill modal__submit" type="submit">Отправить</button>

		<input type="text" class="hidden" name="page_request" value="<?php echo $page_title; ?>">

		<?php wp_nonce_field( 'Отзыв', 'modal-review-nonce' ); ?>
	</form>
</div>
