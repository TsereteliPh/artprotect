<?php
	$tel = get_field( 'tel', 'options' );
	$email = get_field( 'email', 'options' );
	$address = get_field( 'address', 'options' );
	$requisites = get_field( 'requisites', 'options' );
	$map = get_field( 'map', 'options' );
?>

<section class="contacts">
	<div class="container--large contacts__container">
		<div class="contacts__info">
			<?php if ( $tel || $email ) : ?>
				<div class="contacts__contacts">
					<div class="contacts__label">Связь с нами</div>

					<?php if ( $tel ) : ?>
						<a href="tel:<?php echo preg_replace( '/[^0-9,+]/', '', $tel ); ?>" class="contacts__tel"><?php echo $tel; ?></a>
					<?php endif; ?>

					<?php if ( $email ) : ?>
						<div class="contacts__email">
							E-mail:
							<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if ( $address ) : ?>
				<div class="contacts__address">
					<div class="contacts__label">Наш адрес</div>

					<address><?php echo $address; ?></address>
				</div>
			<?php endif; ?>

			<?php if ( $requisites ) : ?>
				<div class="contacts__requisites">
					<div class="contacts__label">Реквизиты</div>

					<div><?php echo $requisites; ?></div>
				</div>
			<?php endif; ?>
		</div>

		<div class="contacts__map" id="map"></div>
	</div>
</section>

<?php if ( $map ) : ?>
	<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
	<script>
		document.addEventListener("DOMContentLoaded", function (e) {
			function init(){
				<?php $map = json_decode( $map, true ); ?>
				const map = new ymaps.Map('map', {
					center: [<?php echo $map['center_lat'] ?>,<?php echo $map['center_lng'] ?>],
					zoom: <?php echo $map['zoom']; ?>
				});

				<?php foreach ( $map['marks'] as $mark ) : ?>
					map.geoObjects.add(
						new ymaps.Placemark([<?php echo $mark['coords'][0]; ?>, <?php echo $mark['coords'][1]; ?>], {
								balloonContent: '<?php echo $mark['content']; ?>'
							},
							{
								// iconLayout: 'default#image',
								// iconImageHref: '<?php //echo get_template_directory_uri(); ?>/assets/images/icon-marker.svg',
								// iconImageSize: [61, 69],
								// iconImageOffset: [-30, -69]
							})
					);
				<?php endforeach; ?>

				map.controls.remove('geolocationControl'); // удаляем геолокацию
				map.controls.remove('searchControl'); // удаляем поиск
				map.controls.remove('trafficControl'); // удаляем контроль трафика
				map.controls.remove('typeSelector'); // удаляем тип
				map.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
				// map.controls.remove('zoomControl'); // удаляем контрол зуммирования
				map.controls.remove('rulerControl'); // удаляем контрол правил
				map.behaviors.disable(['scrollZoom']); // отключаем скролл карты (опционально)
			}

			ymaps.ready(init);
		});
	</script>
<?php endif; ?>

