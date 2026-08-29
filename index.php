<?php
/**
 * Главная страница. Первый экран и полоса с цифрами.
 *
 * @package Methodic-Task
 */

get_header();
?>

<main class="site-main">

	<section class="hero">
		<div class="hero__inner">

			<div class="hero__intro">
				<h1 class="hero__title">Миграционные услуги <br class="hero__br">в Москве и Московской области</h1>
				<p class="hero__lead">РВП, ВНЖ, гражданство РФ: собираем полный пакет документов и ведём дело до результата. Компаниями — легальное оформление иностранных сотрудников.</p>
				<p class="hero__choose">Выберите свой путь.</p>
			</div>

			<img class="hero__pic" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-background.png' ); ?>" alt="" width="802" height="534">

			<div class="hero__content">
				<div class="hero__cards">

					<article class="hero-card">
						<div class="hero-card__body">
							<p class="hero-card__eyebrow">Иностранным гражданам</p>
							<div class="hero-card__text">
								<h2 class="hero-card__title">Оформляю статус себе или семье</h2>
								<p class="hero-card__desc">РВП, ВНЖ, гражданство РФ. Проверим основание, соберём документы, подадим без ошибок. Не знаете, с чего начать — начните с консультации.</p>
							</div>
						</div>
						<div class="hero-card__buttons">
							<a class="btn btn--primary" href="#">Бесплатная консультация</a>
							<a class="btn btn--outline" href="#">Смотреть услуги и цены</a>
						</div>
					</article>

					<article class="hero-card">
						<div class="hero-card__body">
							<p class="hero-card__eyebrow">Работодателям</p>
							<div class="hero-card__text">
								<h2 class="hero-card__title">Оформляю иностранных сотрудников</h2>
								<p class="hero-card__desc">Разрешения на работу, ВКС, кадровые уведомления в МВД. Более 10 лет в миграционном праве, работаем с компаниями Москвы и области.</p>
							</div>
						</div>
						<div class="hero-card__buttons">
							<a class="btn btn--primary hero-card__solution" href="#">
								Решение для работодателей
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false">
									<path d="M16.9807 15.481L16.9807 7.08019L8.45875 7.08031M16.9807 7.08019L7.08125 16.9797" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</a>
							<a class="btn btn--primary hero-card__extra" href="#">Бесплатная консультация</a>
							<a class="btn btn--outline hero-card__extra" href="#">Смотреть услуги и цены</a>
						</div>
					</article>

				</div>

				<aside class="hero-info">
					<p class="hero-info__line">Офисы в Подольске и Одинцово</p>
					<p class="hero-info__line">Работаем по Москве и Московской области</p>
				</aside>
			</div>

		</div>
	</section>

	<section class="stats">
		<ul class="stats__list">

			<li class="stats__item">
				<span class="stats__icon">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
						<path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/>
						<path d="m9 12 2 2 4-4"/>
					</svg>
				</span>
				<div class="stats__body">
					<p class="stats__value">Более 10 лет</p>
					<p class="stats__label">помогаем с миграционными документами</p>
				</div>
			</li>

			<li class="stats__item">
				<span class="stats__icon">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
						<rect x="8" y="2" width="8" height="4" rx="1"/>
						<path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
						<path d="m9 14 2 2 4-4"/>
					</svg>
				</span>
				<div class="stats__body">
					<p class="stats__value">6&nbsp;000+</p>
					<p class="stats__label">оформлений по РВП, ВНЖ и гражданству</p>
				</div>
			</li>

			<li class="stats__item">
				<span class="stats__icon">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
						<rect x="4" y="2" width="16" height="20" rx="2"/>
						<path d="M9 22v-4h6v4"/>
						<path d="M8 6h.01M12 6h.01M16 6h.01M8 10h.01M12 10h.01M16 10h.01M8 14h.01M12 14h.01M16 14h.01"/>
					</svg>
				</span>
				<div class="stats__body">
					<p class="stats__value">2 офиса</p>
					<p class="stats__label">Подольск и Одинцово: приём рядом с домом, без поездки в центр</p>
				</div>
			</li>

			<li class="stats__item">
				<span class="stats__icon">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
						<path d="M11.48 3.5a.56.56 0 0 1 1.04 0l2.13 4.32a.56.56 0 0 0 .42.3l4.77.7a.56.56 0 0 1 .31.95l-3.45 3.36a.56.56 0 0 0-.16.5l.81 4.75a.56.56 0 0 1-.81.59l-4.27-2.24a.56.56 0 0 0-.52 0l-4.27 2.24a.56.56 0 0 1-.81-.59l.82-4.75a.56.56 0 0 0-.17-.5L3.87 9.77a.56.56 0 0 1 .31-.95l4.77-.7a.56.56 0 0 0 .42-.3Z"/>
					</svg>
				</span>
				<div class="stats__body">
					<p class="stats__value">4,8</p>
					<p class="stats__label">рейтинг на Яндекс.Картах и 2ГИС</p>
				</div>
			</li>

		</ul>
	</section>

	<?php
	/*
	 * Контент блока вынесен в переменные — это точка подключения ACF.
	 * Когда поля появятся, здесь останется только заменить три присваивания:
	 *   $start_title    = get_field( 'start_title' );
	 *   $start_subtitle = get_field( 'start_subtitle' );
	 *   $start_cards    = get_field( 'start_cards' ); // репитер с теми же ключами
	 * Разметка ниже не меняется.
	 */
	$start_title    = 'С чего начать прямо сейчас';
	$start_subtitle = 'Выберите удобный способ разобраться в своей ситуации';

	$start_cards = array(
		array(
			'icon'        => 'phone',
			'title'       => 'Бесплатная консультация',
			'text'        => 'Юрист разберёт вашу ситуацию: какое основание подходит, какие документы нужны и в каком порядке действовать. В чате или по видео, можно анонимно.',
			'button_text' => 'Записаться',
			'button_url'  => '#',
			'wide'        => true,
		),
		array(
			'icon'        => 'sparkles',
			'title'       => 'ИИ-юрист',
			'text'        => 'Ответ на миграционный вопрос за минуту — бесплатно и в любое время суток.',
			'button_text' => 'Открыть чат',
			'button_url'  => '#',
			'wide'        => false,
		),
		array(
			'icon'        => 'check',
			'title'       => 'Тест за 2 минуты',
			'text'        => 'Подберём подходящее вам основание и пришлём пошаговый план действий.',
			'button_text' => 'Пройти тест',
			'button_url'  => '#',
			'wide'        => false,
		),
	);

	/*
	 * Белый список иконок: из ACF придёт только ключ, произвольная разметка
	 * в шаблон не попадёт. Значения — наши собственные строки, поэтому
	 * выводятся без экранирования.
	 */
	$start_icons = array(
		'phone'    => '<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path fill="currentColor" d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.45.57 3.57a1 1 0 0 1-.25 1.02l-2.2 2.2Z"/></svg>',
		'sparkles' => '<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path fill="currentColor" d="m11 2.5 1.7 4.6 4.6 1.7-4.6 1.7L11 15.1 9.3 10.5 4.7 8.8l4.6-1.7L11 2.5Z"/><path fill="currentColor" d="m18.4 13.6.85 2.3 2.3.85-2.3.85-.85 2.3-.85-2.3-2.3-.85 2.3-.85.85-2.3Z"/><path fill="currentColor" d="m6.2 15.8.6 1.65 1.65.6-1.65.6-.6 1.65-.6-1.65-1.65-.6 1.65-.6.6-1.65Z"/></svg>',
		'check'    => '<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path fill="currentColor" d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2Zm5.9 13.2 6.4-6.4-1.4-1.4-5 5-2.4-2.4-1.4 1.4 3.8 3.8Z"/></svg>',
	);
	?>
	<section class="start">
		<div class="start__inner">

			<div class="start__head">
				<h2 class="start__title"><?php echo esc_html( $start_title ); ?></h2>
				<p class="start__subtitle"><?php echo esc_html( $start_subtitle ); ?></p>
			</div>

			<ul class="start__list">
				<?php foreach ( $start_cards as $card ) : ?>
					<li class="start-card<?php echo empty( $card['wide'] ) ? '' : ' start-card--wide'; ?>">
						<div class="start-card__body">
							<div class="start-card__head">
								<h3 class="start-card__title"><?php echo esc_html( $card['title'] ); ?></h3>
								<?php if ( isset( $start_icons[ $card['icon'] ] ) ) : ?>
									<span class="start-card__icon"><?php echo $start_icons[ $card['icon'] ]; ?></span>
								<?php endif; ?>
							</div>
							<p class="start-card__text"><?php echo esc_html( $card['text'] ); ?></p>
						</div>
						<a class="btn btn--primary start-card__button" href="<?php echo esc_url( $card['button_url'] ); ?>">
							<span><?php echo esc_html( $card['button_text'] ); ?></span>
							<svg class="start-card__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
								<path d="M7 17 17 7"/>
								<path d="M8 7h9v9"/>
							</svg>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>

		</div>
	</section>

	<?php
	/*
	 * Точка подключения ACF — как и в третьем блоке, меняются только присваивания:
	 *   $services_title    = get_field( 'services_title' );
	 *   $services_subtitle = get_field( 'services_subtitle' );
	 *   $services_pic      = get_field( 'services_image' );  // поле «Изображение», вернуть URL
	 *   $services_items    = get_field( 'services_items' );  // репитер с теми же ключами
	 *   $services_link     = get_field( 'services_link' );   // поле «Ссылка»
	 *   $services_note     = get_field( 'services_note' );
	 */
	$services_title    = 'Услуги для иностранных граждан';
	$services_subtitle = 'Выберите свой статус. В карточке — что входит и от какой суммы, полный прайс — на странице услуги.';
	$services_pic      = get_template_directory_uri() . '/assets/images/services.png';

	$services_items = array(
		array(
			'title'       => 'РВП',
			'text'        => 'По квоте, браку, детям и другим основаниям. Проверим право на подачу до сбора документов.',
			'price'       => 'от 14 000 ₽',
			'button_text' => 'Подробнее',
			'button_url'  => '#',
		),
		array(
			'title'       => 'ВНЖ',
			'text'        => 'Документы, экзамен, подтверждение дохода, подача и контроль этапов.',
			'price'       => 'от 14 000 ₽',
			'button_text' => 'Подробнее',
			'button_url'  => '#',
		),
		array(
			'title'       => 'Гражданство РФ',
			'text'        => 'Общий и упрощённый порядок, по браку, детям, указ № 11. Подберём основание и подготовим пакет.',
			'price'       => 'от 14 000 ₽',
			'button_text' => 'Подробнее',
			'button_url'  => '#',
		),
	);

	$services_link = array(
		'text' => 'Все услуги',
		'url'  => '#',
	);
	$services_note = 'квота на РВП, разрешение на работу, временное убежище, репатриация, обжалование запрета и депортации';

	// Стрелка повторяется у каждой кнопки блока — держим одной строкой.
	$services_arrow = '<svg class="btn__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 17 17 7"/><path d="M8 7h9v9"/></svg>';
	?>
	<section class="services">
		<div class="services__inner">

			<div class="services__top">
				<div class="services__head">
					<h2 class="services__title"><?php echo esc_html( $services_title ); ?></h2>
					<p class="services__subtitle"><?php echo esc_html( $services_subtitle ); ?></p>
				</div>
				<img class="services__pic" src="<?php echo esc_url( $services_pic ); ?>" alt="" width="687" height="290">
			</div>

			<div class="services__content">
				<ul class="services__list">
					<?php foreach ( $services_items as $item ) : ?>
						<li class="services-card">
							<div class="services-card__text">
								<h3 class="services-card__title"><?php echo esc_html( $item['title'] ); ?></h3>
								<p class="services-card__desc"><?php echo esc_html( $item['text'] ); ?></p>
							</div>
							<div class="services-card__footer">
								<p class="services-card__price"><?php echo esc_html( $item['price'] ); ?></p>
								<a class="btn btn--primary" href="<?php echo esc_url( $item['button_url'] ); ?>">
									<span><?php echo esc_html( $item['button_text'] ); ?></span>
									<?php echo $services_arrow; ?>
								</a>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>

				<div class="services__info">
					<a class="btn btn--link" href="<?php echo esc_url( $services_link['url'] ); ?>">
						<span><?php echo esc_html( $services_link['text'] ); ?></span>
						<?php echo $services_arrow; ?>
					</a>
					<span class="services__note"><?php echo esc_html( $services_note ); ?></span>
				</div>
			</div>

		</div>
	</section>

	<?php
	/*
	 * Точка подключения ACF:
	 *   $process_title    = get_field( 'process_title' );
	 *   $process_subtitle = get_field( 'process_subtitle' );
	 *   $process_steps    = get_field( 'process_steps' );  // репитер: title + text
	 *   $process_note     = get_field( 'process_note' );
	 * Номера шагов не хранятся — их даёт порядок в списке, чтобы редактору
	 * не приходилось перенумеровывать карточки вручную.
	 */
	$process_title    = 'Как мы работаем';
	$process_subtitle = 'Понятный порядок: вы всегда знаете, на каком этапе находитесь.';

	$process_steps = array(
		array(
			'title' => 'Бесплатная консультация',
			'text'  => 'Разбираем ситуацию и определяем основание, по которому вам подходит подача.',
		),
		array(
			'title' => 'Договор с фиксированной ценой',
			'text'  => 'Стоимость и состав работ фиксируются в договоре и не меняются по ходу дела.',
		),
		array(
			'title' => 'Подготовка документов',
			'text'  => 'Собираем и проверяем каждую справку и заявление, чтобы не получить отказ из-за формальной ошибки. Типовой срок подготовки пакета — 7 дней.',
		),
		array(
			'title' => 'Подача и сопровождение',
			'text'  => 'Сопровождаем на этапах подачи, отслеживаем статус заявления и консультируем до получения статуса.',
		),
	);

	$process_note = 'Оплата 50/50: половина при заключении договора, половина — по готовности пакета документов. Цена зафиксирована в договоре и не растёт по ходу дела.';
	?>
	<section class="process">
		<div class="process__inner">

			<div class="process__head">
				<h2 class="process__title"><?php echo esc_html( $process_title ); ?></h2>
				<p class="process__subtitle"><?php echo esc_html( $process_subtitle ); ?></p>
			</div>

			<ol class="process__list">
				<?php foreach ( $process_steps as $i => $step ) : ?>
					<li class="process-step">
						<span class="process-step__num" aria-hidden="true"><?php echo esc_html( $i + 1 ); ?></span>
						<h3 class="process-step__title"><?php echo esc_html( $step['title'] ); ?></h3>
						<p class="process-step__text"><?php echo esc_html( $step['text'] ); ?></p>
					</li>
				<?php endforeach; ?>
			</ol>

			<div class="process__note">
				<span class="process__note-icon">
					<svg viewBox="0 0 18 18" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
						<path d="M3.5 9.4 7 12.7l7.5-7.4"/>
					</svg>
				</span>
				<p class="process__note-text"><?php echo esc_html( $process_note ); ?></p>
			</div>

		</div>
	</section>

	<?php
	/*
	 * Точка подключения ACF. Три карточки устроены по-разному, поэтому это
	 * не репитер, а три группы полей:
	 *   $trust_title/$trust_subtitle/$trust_pic — обычные поля секции;
	 *   $trust_rating — группа: value, text, link_text, link_url;
	 *   $trust_cases  — группа: title + репитер items (text, url);
	 *   $trust_team   — группа: title, text, link_text, link_url.
	 */
	$trust_title    = 'Почему нам доверяют';
	$trust_subtitle = 'Конкретные дела и живые отзывы вместо общений «результат 100%».';
	$trust_pic      = get_template_directory_uri() . '/assets/images/trust.png';

	$trust_rating = array(
		'value'     => '4,8',
		'text'      => 'Оценка клиентов на Яндекс.Картах и 2ГИС по двум офисам.',
		'link_text' => 'Читать отзывы',
		'link_url'  => '#',
	);

	$trust_cases = array(
		'title' => 'Примеры дел',
		'items' => array(
			array( 'text' => 'Гражданство по браку — 7 месяцев', 'url' => '#' ),
			array( 'text' => 'ВНЖ после РВП — 3 месяца', 'url' => '#' ),
			array( 'text' => 'Снятие запрета на въезд — 5 месяцев', 'url' => '#' ),
		),
	);

	$trust_team = array(
		'title'     => 'Команда, которую видно',
		'text'      => 'Имя Фамилия — ведущий юрист по гражданству, опыт 12 лет. Юристы по РВП, ВНЖ, гражданству, ВКС и судебной защите — с именами и специализацией. Средний опыт специалиста — 8 лет.',
		'link_text' => 'Познакомиться с командой',
		'link_url'  => '#',
	);

	$trust_arrow = '<svg class="btn__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 17 17 7"/><path d="M8 7h9v9"/></svg>';
	?>
	<section class="trust">
		<div class="trust__inner">

			<div class="trust__top">
				<div class="trust__head">
					<h2 class="trust__title"><?php echo esc_html( $trust_title ); ?></h2>
					<p class="trust__subtitle"><?php echo esc_html( $trust_subtitle ); ?></p>
				</div>
				<img class="trust__pic" src="<?php echo esc_url( $trust_pic ); ?>" alt="" width="807" height="346">
			</div>

			<ul class="trust__list">

				<li class="trust-card trust-card--rating">
					<div class="trust-card__body">
						<p class="trust-card__score"><?php echo esc_html( $trust_rating['value'] ); ?></p>
						<p class="trust-card__text"><?php echo esc_html( $trust_rating['text'] ); ?></p>
					</div>
					<a class="btn btn--link" href="<?php echo esc_url( $trust_rating['link_url'] ); ?>">
						<span><?php echo esc_html( $trust_rating['link_text'] ); ?></span>
						<?php echo $trust_arrow; ?>
					</a>
				</li>

				<li class="trust-card trust-card--cases">
					<div class="trust-card__body">
						<h3 class="trust-card__title"><?php echo esc_html( $trust_cases['title'] ); ?></h3>
						<ul class="trust-cases">
							<?php foreach ( $trust_cases['items'] as $case ) : ?>
								<li>
									<a class="trust-case" href="<?php echo esc_url( $case['url'] ); ?>">
										<span><?php echo esc_html( $case['text'] ); ?></span>
										<span class="trust-case__arrow">
											<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
												<path d="M7 17 17 7"/>
												<path d="M8 7h9v9"/>
											</svg>
										</span>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</li>

				<li class="trust-card trust-card--team">
					<div class="trust-card__body">
						<h3 class="trust-card__title"><?php echo esc_html( $trust_team['title'] ); ?></h3>
						<p class="trust-card__text"><?php echo esc_html( $trust_team['text'] ); ?></p>
					</div>
					<a class="btn btn--link" href="<?php echo esc_url( $trust_team['link_url'] ); ?>">
						<span><?php echo esc_html( $trust_team['link_text'] ); ?></span>
						<?php echo $trust_arrow; ?>
					</a>
				</li>

			</ul>

		</div>
	</section>

	<?php
	/*
	 * Точка подключения ACF:
	 *   $reviews_title / $reviews_subtitle — поля секции;
	 *   $reviews_widgets — репитер: name, score, image (поле «Изображение», URL).
	 */
	$reviews_title    = 'Отзывы клиентов';
	$reviews_subtitle = 'Оценки собраны на публичных площадках — их нельзя отредактировать на нашей стороне.';

	$reviews_widgets = array(
		array(
			'name'  => 'Яндекс.Карты',
			'score' => '4,8',
			'image' => get_template_directory_uri() . '/assets/images/review-yandex.png',
		),
		array(
			'name'  => '2ГИС',
			'score' => '4,8',
			'image' => get_template_directory_uri() . '/assets/images/review-2gis.png',
		),
	);

	/*
	 *   $kb_title / $kb_subtitle — поля секции;
	 *   $kb_items — репитер: title, text, url, featured (галочка «выделить цветом»).
	 */
	$kb_title    = 'База знаний';
	$kb_subtitle = 'Разбираетесь самостоятельно? Собрали пошаговые материалы по статусам.';

	$kb_items = array(
		array(
			'title'    => 'Как получить РВП: пошаговый гид',
			'text'     => 'Основания, документы, типичные ошибки',
			'url'      => '#',
			'featured' => false,
		),
		array(
			'title'    => 'ВНЖ после РВП: что важно не пропустить',
			'text'     => 'Сроки, уведомления, подготовка пакета',
			'url'      => '#',
			'featured' => true,
		),
		array(
			'title'    => 'Гражданство РФ: с чего начать в 2026',
			'text'     => 'Основания, сроки и порядок подачи',
			'url'      => '#',
			'featured' => false,
		),
	);

	$kb_arrow = '<span class="kb-card__arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 17 17 7"/><path d="M8 7h9v9"/></svg></span>';
	?>
	<section class="reviews">
		<div class="reviews__inner">

			<div class="section-head">
				<h2 class="section-head__title"><?php echo esc_html( $reviews_title ); ?></h2>
				<p class="section-head__text"><?php echo esc_html( $reviews_subtitle ); ?></p>
			</div>

			<ul class="reviews__list">
				<?php foreach ( $reviews_widgets as $widget ) : ?>
					<li class="review-widget">
						<div class="review-widget__head">
							<span class="review-widget__name"><?php echo esc_html( $widget['name'] ); ?></span>
							<span class="review-widget__score"><?php echo esc_html( $widget['score'] ); ?></span>
						</div>
						<img class="review-widget__shot" src="<?php echo esc_url( $widget['image'] ); ?>" width="723" height="318"
							alt="<?php echo esc_attr( sprintf( 'Отзывы на площадке %1$s, рейтинг %2$s', $widget['name'], $widget['score'] ) ); ?>">
					</li>
				<?php endforeach; ?>
			</ul>

		</div>
	</section>

	<section class="knowledge">
		<div class="knowledge__inner">

			<div class="section-head">
				<h2 class="section-head__title"><?php echo esc_html( $kb_title ); ?></h2>
				<p class="section-head__text"><?php echo esc_html( $kb_subtitle ); ?></p>
			</div>

			<ul class="knowledge__list">
				<?php foreach ( $kb_items as $item ) : ?>
					<li>
						<a class="kb-card<?php echo empty( $item['featured'] ) ? '' : ' kb-card--featured'; ?>" href="<?php echo esc_url( $item['url'] ); ?>">
							<div class="kb-card__text">
								<h3 class="kb-card__title"><?php echo esc_html( $item['title'] ); ?></h3>
								<p class="kb-card__desc"><?php echo esc_html( $item['text'] ); ?></p>
							</div>
							<?php echo $kb_arrow; ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>

		</div>
	</section>

	<?php
	/*
	 * Точка подключения ACF:
	 *   $gov_title / $gov_subtitle — поля секции;
	 *   $gov_links — репитер. Ключи совпадают с тем, что отдаёт поле «Ссылка»
	 *   (title / url / target), так что элемент можно передать в шаблон как есть.
	 *   target пустой — ссылка открывается в той же вкладке; поставьте «_blank»
	 *   в поле, если внешние сервисы должны открываться в новой.
	 */
	// \u{00AD} — мягкий перенос: на узком экране слово рвётся
	// как в макете, «Государствен-ные», а на широком не виден.
	$gov_title    = 'Государствен' . "\u{00AD}" . 'ные сервисы';
	$gov_subtitle = 'Быстрые проверки статуса документов и ограничений — прямые ссылки на официальные сервисы.';

	$gov_links = array(
		array( 'title' => 'Готовность РВП',             'url' => '#', 'target' => '' ),
		array( 'title' => 'Готовность ВНЖ',             'url' => '#', 'target' => '' ),
		array( 'title' => 'Проверка патента',           'url' => '#', 'target' => '' ),
		array( 'title' => 'Запись в Сахарово',          'url' => '#', 'target' => '' ),
		array( 'title' => 'Запрет на въезд',            'url' => '#', 'target' => '' ),
		array( 'title' => 'ИНН',                        'url' => '#', 'target' => '' ),
		array( 'title' => 'ФССП',                       'url' => '#', 'target' => '' ),
		array( 'title' => 'Исполнительные производства', 'url' => '#', 'target' => '' ),
	);
	?>
	<section class="gov">
		<div class="gov__inner">

			<div class="gov__head">
				<h2 class="gov__title"><?php echo esc_html( $gov_title ); ?></h2>
				<p class="gov__subtitle"><?php echo esc_html( $gov_subtitle ); ?></p>
			</div>

			<ul class="gov__list">
				<?php foreach ( $gov_links as $link ) : ?>
					<li>
						<a class="gov-link" href="<?php echo esc_url( $link['url'] ); ?>"
							<?php if ( ! empty( $link['target'] ) ) : ?>
								target="<?php echo esc_attr( $link['target'] ); ?>" rel="noopener"
							<?php endif; ?>>
							<span class="gov-link__label"><?php echo esc_html( $link['title'] ); ?></span>
							<span class="gov-link__arrow">
								<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
									<path d="M7 17 17 7"/>
									<path d="M8 7h9v9"/>
								</svg>
							</span>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>

		</div>
	</section>

	<?php
	/*
	 * Точка подключения ACF:
	 *   $faq_title / $faq_subtitle — поля секции;
	 *   $faq_items — репитер: question + answer;
	 *   $faq_more  — поле «Ссылка» (title / url).
	 *
	 * ВНИМАНИЕ: текстов ответов в макете нет, ниже стоят заполнители.
	 * Порядок в массиве = порядок чтения слева направо по рядам сетки.
	 */
	$faq_title    = 'Частые вопросы';
	$faq_subtitle = 'Коротко о деньгах, сроках и документах. Полные разборы — в базе знаний.';

	$faq_placeholder = '[Текст ответа — заполнитель, подставляется из ACF]';

	$faq_items = array(
		array( 'question' => 'Сколько стоят ваши услуги?',                  'answer' => $faq_placeholder ),
		array( 'question' => 'Сколько времени занимает оформление?',        'answer' => $faq_placeholder ),
		array( 'question' => 'Что будет, если придёт отказ?',               'answer' => $faq_placeholder ),
		array( 'question' => 'Чем отличается РВП от ВНЖ — что оформлять?',  'answer' => $faq_placeholder ),
		array( 'question' => 'Можно ли продлить РВП после 3 лет?',          'answer' => $faq_placeholder ),
		array( 'question' => 'Как проверить готовность документов?',        'answer' => $faq_placeholder ),
		array( 'question' => 'Нужно ли сдавать экзамен по русскому языку?', 'answer' => $faq_placeholder ),
		array( 'question' => 'Нужно ли отказываться от прежнего гражданства?', 'answer' => $faq_placeholder ),
	);

	$faq_more = array(
		'title' => 'Все вопросы и ответы',
		'url'   => '#',
	);
	?>
	<section class="faq">
		<div class="faq__inner">

			<div class="faq__head">
				<h2 class="faq__title"><?php echo esc_html( $faq_title ); ?></h2>
				<p class="faq__subtitle"><?php echo esc_html( $faq_subtitle ); ?></p>
			</div>

			<ul class="faq__list">
				<?php foreach ( $faq_items as $item ) : ?>
					<li>
						<details class="faq-item">
							<summary class="faq-item__summary">
								<span class="faq-item__question"><?php echo esc_html( $item['question'] ); ?></span>
								<span class="faq-item__toggle" aria-hidden="true"></span>
							</summary>
							<p class="faq-item__answer"><?php echo esc_html( $item['answer'] ); ?></p>
						</details>
					</li>
				<?php endforeach; ?>
			</ul>

			<a class="faq__more" href="<?php echo esc_url( $faq_more['url'] ); ?>">
				<span><?php echo esc_html( $faq_more['title'] ); ?></span>
				<span aria-hidden="true">&rarr;</span>
			</a>

		</div>
	</section>

	<?php
	/*
	 * Точка подключения ACF:
	 *   $cta_title / $cta_lead / $cta_note — поля секции;
	 *   $cta_submit — подпись кнопки;
	 *   $cta_consent_url — ссылка на политику конфиденциальности;
	 *   $cta_pic — поле «Изображение».
	 *
	 * ВНИМАНИЕ: форма никуда не отправляется — action пустой, обработчика нет.
	 * Подключать через CF7 / WPForms / собственный admin-post обработчик,
	 * тогда же добавить nonce и защиту от спама.
	 */
	$cta_title       = "Не знаете,\nс чего начать?";
	$cta_lead        = 'На консультации юрист определит ваше основание, назовёт сроки и список документов. Оставьте имя и телефон — перезвоним в рабочее время и запишем на ближайшее свободное окно.';
	$cta_submit      = 'Записаться на консультацию';
	$cta_consent_url = '#';
	$cta_note        = "Перезваниваем Пн–Пт с 09:00 до 18:00.\nКонсультация 15 минут — бесплатно.";
	$cta_pic         = get_template_directory_uri() . '/assets/images/cta.png';
	?>
	<section class="cta">
		<div class="cta__inner">

			<div class="cta__text">
				<h2 class="cta__title"><?php echo nl2br( esc_html( $cta_title ) ); ?></h2>
				<p class="cta__lead"><?php echo esc_html( $cta_lead ); ?></p>
			</div>

			<form class="cta-form" action="" method="post">
				<div class="cta-form__row">
					<label class="visually-hidden" for="cta-name">Имя</label>
					<input class="cta-form__input" id="cta-name" type="text" name="name" placeholder="Имя" autocomplete="name" required>

					<label class="visually-hidden" for="cta-phone">Телефон</label>
					<input class="cta-form__input" id="cta-phone" type="tel" name="phone" placeholder="+7 (___) ___-__-__" autocomplete="tel" required>
				</div>

				<button class="cta-form__submit" type="submit"><?php echo esc_html( $cta_submit ); ?></button>

				<label class="cta-form__consent">
					<input class="cta-form__checkbox" type="checkbox" name="consent" required>
					<span>Согласен на обработку персональных данных и принимаю <a href="<?php echo esc_url( $cta_consent_url ); ?>">политику конфиденциальности</a></span>
				</label>

				<p class="cta-form__note"><?php echo nl2br( esc_html( $cta_note ) ); ?></p>
			</form>

			<img class="cta__pic" src="<?php echo esc_url( $cta_pic ); ?>" alt="" width="610" height="340">

		</div>
	</section>

	<?php
	/*
	 * Точка подключения ACF:
	 *   $contacts_title / $contacts_subtitle — поля секции;
	 *   $contacts_phone — группа: hours, number, chips (репитер: label, url, icon);
	 *   $contacts_offices — репитер: name, tab, address, hours, route_url, map_embed.
	 *
	 * map_embed — URL для <iframe> конструктора Яндекс.Карт. Пока пусто,
	 * на его месте рисуется пустая рамка нужных пропорций.
	 */
	$contacts_title    = 'Контакты';
	$contacts_subtitle = 'Два офиса в Московской области. Отвечаем в мессенджерах в рабочие часы.';

	$contacts_phone = array(
		'title'  => 'Телефон и мессенджеры',
		'hours'  => 'Пн–Пт, 09:00–18:00',
		'number' => '+7 (495) 859-00-51',
		'tel'    => '+74958590051',
		'chips'  => array(
			array( 'label' => 'MAX', 'url' => '#', 'icon' => 'max' ),
			array( 'label' => 'Telegram', 'url' => '#', 'icon' => 'telegram' ),
		),
	);

	$contacts_offices = array(
		array(
			'tab'       => 'Подольск',
			'name'      => 'Офис в Подольске',
			'address'   => "ул. Профсоюзная, 4\nМосковская область",
			'hours'     => 'Пн–Пт: 09:00–18:00, Сб: 10:00–15:00',
			'route'     => 'Маршрут в Подольск',
			'route_url' => '#',
			'map_embed' => '',
		),
		array(
			'tab'       => 'Одинцово',
			'name'      => 'Офис в Одинцово',
			'address'   => "п. Новоивановское,\nул. Калинина, 8",
			'hours'     => 'Пн–Пт: 09:00–18:00, Сб: 10:00–15:00',
			'route'     => 'Маршрут в Одинцово',
			'route_url' => '#',
			'map_embed' => '',
		),
	);

	$contacts_icons = array(
		'max'      => '<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.13" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="8" cy="8" r="6"/><path d="M5.8 8h4.4"/></svg>',
		'telegram' => '<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.13" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M14.5 2 1.8 6.9l3.5 1.3 1.3 3.6 2-2.6 3.1 2.3z"/><path d="m5.3 8.2 7-4.6"/></svg>',
	);
	?>
	<section class="contacts">
		<div class="contacts__inner">

			<div class="contacts__head">
				<h2 class="contacts__title"><?php echo esc_html( $contacts_title ); ?></h2>
				<p class="contacts__subtitle"><?php echo esc_html( $contacts_subtitle ); ?></p>
			</div>

			<div class="contacts__content">

				<div class="contacts-map">
					<?php foreach ( $contacts_offices as $i => $office ) : ?>
						<input class="contacts-map__radio" type="radio" name="contacts-office"
							id="contacts-office-<?php echo (int) $i; ?>" <?php echo 0 === $i ? 'checked' : ''; ?>>
					<?php endforeach; ?>

					<div class="contacts-map__tabs">
						<?php foreach ( $contacts_offices as $i => $office ) : ?>
							<label class="contacts-map__tab" for="contacts-office-<?php echo (int) $i; ?>"><?php echo esc_html( $office['tab'] ); ?></label>
						<?php endforeach; ?>
					</div>

					<div class="contacts-map__panels">
						<?php foreach ( $contacts_offices as $office ) : ?>
							<div class="contacts-map__panel">
								<div class="contacts-map__frame">
									<?php if ( ! empty( $office['map_embed'] ) ) : ?>
										<iframe src="<?php echo esc_url( $office['map_embed'] ); ?>" loading="lazy"
											title="<?php echo esc_attr( sprintf( 'Карта: %s', $office['name'] ) ); ?>"></iframe>
									<?php endif; ?>
								</div>
							</div>
						<?php endforeach; ?>
					</div>

					<div class="contacts-map__routes">
						<?php foreach ( $contacts_offices as $office ) : ?>
							<a class="contacts-map__route" href="<?php echo esc_url( $office['route_url'] ); ?>">
								<?php echo esc_html( $office['route'] ); ?> <span aria-hidden="true">&rarr;</span>
							</a>
						<?php endforeach; ?>
					</div>
				</div>

				<ul class="contacts__cards">

					<li class="contacts-card">
						<h3 class="contacts-card__title"><?php echo esc_html( $contacts_phone['title'] ); ?></h3>
						<p class="contacts-card__muted"><?php echo esc_html( $contacts_phone['hours'] ); ?></p>
						<a class="contacts-card__phone" href="tel:<?php echo esc_attr( $contacts_phone['tel'] ); ?>"><?php echo esc_html( $contacts_phone['number'] ); ?></a>
						<ul class="contacts-chips">
							<?php foreach ( $contacts_phone['chips'] as $chip ) : ?>
								<li>
									<a class="contacts-chip" href="<?php echo esc_url( $chip['url'] ); ?>">
										<?php echo isset( $contacts_icons[ $chip['icon'] ] ) ? $contacts_icons[ $chip['icon'] ] : ''; ?>
										<span><?php echo esc_html( $chip['label'] ); ?></span>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					</li>

					<?php foreach ( $contacts_offices as $office ) : ?>
						<li class="contacts-card">
							<h3 class="contacts-card__title"><?php echo esc_html( $office['name'] ); ?></h3>
							<address class="contacts-card__muted"><?php echo nl2br( esc_html( $office['address'] ) ); ?></address>
							<p class="contacts-card__hours"><?php echo esc_html( $office['hours'] ); ?></p>
							<a class="contacts-card__link" href="<?php echo esc_url( $office['route_url'] ); ?>">Как добраться <span aria-hidden="true">&rarr;</span></a>
						</li>
					<?php endforeach; ?>

				</ul>

			</div>

		</div>
	</section>

</main>

<?php get_footer(); ?>
