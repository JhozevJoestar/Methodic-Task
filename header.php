<?php
/**
 * Шапка сайта: плавающая карточка с логотипом, контактами и главным меню.
 *
 * Контент — из полей ACF на главной странице сайта (та же страница, где
 * лежат поля front-page.php). Отдельная служебная страница не нужна:
 * WordPress и так хранит ID главной страницы в опции page_on_front.
 *
 * Настройка меню "Услуги":
 *  1. Внешний вид → Меню → создать, назначить в "Главное меню (шапка)".
 *  2. У пункта "Услуги" в поле "Классы CSS" прописать: has-dropdown
 *  3. Дочерние пункты услуг — заполнить поле "Описание".
 *  4. У последнего дочернего пункта ("Все услуги и цены") — класс: menu-item-all
 *
 * @package Methodic-Task
 */

$settings_id = (int) get_option( 'page_on_front' );

$header_logo         = get_field( 'header_logo', $settings_id );
$header_phone_number = get_field( 'header_phone_number', $settings_id );
$header_phone_tel    = get_field( 'header_phone_tel', $settings_id );
$header_phone_hours  = get_field( 'header_phone_hours', $settings_id );
$header_cta_text     = get_field( 'header_cta_text', $settings_id );
$header_cta_url      = get_field( 'header_cta_url', $settings_id );
$header_rating_text  = get_field( 'header_rating_text', $settings_id );

// Без Repeater мессенджеры — 2 пронумерованных набора полей (icon+url).
$header_messengers = mt_collect_pairs( 'header_messenger', $settings_id, 2, 'icon', 'url' );

// Белый список иконок мессенджеров — из ACF приходит только ключ.
$messenger_icons = array(
	'whatsapp' => '<svg class="header-messengers__icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path fill="#40CD4A" d="M12 2.4a9.6 9.6 0 0 0-8.22 14.55L2.4 21.6l4.79-1.35A9.6 9.6 0 1 0 12 2.4Z"/><path fill="#FDFDFD" d="M9.05 7.3c-.2-.45-.4-.46-.6-.47h-.5c-.17 0-.46.07-.7.33-.24.26-.92.9-.92 2.2s.94 2.55 1.07 2.73c.13.17 1.82 2.92 4.5 3.98 2.22.87 2.67.7 3.15.65.48-.04 1.55-.63 1.77-1.25.22-.61.22-1.14.15-1.25-.06-.11-.24-.17-.5-.3-.26-.13-1.55-.77-1.79-.85-.24-.09-.41-.13-.59.13-.17.26-.67.85-.82 1.02-.15.18-.3.2-.56.07-.26-.13-1.1-.41-2.1-1.3-.78-.69-1.3-1.55-1.45-1.81-.15-.26-.02-.4.11-.53.12-.12.26-.3.39-.46.13-.15.17-.26.26-.44.09-.17.04-.33-.02-.46-.07-.13-.57-1.44-.8-1.96Z"/></svg>',
	'telegram' => '<svg class="header-messengers__icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="9.6" fill="#00B0F2"/><path fill="#FEFFFC" d="m6.8 11.86 8.2-3.16c.38-.14.72.09.6.67l-1.4 6.58c-.1.47-.38.58-.77.36l-2.13-1.57-1.03.99c-.11.11-.21.21-.43.21l.15-2.17 3.95-3.57c.17-.15-.04-.24-.27-.09l-4.88 3.07-2.1-.66c-.46-.14-.47-.46.09-.68Z"/></svg>',
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

		<?php
		/*
		 * Переключатель мобильного меню. Чекбокс стоит перед строками, которыми
		 * управляет, чтобы до них доставал селектор ~. Он визуально скрыт, но
		 * остаётся в фокусе с клавиатуры — пробел раскрывает меню.
		 */
		?>
		<input class="header-burger__checkbox visually-hidden" type="checkbox" id="header-burger">

		<div class="site-header__top">
			<a class="site-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php if ( $header_logo ) : ?>
					<img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php bloginfo( 'name' ); ?>" width="168" height="36">
				<?php endif; ?>
			</a>

			<?php // видны только в мобильной шапке ?>
			<div class="site-header__mobile">
				<a class="header-icon" href="tel:<?php echo esc_attr( $header_phone_tel ); ?>">
					<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
						<path fill="currentColor" d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.45.57 3.57a1 1 0 0 1-.25 1.02l-2.2 2.2Z"/>
					</svg>
					<span class="visually-hidden">Позвонить</span>
				</a>

				<label class="header-icon header-burger" for="header-burger">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" aria-hidden="true" focusable="false">
						<path d="M4 6h16M4 12h16M4 18h16"/>
					</svg>
					<span class="visually-hidden">Меню</span>
				</label>
			</div>

			<div class="site-header__actions">
				<ul class="header-messengers">
					<?php foreach ( $header_messengers as $messenger ) : ?>
						<li class="header-messengers__item">
							<a class="header-messengers__link" href="<?php echo esc_url( $messenger['url'] ); ?>" aria-label="<?php echo esc_attr( sprintf( 'Написать в %s', ucfirst( $messenger['icon'] ) ) ); ?>">
								<?php echo isset( $messenger_icons[ $messenger['icon'] ] ) ? $messenger_icons[ $messenger['icon'] ] : ''; ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>

				<div class="header-phone">
					<a class="header-phone__number" href="tel:<?php echo esc_attr( $header_phone_tel ); ?>"><?php echo esc_html( $header_phone_number ); ?></a>
					<p class="header-phone__hours"><?php echo esc_html( $header_phone_hours ); ?></p>
				</div>

				<a class="header-cta" href="<?php echo esc_url( $header_cta_url ); ?>"><?php echo esc_html( $header_cta_text ); ?></a>
			</div>
		</div>

		<div class="site-header__bottom">
			<nav class="header-nav" aria-label="Главное меню">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'items_wrap'     => '<ul class="header-nav__list">%3$s</ul>',
						'walker'         => new Header_Menu_Walker(),
						'fallback_cb'    => false,
						'depth'          => 2,
					)
				);
				?>
			</nav>

			<p class="header-rating">
				<span class="header-rating__stars" aria-hidden="true">★★★★★</span>
				<span class="header-rating__text"><?php echo esc_html( $header_rating_text ); ?></span>
			</p>
		</div>

	</div>
</header>
