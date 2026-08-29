<?php
/**
 * Настройки темы: регистрация меню, вспомогательные функции для полей ACF
 * (без ACF PRO — без Repeater) и кастомный Walker для выпадающего пункта
 * "Услуги" в шапке.
 *
 * Поля шапки и подвала хранятся не на отдельной служебной странице, а прямо
 * на главной странице сайта (той же, где лежат поля front-page.php) — её ID
 * WordPress и так хранит в стандартной настройке page_on_front, отдельная
 * страница/шаблон для этого не нужны.
 *
 * @package Methodic-Task
 */

/**
 * Регистрируем позицию меню, которую использует header.php.
 */
function methodic_register_menus() {
	register_nav_menus(
		array(
			'primary' => __( 'Главное меню (шапка)', 'methodic-task' ),
		)
	);
}
add_action( 'after_setup_theme', 'methodic_register_menus' );

function methodic_enqueue_styles() {
	wp_enqueue_style(
		'methodic-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'methodic_enqueue_styles' );

/**
 * Без Repeater (ACF PRO) списки хранятся как пронумерованные поля:
 * {$prefix}_1_{$key_a}, {$prefix}_1_{$key_b}, {$prefix}_2_{$key_a}, ...
 * Функция собирает их обратно в массив, пропуская полностью пустые слоты.
 *
 * Пример: mt_collect_pairs( 'footer_col1_link', $id, 8, 'text', 'url' )
 * прочитает footer_col1_link_1_text / footer_col1_link_1_url и так далее.
 */
function mt_collect_pairs( $prefix, $post_id, $count, $key_a = 'text', $key_b = 'url' ) {
	$items = array();

	for ( $i = 1; $i <= $count; $i++ ) {
		$a = get_field( "{$prefix}_{$i}_{$key_a}", $post_id );
		$b = get_field( "{$prefix}_{$i}_{$key_b}", $post_id );

		if ( '' === (string) $a && '' === (string) $b ) {
			continue; // пустой слот — пропускаем.
		}

		$items[] = array(
			$key_a => $a,
			$key_b => $b,
		);
	}

	return $items;
}

/**
 * Универсальный вариант mt_collect_pairs() для строк больше чем с двумя
 * полями (например, карточка услуги: title+text+price+button_text+button_url).
 * $keys — просто список суффиксов полей: {$prefix}_{$i}_{$key}.
 * Строка попадает в результат, если хотя бы одно её поле не пустое.
 */
function mt_collect_rows( $prefix, $post_id, $count, $keys ) {
	$items = array();

	for ( $i = 1; $i <= $count; $i++ ) {
		$row       = array();
		$has_value = false;

		foreach ( $keys as $key ) {
			$value        = get_field( "{$prefix}_{$i}_{$key}", $post_id );
			$row[ $key ]  = $value;
			if ( true === $value || ( '' !== (string) $value ) ) {
				$has_value = true;
			}
		}

		if ( $has_value ) {
			$items[] = $row;
		}
	}

	return $items;
}

/**
 * То же самое, но для списка из одного поля на строку
 * (например, footer_addr_1_line, footer_addr_2_line...).
 */
function mt_collect_list( $prefix, $post_id, $count, $key = 'line' ) {
	$items = array();

	for ( $i = 1; $i <= $count; $i++ ) {
		$value = get_field( "{$prefix}_{$i}_{$key}", $post_id );

		if ( '' === (string) $value ) {
			continue;
		}

		$items[] = array( $key => $value );
	}

	return $items;
}

/**
 * Защищённое получение полей типа Group/Link.
 *
 * get_field() ДОЛЖЕН возвращать массив для Group и для Link, но если поле
 * при импорте JSON создалось не тем типом (например, из-за версии ACF)
 * или ещё не заполнено — может вернуться строка, null или false. Прямое
 * обращение по строковому ключу к такой переменной ($value['url']) даёт
 * фатальную ошибку PHP 8. Эта функция всегда возвращает массив, подставляя
 * значения по умолчанию для отсутствующих или "сломанных" полей.
 */
function mt_group_field( $field, $post_id, $defaults = array() ) {
	$value = get_field( $field, $post_id );

	if ( ! is_array( $value ) ) {
		return $defaults;
	}

	return wp_parse_args( $value, $defaults );
}

/**
 * По умолчанию WordPress прячет поля "Описание" и "Классы CSS" на экране
 * Внешний вид → Меню, пока их не включат галочкой в Screen Options.
 * Включаем их сразу для всех, чтобы редактор не искал этот чекбокс сам.
 */
function methodic_show_nav_menu_advanced_fields( $hidden, $screen ) {
	if ( isset( $screen->id ) && 'nav-menus' === $screen->id ) {
		$hidden = array_diff( $hidden, array( 'description', 'css-classes' ) );
	}
	return $hidden;
}
add_filter( 'default_hidden_meta_boxes', 'methodic_show_nav_menu_advanced_fields', 10, 2 );

/**
 * Кастомный Walker для header-nav__list.
 *
 * Обычные пункты меню (Работодателям, О нас и т.д.) рендерятся простой
 * ссылкой header-nav__link — это поведение по умолчанию.
 *
 * Пункт с CSS-классом "has-dropdown" (в макете это "Услуги") рендерится
 * через <details class="header-menu"> — раскрытие без JS.
 *
 * У его дочерних пунктов используется поле "Описание" как header-menu__desc.
 * Дочерний пункт с классом "menu-item-all" ("Все услуги и цены") выводится
 * отдельной ссылкой header-menu__all вне списка, а не строкой в нём.
 */
class Header_Menu_Walker extends Walker_Nav_Menu {

	private $list_closed = false;

	private function chevron_svg() {
		return '<svg class="header-nav__chevron" viewBox="0 0 10 10" aria-hidden="true" focusable="false"><path d="M2 3.5 5 6.5l3-3" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>';
	}

	private function arrow_svg() {
		return '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 17 17 7"/><path d="M8 7h9v9"/></svg>';
	}

	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$this->list_closed = false;
		$output           .= '<div class="header-menu__panel"><ul class="header-menu__list">';
	}

	public function end_lvl( &$output, $depth = 0, $args = null ) {
		if ( ! $this->list_closed ) {
			$output .= '</ul>';
		}
		$output .= '</div>';
	}

	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		if ( 0 === $depth ) {
			$has_dropdown = in_array( 'has-dropdown', $classes, true );
			$output      .= '<li class="header-nav__item">';

			if ( $has_dropdown ) {
				$output .= '<details class="header-menu"><summary class="header-nav__link header-menu__toggle">' . esc_html( $item->title ) . $this->chevron_svg() . '</summary>';
			} else {
				$output .= '<a class="header-nav__link" href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a>';
			}
			return;
		}

		// depth === 1: дочерний пункт внутри выпадающего меню.
		$is_all = in_array( 'menu-item-all', $classes, true );

		if ( $is_all ) {
			if ( ! $this->list_closed ) {
				$output            .= '</ul>';
				$this->list_closed = true;
			}
			$output .= '<a class="header-menu__all" href="' . esc_url( $item->url ) . '"><span>' . esc_html( $item->title ) . '</span>' . $this->arrow_svg() . '</a>';
			return;
		}

		$output .= '<li><a class="header-menu__link" href="' . esc_url( $item->url ) . '">'
			. '<span class="header-menu__title">' . esc_html( $item->title ) . '</span>'
			. '<span class="header-menu__desc">' . esc_html( $item->description ) . '</span>'
			. '</a>';
	}

	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		if ( 0 === $depth ) {
			if ( in_array( 'has-dropdown', $classes, true ) ) {
				$output .= '</details>';
			}
			$output .= '</li>';
			return;
		}

		if ( ! in_array( 'menu-item-all', $classes, true ) ) {
			$output .= '</li>';
		}
	}
}