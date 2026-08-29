<?php
/**
 * Главная страница. Первый экран и полоса с цифрами.
 *
 * Без ACF PRO (без Repeater) списки хранятся как пронумерованные поля и
 * собираются через mt_collect_rows()/mt_collect_pairs()/mt_collect_list()
 * из functions.php. Поля лежат прямо на этой же странице (get_the_ID()) —
 * отдельная служебная страница не нужна.
 *
 * @package Methodic-Task
 */

get_header();

$settings_id = get_the_ID();

// --- Белые списки иконок: из ACF приходит только ключ, произвольная разметка в шаблон не попадёт.
$start_icons = array(
	'phone'    => '<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path fill="currentColor" d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.45.57 3.57a1 1 0 0 1-.25 1.02l-2.2 2.2Z"/></svg>',
	'sparkles' => '<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path fill="currentColor" d="m11 2.5 1.7 4.6 4.6 1.7-4.6 1.7L11 15.1 9.3 10.5 4.7 8.8l4.6-1.7L11 2.5Z"/><path fill="currentColor" d="m18.4 13.6.85 2.3 2.3.85-2.3.85-.85 2.3-.85-2.3-2.3-.85 2.3-.85.85-2.3Z"/><path fill="currentColor" d="m6.2 15.8.6 1.65 1.65.6-1.65.6-.6 1.65-.6-1.65-1.65-.6 1.65-.6.6-1.65Z"/></svg>',
	'check'    => '<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path fill="currentColor" d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2Zm5.9 13.2 6.4-6.4-1.4-1.4-5 5-2.4-2.4-1.4 1.4 3.8 3.8Z"/></svg>',
);

// Иконки полосы с цифрами заданы в шаблоне по порядку (не в ACF — уникальные декоративные SVG).
$stats_icons = array(
	'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg>',
	'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="8" y="2" width="8" height="4" rx="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><path d="m9 14 2 2 4-4"/></svg>',
	'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M9 22v-4h6v4"/><path d="M8 6h.01M12 6h.01M16 6h.01M8 10h.01M12 10h.01M16 10h.01M8 14h.01M12 14h.01M16 14h.01"/></svg>',
	'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M11.48 3.5a.56.56 0 0 1 1.04 0l2.13 4.32a.56.56 0 0 0 .42.3l4.77.7a.56.56 0 0 1 .31.95l-3.45 3.36a.56.56 0 0 0-.16.5l.81 4.75a.56.56 0 0 1-.81.59l-4.27-2.24a.56.56 0 0 0-.52 0l-4.27 2.24a.56.56 0 0 1-.81-.59l.82-4.75a.56.56 0 0 0-.17-.5L3.87 9.77a.56.56 0 0 1 .31-.95l4.77-.7a.56.56 0 0 0 .42-.3Z"/></svg>',
);

$arrow = '<svg class="btn__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 17 17 7"/><path d="M8 7h9v9"/></svg>';

$contacts_icons = array(
	'max'      => '<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.13" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="8" cy="8" r="6"/><path d="M5.8 8h4.4"/></svg>',
	'telegram' => '<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.13" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M14.5 2 1.8 6.9l3.5 1.3 1.3 3.6 2-2.6 3.1 2.3z"/><path d="m5.3 8.2 7-4.6"/></svg>',
);

// --- Данные страницы из ACF.
$hero_title          = get_field( 'hero_title', $settings_id );
$hero_lead           = get_field( 'hero_lead', $settings_id );
$hero_choose         = get_field( 'hero_choose', $settings_id );
$hero_image          = get_field( 'hero_image', $settings_id );
$hero_card_applicant = mt_group_field( 'hero_card_applicant', $settings_id, array(
	'eyebrow'                => 'Иностранным гражданам',
	'title'                  => 'Оформляю статус себе или семье',
	'desc'                   => '',
	'button_primary_text'    => 'Бесплатная консультация',
	'button_primary_url'     => '#',
	'button_secondary_text'  => 'Смотреть услуги и цены',
	'button_secondary_url'   => '#',
) );

$hero_card_employer = mt_group_field( 'hero_card_employer', $settings_id, array(
	'eyebrow'                => 'Работодателям',
	'title'                  => 'Оформляю иностранных сотрудников',
	'desc'                   => '',
	'button_solution_text'   => 'Решение для работодателей',
	'button_solution_url'    => '#',
	'button_primary_text'    => 'Бесплатная консультация',
	'button_primary_url'     => '#',
	'button_secondary_text'  => 'Смотреть услуги и цены',
	'button_secondary_url'   => '#',
) );
$hero_info_lines     = array(
	array( 'line' => get_field( 'hero_info_line_1', $settings_id ) ),
	array( 'line' => get_field( 'hero_info_line_2', $settings_id ) ),
);

$stats_items = mt_collect_pairs( 'stats', $settings_id, 4, 'value', 'label' );

$start_title    = get_field( 'start_title', $settings_id );
$start_subtitle = get_field( 'start_subtitle', $settings_id );
$start_cards    = mt_collect_rows( 'start_card', $settings_id, 3, array( 'icon', 'title', 'text', 'button_text', 'button_url', 'wide' ) );

$services_title    = get_field( 'services_title', $settings_id );
$services_subtitle = get_field( 'services_subtitle', $settings_id );
$services_image    = get_field( 'services_image', $settings_id );
$services_items    = mt_collect_rows( 'service', $settings_id, 3, array( 'title', 'text', 'price', 'button_text', 'button_url' ) );
$services_link     = mt_group_field( 'services_link', $settings_id, array( 'title' => 'Все услуги', 'url' => '#' ) );
$services_note     = get_field( 'services_note', $settings_id );

$process_title    = get_field( 'process_title', $settings_id );
$process_subtitle = get_field( 'process_subtitle', $settings_id );
$process_steps    = mt_collect_rows( 'process_step', $settings_id, 4, array( 'title', 'text' ) );
$process_note     = get_field( 'process_note', $settings_id );

$trust_title    = get_field( 'trust_title', $settings_id );
$trust_subtitle = get_field( 'trust_subtitle', $settings_id );
$trust_image    = get_field( 'trust_image', $settings_id );
$trust_rating = mt_group_field( 'trust_rating', $settings_id, array(
	'value'     => '4,8',
	'text'      => '',
	'link_text' => 'Читать отзывы',
	'link_url'  => '#',
) );

$trust_cases_group = mt_group_field( 'trust_cases', $settings_id, array( 'title' => 'Примеры дел' ) );
$trust_cases        = array(
	'title' => $trust_cases_group['title'],
	'items' => array(),
);
for ( $i = 1; $i <= 3; $i++ ) {
	if ( ! empty( $trust_cases_group[ "case_{$i}_text" ] ) ) {
		$trust_cases['items'][] = array(
			'text' => $trust_cases_group[ "case_{$i}_text" ],
			'url'  => $trust_cases_group[ "case_{$i}_url" ] ?? '#',
		);
	}
}

$trust_team = mt_group_field( 'trust_team', $settings_id, array(
	'title'     => 'Команда, которую видно',
	'text'      => '',
	'link_text' => 'Познакомиться с командой',
	'link_url'  => '#',
) );

$reviews_title    = get_field( 'reviews_title', $settings_id );
$reviews_subtitle = get_field( 'reviews_subtitle', $settings_id );
$reviews_widgets  = mt_collect_rows( 'review', $settings_id, 2, array( 'name', 'score', 'image' ) );

$kb_title    = get_field( 'kb_title', $settings_id );
$kb_subtitle = get_field( 'kb_subtitle', $settings_id );
$kb_items    = mt_collect_rows( 'kb_item', $settings_id, 3, array( 'title', 'text', 'url', 'featured' ) );

$gov_title    = get_field( 'gov_title', $settings_id );
$gov_subtitle = get_field( 'gov_subtitle', $settings_id );
$gov_links    = mt_collect_rows( 'gov_link', $settings_id, 8, array( 'title', 'url', 'target' ) );

$faq_title    = get_field( 'faq_title', $settings_id );
$faq_subtitle = get_field( 'faq_subtitle', $settings_id );
$faq_items    = mt_collect_pairs( 'faq_item', $settings_id, 8, 'question', 'answer' );
$faq_more     = mt_group_field( 'faq_more', $settings_id, array( 'title' => 'Все вопросы и ответы', 'url' => '#' ) );

$cta_title       = get_field( 'cta_title', $settings_id );
$cta_lead        = get_field( 'cta_lead', $settings_id );
$cta_submit      = get_field( 'cta_submit', $settings_id );
$cta_consent_url = get_field( 'cta_consent_url', $settings_id );
$cta_note        = get_field( 'cta_note', $settings_id );
$cta_image       = get_field( 'cta_image', $settings_id );

$contacts_title    = get_field( 'contacts_title', $settings_id );
$contacts_subtitle = get_field( 'contacts_subtitle', $settings_id );

$contacts_phone_group = mt_group_field( 'contacts_phone', $settings_id, array(
	'title'  => 'Телефон и мессенджеры',
	'hours'  => 'Пн–Пт, 09:00–18:00',
	'number' => '',
	'tel'    => '',
) );
$contacts_phone       = array(
	'title'  => $contacts_phone_group['title'],
	'hours'  => $contacts_phone_group['hours'],
	'number' => $contacts_phone_group['number'],
	'tel'    => $contacts_phone_group['tel'],
	'chips'  => array(),
);
for ( $i = 1; $i <= 2; $i++ ) {
	if ( ! empty( $contacts_phone_group[ "chip_{$i}_label" ] ) ) {
		$contacts_phone['chips'][] = array(
			'label' => $contacts_phone_group[ "chip_{$i}_label" ],
			'url'   => $contacts_phone_group[ "chip_{$i}_url" ],
			'icon'  => $contacts_phone_group[ "chip_{$i}_icon" ],
		);
	}
}

$contacts_offices = mt_collect_rows( 'office', $settings_id, 2, array( 'tab', 'name', 'address', 'hours', 'route', 'route_url', 'map_embed' ) );
?>

<main class="site-main">

	<section class="hero">
		<div class="hero__inner">

			<div class="hero__intro">
				<h1 class="hero__title"><?php echo nl2br( esc_html( $hero_title ) ); ?></h1>
				<p class="hero__lead"><?php echo esc_html( $hero_lead ); ?></p>
				<p class="hero__choose"><?php echo esc_html( $hero_choose ); ?></p>
			</div>

			<?php if ( $hero_image ) : ?>
				<img class="hero__pic" src="<?php echo esc_url( $hero_image ); ?>" alt="" width="802" height="534">
			<?php endif; ?>

			<div class="hero__content">
				<div class="hero__cards">

					<article class="hero-card">
						<div class="hero-card__body">
							<p class="hero-card__eyebrow"><?php echo esc_html( $hero_card_applicant['eyebrow'] ); ?></p>
							<div class="hero-card__text">
								<h2 class="hero-card__title"><?php echo esc_html( $hero_card_applicant['title'] ); ?></h2>
								<p class="hero-card__desc"><?php echo esc_html( $hero_card_applicant['desc'] ); ?></p>
							</div>
						</div>
						<div class="hero-card__buttons">
							<a class="btn btn--primary" href="<?php echo esc_url( $hero_card_applicant['button_primary_url'] ); ?>"><?php echo esc_html( $hero_card_applicant['button_primary_text'] ); ?></a>
							<a class="btn btn--outline" href="<?php echo esc_url( $hero_card_applicant['button_secondary_url'] ); ?>"><?php echo esc_html( $hero_card_applicant['button_secondary_text'] ); ?></a>
						</div>
					</article>

					<article class="hero-card">
						<div class="hero-card__body">
							<p class="hero-card__eyebrow"><?php echo esc_html( $hero_card_employer['eyebrow'] ); ?></p>
							<div class="hero-card__text">
								<h2 class="hero-card__title"><?php echo esc_html( $hero_card_employer['title'] ); ?></h2>
								<p class="hero-card__desc"><?php echo esc_html( $hero_card_employer['desc'] ); ?></p>
							</div>
						</div>
						<div class="hero-card__buttons">
							<a class="btn btn--primary hero-card__solution" href="<?php echo esc_url( $hero_card_employer['button_solution_url'] ); ?>">
								<?php echo esc_html( $hero_card_employer['button_solution_text'] ); ?>
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false">
									<path d="M16.9807 15.481L16.9807 7.08019L8.45875 7.08031M16.9807 7.08019L7.08125 16.9797" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</a>
							<a class="btn btn--primary hero-card__extra" href="<?php echo esc_url( $hero_card_employer['button_primary_url'] ); ?>"><?php echo esc_html( $hero_card_employer['button_primary_text'] ); ?></a>
							<a class="btn btn--outline hero-card__extra" href="<?php echo esc_url( $hero_card_employer['button_secondary_url'] ); ?>"><?php echo esc_html( $hero_card_employer['button_secondary_text'] ); ?></a>
						</div>
					</article>

				</div>

				<aside class="hero-info">
					<?php foreach ( $hero_info_lines as $row ) : ?>
						<?php if ( '' !== (string) $row['line'] ) : ?>
							<p class="hero-info__line"><?php echo esc_html( $row['line'] ); ?></p>
						<?php endif; ?>
					<?php endforeach; ?>
				</aside>
			</div>

		</div>
	</section>

	<section class="stats">
		<ul class="stats__list">
			<?php foreach ( $stats_items as $i => $item ) : ?>
				<li class="stats__item">
					<span class="stats__icon"><?php echo $stats_icons[ $i ] ?? $stats_icons[0]; ?></span>
					<div class="stats__body">
						<p class="stats__value"><?php echo esc_html( $item['value'] ); ?></p>
						<p class="stats__label"><?php echo esc_html( $item['label'] ); ?></p>
					</div>
				</li>
			<?php endforeach; ?>
		</ul>
	</section>

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

	<section class="services">
		<div class="services__inner">

			<div class="services__top">
				<div class="services__head">
					<h2 class="services__title"><?php echo esc_html( $services_title ); ?></h2>
					<p class="services__subtitle"><?php echo esc_html( $services_subtitle ); ?></p>
				</div>
				<?php if ( $services_image ) : ?>
					<img class="services__pic" src="<?php echo esc_url( $services_image ); ?>" alt="" width="687" height="290">
				<?php endif; ?>
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
									<?php echo $arrow; ?>
								</a>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>

				<div class="services__info">
					<a class="btn btn--link" href="<?php echo esc_url( $services_link['url'] ); ?>">
						<span><?php echo esc_html( $services_link['title'] ); ?></span>
						<?php echo $arrow; ?>
					</a>
					<span class="services__note"><?php echo esc_html( $services_note ); ?></span>
				</div>
			</div>

		</div>
	</section>

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

	<section class="trust">
		<div class="trust__inner">

			<div class="trust__top">
				<div class="trust__head">
					<h2 class="trust__title"><?php echo esc_html( $trust_title ); ?></h2>
					<p class="trust__subtitle"><?php echo esc_html( $trust_subtitle ); ?></p>
				</div>
				<?php if ( $trust_image ) : ?>
					<img class="trust__pic" src="<?php echo esc_url( $trust_image ); ?>" alt="" width="807" height="346">
				<?php endif; ?>
			</div>

			<ul class="trust__list">

				<li class="trust-card trust-card--rating">
					<div class="trust-card__body">
						<p class="trust-card__score"><?php echo esc_html( $trust_rating['value'] ); ?></p>
						<p class="trust-card__text"><?php echo esc_html( $trust_rating['text'] ); ?></p>
					</div>
					<a class="btn btn--link" href="<?php echo esc_url( $trust_rating['link_url'] ); ?>">
						<span><?php echo esc_html( $trust_rating['link_text'] ); ?></span>
						<?php echo $arrow; ?>
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
						<?php echo $arrow; ?>
					</a>
				</li>

			</ul>

		</div>
	</section>

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
						<?php if ( ! empty( $widget['image'] ) ) : ?>
							<img class="review-widget__shot" src="<?php echo esc_url( $widget['image'] ); ?>" width="723" height="318"
								alt="<?php echo esc_attr( sprintf( 'Отзывы на площадке %1$s, рейтинг %2$s', $widget['name'], $widget['score'] ) ); ?>">
						<?php endif; ?>
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
							<span class="kb-card__arrow">
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
								target="_blank" rel="noopener"
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
	 * ВНИМАНИЕ: форма никуда не отправляется — action пустой, обработчика нет.
	 * Подключать через CF7 / WPForms / собственный admin-post обработчик,
	 * тогда же добавить nonce и защиту от спама.
	 */
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

			<?php if ( $cta_image ) : ?>
				<img class="cta__pic" src="<?php echo esc_url( $cta_image ); ?>" alt="" width="610" height="340">
			<?php endif; ?>

		</div>
	</section>

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