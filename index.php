<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Демонстрационная версия продукта «1С-Битрикс: Управление сайтом»");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Главная страница");
?>

<main class="main" style="background-image: url('./images/main-bg.jpg')">
	<style>
		.hero {
			background-image: url("<?= SITE_TEMPLATE_PATH."/img/hero-bg.png" ?>");
		}
		@media (max-width: 991px) {
			.hero {
				background-image: url("<?= SITE_TEMPLATE_PATH."/img/hero-bg-sm.png" ?>");
				background-color: #2b2a29;
				background-size: cover;
			}
		}
	</style>

	<div class="hero">
		<div class="container">
			<div class="hero__content">
				<a href="/" class="logo hero__logo">
					<img
						width="46"
						height="40"
						src="<?= SITE_TEMPLATE_PATH."/img/logo.svg" ?>"
						alt="Югорский калейдоскоп событий"
						class="logo"
					/>
					<span class="title"
						>Югорский <br />
						калейдоскоп <br />
						событий</span
					>
				</a>
				<? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"banner", 
	array(
		"COMPONENT_TEMPLATE" => "banner",
		"IBLOCK_TYPE" => "events",
		"IBLOCK_ID" => $_REQUEST["ID"],
		"NEWS_COUNT" => "1",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
); ?>
			</div>
		</div>
	</div>

	<div class="cards-list-slider">
		<div class="cards-list-slider__container">
			<div class="swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="card">
							<div class="card__image card-image">
								<img
									loading="lazy"
									src="<?= SITE_TEMPLATE_PATH."/img/card.jpg" ?>"
									alt="Визит Патриарха Кирилла"
								/>
								<div class="card-badge">
									<span class="card-badge__mounth">Сен</span>
									<span class="card-badge__num">18</span>
								</div>
							</div>

							<div class="card__body">
								<div class="card__title heading heading--4">
									35 лет первой экспериментальной школе Урая
								</div>

								<div class="card-announce">
									<span
										>35 лет назад (1988) в городе Урае открылась первая
										экспериментальная новая школа № 6, ныне муниципальное
										бюджетное общеобразовательное учреждение «Средняя
										общеобразовательная школа с углубленным изучением
										отдельных предметов № 6».</span
									>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="card">
							<div class="card__image card-image">
								<img
									loading="lazy"
									src="<?= SITE_TEMPLATE_PATH."/img/card.jpg" ?>"
									alt="Визит Патриарха Кирилла"
								/>
								<div class="card-badge card-badge--green">
									<span class="card-badge__mounth">Сен</span>
									<span class="card-badge__num">18</span>
								</div>
							</div>

							<div class="card__body">
								<div class="card__title heading heading--4">
									35 лет первой экспериментальной школе Урая
								</div>

								<div class="card-announce">
									35 лет назад (1988) в городе Урае открылась первая
									экспериментальная новая школа № 6, ныне муниципальное
									бюджетное общеобразовательное учреждение «Средняя
									общеобразовательная школа с углубленным изучением
									отдельных предметов № 6».
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="card">
							<div class="card__image card-image">
								<img
									loading="lazy"
									src="<?= SITE_TEMPLATE_PATH."/img/card.jpg" ?>"
									alt="Визит Патриарха Кирилла"
								/>
								<div class="card-badge card-badge--brown">
									<span class="card-badge__mounth">Сен</span>
									<span class="card-badge__num">18</span>
								</div>
							</div>

							<div class="card__body">
								<div class="card__title heading heading--4">
									35 лет первой экспериментальной школе Урая
								</div>

								<div class="card-announce">
									35 лет назад (1988) в городе Урае открылась первая
									экспериментальная новая школа № 6, ныне муниципальное
									бюджетное общеобразовательное учреждение «Средняя
									общеобразовательная школа с углубленным изучением
									отдельных предметов № 6».
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="card">
							<div class="card__image card-image">
								<img
									loading="lazy"
									src="<?= SITE_TEMPLATE_PATH."/img/card.jpg" ?>"
									alt="Визит Патриарха Кирилла"
								/>
								<div class="card-badge card-badge--dark">
									<span class="card-badge__mounth">Сен</span>
									<span class="card-badge__num">18</span>
								</div>
							</div>

							<div class="card__body">
								<div class="card__title heading heading--4">
									35 лет первой экспериментальной школе Урая
								</div>

								<div class="card-announce">
									35 лет назад (1988) в городе Урае открылась первая
									экспериментальная новая школа № 6, ныне муниципальное
									бюджетное общеобразовательное учреждение «Средняя
									общеобразовательная школа с углубленным изучением
									отдельных предметов № 6».
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="card">
							<div class="card__image card-image">
								<img
									loading="lazy"
									src="<?= SITE_TEMPLATE_PATH."/img/card.jpg" ?>"
									alt="Визит Патриарха Кирилла"
								/>
								<div class="card-badge card-badge--dark">
									<span class="card-badge__mounth">Сен</span>
									<span class="card-badge__num">18</span>
								</div>
							</div>

							<div class="card__body">
								<div class="card__title heading heading--4">
									35 лет первой экспериментальной школе Урая
								</div>

								<div class="card-announce">
									35 лет назад (1988) в городе Урае открылась первая
									экспериментальная новая школа № 6, ныне муниципальное
									бюджетное общеобразовательное учреждение «Средняя
									общеобразовательная школа с углубленным изучением
									отдельных предметов № 6».
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="cards-list-slider__more">
						<a href="/" class="btn btn--white icon icon-plus">
							Больше событий
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="sections-list-slider">
		<div class="sections-list-slider__thumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="sections-list-slider__header">
							<button
								class="icon icon-arrow icon-arrow--left slider-arrow"
							></button>
							<div class="sections-list-slider__title">
								<div class="swiper">
									<div class="swiper-wrapper">
										<div class="swiper-slide">2023 год</div>
										<div class="swiper-slide">2022 год</div>
									</div>
								</div>
							</div>
							<button
								class="icon icon-arrow icon-arrow--right slider-arrow"
							></button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="sections-list-slider__main">
			<div class="swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="sections-list-slider__container">
							<div class="container">
								<div class="row">
									<div class="col-md-3">
										<a href="/" class="sections-list-item"> Январь </a>
									</div>
									<div class="col-md-3">
										<a href="/" class="sections-list-item"> Январь </a>
									</div>
									<div class="col-md-3">
										<a href="/" class="sections-list-item"> Январь </a>
									</div>
									<div class="col-md-3">
										<a href="/" class="sections-list-item"> Январь </a>
									</div>
									<div class="col-md-3">
										<a href="/" class="sections-list-item"> Январь </a>
									</div>
									<div class="col-md-3">
										<a href="/" class="sections-list-item"> Январь </a>
									</div>
									<div class="col-md-3">
										<a href="/" class="sections-list-item"> Январь </a>
									</div>
									<div class="col-md-3">
										<a href="/" class="sections-list-item"> Январь </a>
									</div>
									<div class="col-md-3">
										<a href="/" class="sections-list-item"> Январь </a>
									</div>
									<div class="col-md-3">
										<a href="/" class="sections-list-item"> Январь </a>
									</div>
									<div class="col-md-3">
										<a href="/" class="sections-list-item"> Январь </a>
									</div>
									<div class="col-md-3">
										<a href="/" class="sections-list-item"> Январь </a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="sections-list-slider__container">
							<div class="container">
								<div class="row">
									<div class="col-md-3">
										<a href="/" class="sections-list-item"> Январь </a>
									</div>
									<div class="col-md-3">
										<a href="/" class="sections-list-item"> Январь </a>
									</div>
									<div class="col-md-3">
										<a href="/" class="sections-list-item"> Январь </a>
									</div>
									<div class="col-md-3">
										<a href="/" class="sections-list-item"> Январь </a>
									</div>
									<div class="col-md-3">
										<a href="/" class="sections-list-item"> Январь </a>
									</div>
									<div class="col-md-3">
										<a href="/" class="sections-list-item"> Январь </a>
									</div>
									<div class="col-md-3">
										<a href="/" class="sections-list-item"> Январь </a>
									</div>
									<div class="col-md-3">
										<a href="/" class="sections-list-item"> Январь </a>
									</div>
									<div class="col-md-3">
										<a href="/" class="sections-list-item"> Январь </a>
									</div>
									<div class="col-md-3">
										<a href="/" class="sections-list-item"> Январь </a>
									</div>
									<div class="col-md-3">
										<a href="/" class="sections-list-item"> Январь </a>
									</div>
									<div class="col-md-3">
										<a href="/" class="sections-list-item"> Январь </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>