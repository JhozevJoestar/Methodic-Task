<?php
/**
 * Подвал сайта: CTA-блок, меню-колонки, контакты и юридическая информация.
 *
 * Контент — из полей ACF на главной странице сайта (та же страница, где
 * лежат поля front-page.php и header.php). Списки ссылок хранятся как
 * пронумерованные поля (без Repeater — это функция ACF PRO) и собираются
 * в массивы через mt_collect_pairs()/mt_collect_list() из functions.php.
 *
 * @package Methodic-Task
 */

$settings_id = (int) get_option( 'page_on_front' );

$footer_cta = array(
	'title'       => get_field( 'footer_cta_title', $settings_id ),
	'subtitle'    => get_field( 'footer_cta_subtitle', $settings_id ),
	'button_text' => get_field( 'footer_cta_button_text', $settings_id ),
	'button_url'  => get_field( 'footer_cta_button_url', $settings_id ),
);

$footer_col_foreigners = array(
	'title' => get_field( 'footer_col1_title', $settings_id ),
	'links' => mt_collect_pairs( 'footer_col1_link', $settings_id, 8, 'text', 'url' ),
);

$footer_col_employers = array(
	'title' => get_field( 'footer_col2_title', $settings_id ),
	'links' => mt_collect_pairs( 'footer_col2_link', $settings_id, 4, 'text', 'url' ),
);

$footer_col_company = array(
	'title' => get_field( 'footer_col3_title', $settings_id ),
	'links' => mt_collect_pairs( 'footer_col3_link', $settings_id, 4, 'text', 'url' ),
);

$footer_col_useful = array(
	'title' => get_field( 'footer_col4_title', $settings_id ),
	'links' => mt_collect_pairs( 'footer_col4_link', $settings_id, 5, 'text', 'url' ),
);

$footer_contacts = array(
	'phone_number' => get_field( 'footer_contacts_phone_number', $settings_id ),
	'phone_tel'    => get_field( 'footer_contacts_phone_tel', $settings_id ),
	'hours'        => get_field( 'footer_contacts_hours', $settings_id ),
	'addresses'    => mt_collect_list( 'footer_addr', $settings_id, 2, 'line' ),
	'map_text'     => get_field( 'footer_contacts_map_text', $settings_id ),
	'map_url'      => get_field( 'footer_contacts_map_url', $settings_id ),
);

$footer_chips  = mt_collect_pairs( 'footer_chip', $settings_id, 2, 'label', 'url' );
$footer_social = mt_collect_pairs( 'footer_social', $settings_id, 2, 'label', 'url' );

$footer_legal_text  = get_field( 'footer_legal_text', $settings_id );
$footer_legal_links = mt_collect_pairs( 'footer_legal_link', $settings_id, 3, 'text', 'url' );
$footer_copyright   = get_field( 'footer_copyright', $settings_id );
?>
<footer class="site-footer">
	<div class="site-footer__inner">

		<div class="footer-cta">
			<div class="footer-cta__text">
				<p class="footer-cta__title"><?php echo esc_html( $footer_cta['title'] ); ?></p>
				<p class="footer-cta__subtitle"><?php echo esc_html( $footer_cta['subtitle'] ); ?></p>
			</div>
			<a class="footer-cta__button" href="<?php echo esc_url( $footer_cta['button_url'] ); ?>"><?php echo esc_html( $footer_cta['button_text'] ); ?></a>
		</div>

		<div class="footer-columns">

			<div class="footer-col">
				<nav class="footer-nav" aria-labelledby="footer-title-foreigners">
					<h3 class="footer-col__title" id="footer-title-foreigners"><?php echo esc_html( $footer_col_foreigners['title'] ); ?></h3>
					<ul class="footer-menu">
						<?php foreach ( $footer_col_foreigners['links'] as $link ) : ?>
							<li class="footer-menu__item"><a class="footer-menu__link" href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_html( $link['text'] ); ?></a></li>
						<?php endforeach; ?>
					</ul>
				</nav>
			</div>

			<div class="footer-col">
				<nav class="footer-nav" aria-labelledby="footer-title-employers">
					<h3 class="footer-col__title" id="footer-title-employers"><?php echo esc_html( $footer_col_employers['title'] ); ?></h3>
					<ul class="footer-menu">
						<?php foreach ( $footer_col_employers['links'] as $link ) : ?>
							<li class="footer-menu__item"><a class="footer-menu__link" href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_html( $link['text'] ); ?></a></li>
						<?php endforeach; ?>
					</ul>
				</nav>
				<nav class="footer-nav" aria-labelledby="footer-title-company">
					<h3 class="footer-col__title" id="footer-title-company"><?php echo esc_html( $footer_col_company['title'] ); ?></h3>
					<ul class="footer-menu">
						<?php foreach ( $footer_col_company['links'] as $link ) : ?>
							<li class="footer-menu__item"><a class="footer-menu__link" href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_html( $link['text'] ); ?></a></li>
						<?php endforeach; ?>
					</ul>
				</nav>
			</div>

			<div class="footer-col">
				<div class="footer-nav">
					<h3 class="footer-col__title">Контакты</h3>
					<address class="footer-contacts">
						<a class="footer-contacts__phone" href="tel:<?php echo esc_attr( $footer_contacts['phone_tel'] ); ?>"><?php echo esc_html( $footer_contacts['phone_number'] ); ?></a>
						<p class="footer-contacts__line"><?php echo esc_html( $footer_contacts['hours'] ); ?></p>
						<?php foreach ( $footer_contacts['addresses'] as $addr ) : ?>
							<p class="footer-contacts__line"><?php echo esc_html( $addr['line'] ); ?></p>
						<?php endforeach; ?>
						<a class="footer-contacts__map" href="<?php echo esc_url( $footer_contacts['map_url'] ); ?>"><?php echo esc_html( $footer_contacts['map_text'] ); ?> <span class="footer-contacts__arrow" aria-hidden="true">→</span></a>
					</address>
				</div>
				<ul class="footer-chips">
					<?php foreach ( $footer_chips as $chip ) : ?>
						<li class="footer-chips__item"><a class="footer-chips__link" href="<?php echo esc_url( $chip['url'] ); ?>"><?php echo esc_html( $chip['label'] ); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div class="footer-col">
				<nav class="footer-nav" aria-labelledby="footer-title-useful">
					<h3 class="footer-col__title" id="footer-title-useful"><?php echo esc_html( $footer_col_useful['title'] ); ?></h3>
					<ul class="footer-menu">
						<?php foreach ( $footer_col_useful['links'] as $link ) : ?>
							<li class="footer-menu__item"><a class="footer-menu__link" href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_html( $link['text'] ); ?></a></li>
						<?php endforeach; ?>
					</ul>
				</nav>
				<div class="footer-nav">
					<h3 class="footer-col__title">Мы в соцсетях</h3>
					<ul class="footer-chips">
						<?php foreach ( $footer_social as $social ) : ?>
							<li class="footer-chips__item"><a class="footer-chips__link" href="<?php echo esc_url( $social['url'] ); ?>"><?php echo esc_html( $social['label'] ); ?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>

		</div>

		<div class="footer-bottom">
			<p class="footer-bottom__legal"><?php echo esc_html( $footer_legal_text ); ?></p>
			<ul class="footer-bottom__links">
				<?php foreach ( $footer_legal_links as $link ) : ?>
					<li class="footer-bottom__item"><a class="footer-bottom__link" href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_html( $link['text'] ); ?></a></li>
				<?php endforeach; ?>
			</ul>
			<p class="footer-bottom__copyright"><?php echo esc_html( $footer_copyright ); ?></p>
		</div>

	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
