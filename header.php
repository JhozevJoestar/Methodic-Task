<?php
/**
 * Шапка сайта: плавающая карточка с логотипом, контактами и главным меню.
 *
 * @package Methodic-Task
 */
?>
<?php
/*
 * Точка подключения ACF:
 *   $services_menu = get_field( 'services_menu', 'option' );  // репитер: title, desc, url
 *   $services_menu_all = get_field( 'services_menu_all', 'option' );  // поле «Ссылка»
 * Меню шапки удобнее хранить в настройках темы (страница опций), а не у записи.
 */
$services_menu = array(
	array( 'title' => 'РВП',                             'desc' => 'Разрешение на временное проживание',    'url' => '#' ),
	array( 'title' => 'ВНЖ',                             'desc' => 'Вид на жительство, бессрочный',          'url' => '#' ),
	array( 'title' => 'Гражданство РФ',                  'desc' => 'Общий и упрощённый порядок',             'url' => '#' ),
	array( 'title' => 'Репатриация',                     'desc' => 'Программа возвращения соотечественников', 'url' => '#' ),
	array( 'title' => 'Запрет на въезд и депортация',    'desc' => 'Обжалование и снятие ограничений',       'url' => '#' ),
	array( 'title' => 'Запрет на въезд и депортация',    'desc' => 'Обжалование и снятие ограничений',       'url' => '#' ),
	array( 'title' => 'Консультация миграционного юриста', 'desc' => 'Разбор ситуации и план действий',      'url' => '#' ),
);

$services_menu_all = array(
	'title' => 'Все услуги и цены',
	'url'   => '#',
);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
	<div class="site-header__card">

		<div class="site-header__top">
			<a class="site-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png' ); ?>" alt="МиграПро — российское миграционное агентство" width="168" height="36">
			</a>

			<div class="site-header__actions">
				<ul class="header-messengers">
					<li class="header-messengers__item">
						<a class="header-messengers__link" href="#" aria-label="Написать в WhatsApp">
							<svg class="header-messengers__icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
								<path fill="#40CD4A" d="M12 2.4a9.6 9.6 0 0 0-8.22 14.55L2.4 21.6l4.79-1.35A9.6 9.6 0 1 0 12 2.4Z"/>
								<path fill="#FDFDFD" d="M9.05 7.3c-.2-.45-.4-.46-.6-.47h-.5c-.17 0-.46.07-.7.33-.24.26-.92.9-.92 2.2s.94 2.55 1.07 2.73c.13.17 1.82 2.92 4.5 3.98 2.22.87 2.67.7 3.15.65.48-.04 1.55-.63 1.77-1.25.22-.61.22-1.14.15-1.25-.06-.11-.24-.17-.5-.3-.26-.13-1.55-.77-1.79-.85-.24-.09-.41-.13-.59.13-.17.26-.67.85-.82 1.02-.15.18-.3.2-.56.07-.26-.13-1.1-.41-2.1-1.3-.78-.69-1.3-1.55-1.45-1.81-.15-.26-.02-.4.11-.53.12-.12.26-.3.39-.46.13-.15.17-.26.26-.44.09-.17.04-.33-.02-.46-.07-.13-.57-1.44-.8-1.96Z"/>
							</svg>
						</a>
					</li>
					<li class="header-messengers__item">
						<a class="header-messengers__link" href="#" aria-label="Написать в Telegram">
							<svg class="header-messengers__icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
								<circle cx="12" cy="12" r="9.6" fill="#00B0F2"/>
								<path fill="#FEFFFC" d="m6.8 11.86 8.2-3.16c.38-.14.72.09.6.67l-1.4 6.58c-.1.47-.38.58-.77.36l-2.13-1.57-1.03.99c-.11.11-.21.21-.43.21l.15-2.17 3.95-3.57c.17-.15-.04-.24-.27-.09l-4.88 3.07-2.1-.66c-.46-.14-.47-.46.09-.68Z"/>
							</svg>
						</a>
					</li>
				</ul>

				<div class="header-phone">
					<a class="header-phone__number" href="tel:+74958590051">+7 (495) 859-00-51</a>
					<p class="header-phone__hours">Пн–Пт: 09:00–18:00</p>
				</div>

				<a class="header-cta" href="#">Бесплатная консультация</a>
			</div>
		</div>

		<div class="site-header__bottom">
			<nav class="header-nav" aria-label="Главное меню">
				<ul class="header-nav__list">
					<li class="header-nav__item">
						<!-- раскрытие на <details>: без JS, состояние объявляется скринридеру само -->
						<details class="header-menu">
							<summary class="header-nav__link header-menu__toggle">
								Услуги
								<svg class="header-nav__chevron" viewBox="0 0 10 10" aria-hidden="true" focusable="false">
									<path d="M2 3.5 5 6.5l3-3" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</summary>

							<div class="header-menu__panel">
								<ul class="header-menu__list">
									<?php foreach ( $services_menu as $service ) : ?>
										<li>
											<a class="header-menu__link" href="<?php echo esc_url( $service['url'] ); ?>">
												<span class="header-menu__title"><?php echo esc_html( $service['title'] ); ?></span>
												<span class="header-menu__desc"><?php echo esc_html( $service['desc'] ); ?></span>
											</a>
										</li>
									<?php endforeach; ?>
								</ul>

								<a class="header-menu__all" href="<?php echo esc_url( $services_menu_all['url'] ); ?>">
									<span><?php echo esc_html( $services_menu_all['title'] ); ?></span>
									<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
										<path d="M7 17 17 7"/>
										<path d="M8 7h9v9"/>
									</svg>
								</a>
							</div>
						</details>
					</li>
					<li class="header-nav__item"><a class="header-nav__link" href="#">Работодателям</a></li>
					<li class="header-nav__item"><a class="header-nav__link" href="#">О нас</a></li>
					<li class="header-nav__item"><a class="header-nav__link" href="#">База знаний</a></li>
					<li class="header-nav__item"><a class="header-nav__link" href="#">Отзывы</a></li>
					<li class="header-nav__item"><a class="header-nav__link" href="#">Контакты</a></li>
				</ul>
			</nav>

			<p class="header-rating">
				<span class="header-rating__stars" aria-hidden="true">★★★★★</span>
				<span class="header-rating__text">4,8 на Яндекс.Картах и 2ГИС</span>
			</p>
		</div>

	</div>
</header>
