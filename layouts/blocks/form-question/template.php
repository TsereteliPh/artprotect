<section class="form-question">
	<div class="container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'form-question__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<form method="POST" class="form-question__form" name="Вопрос">
			<input type="text" class="input form-question__input" name="client_name" placeholder="Ваше имя" required>

			<input type="email" class="input form-question__input" name="client_email" placeholder="E-mail" required>

			<input type="text" class="input form-question__input" name="client_message" placeholder="Текст вопроса" required>

			<div class="form-question__policy">
				Нажимая кнопку “Отправить” вы соглашаетесь на обработку ваших персональных данных,  в соответствии с <a href="<?php echo get_privacy_policy_url(); ?>">Политикой конфиденциальности</a>
			</div>

			<button class="btn btn--fill form-question__submit" type="submit">Отправить</button>

			<input type="text" class="hidden" name="page_request" value="<?php echo is_archive() ? get_the_archive_title() : get_the_title(); ?>">

			<?php wp_nonce_field( 'Вопрос', 'form-question-nonce' ); ?>
		</form>
	</div>
</section>
