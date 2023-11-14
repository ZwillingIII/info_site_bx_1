<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

// print_r($arResult);
?>

<main class="main" style="background-image: url('<?= SITE_TEMPLATE_PATH."/img/main-bg.jpg" ?>')">
	<div class="breadcrumbs">
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">Главная</a></li>
					<li class="breadcrumb-item"><a href="<?= $arResult["LIST_PAGE_URL"] ?>">Сентябрь 2023</a></li>
					<li class="breadcrumb-item active" aria-current="page">
						<span>
							<?= $arResult["NAME"] ?>
						</span>
					</li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="container">
		<div class="event">
			<div class="event__body">
				<div class="event__content">
					<div class="content">
						<div class="event__date"><?= $arResult["FORMAT_DATE"]["DAY"].' '.$arResult["FORMAT_DATE"]["MONTH"].' '.$arResult["FORMAT_DATE"]["YEAR"]." года" ?></div>

						<div class="event__heading heading heading--2">
							<?= $arResult["DISPLAY_PROPERTIES"]["EVENT_HEADING"]["VALUE"]["TEXT"] ?>
						</div>

						<p>
							<?= $arResult["DETAIL_TEXT"] ?>
						</p>
					</div>
				</div>
				<? $APPLICATION->IncludeComponent(
					"bitrix:news.list",
					"related.news",
					[
						"COMPONENT_TEMPLATE" => "main.page.news",
						"IBLOCK_TYPE" => "events",
						"IBLOCK_ID" => "1",
						"NEWS_COUNT" => "2",
						"SORT_BY1" => "ACTIVE_FROM",
						"SORT_ORDER1" => "DESC",
						"SORT_BY2" => "SORT",
						"SORT_ORDER2" => "ASC",
						"FILTER_NAME" => "",
						"FIELD_CODE" => array(
							0 => "ID",
							1 => "CODE",
							2 => "NAME",
							3 => "PREVIEW_TEXT",
							4 => "PREVIEW_PICTURE",
							5 => "DATE_CREATE",
							6 => "",
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
						"SET_TITLE" => "N",
						"SET_BROWSER_TITLE" => "Y",
						"SET_META_KEYWORDS" => "Y",
						"SET_META_DESCRIPTION" => "Y",
						"SET_LAST_MODIFIED" => "N",
						"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
						"ADD_SECTIONS_CHAIN" => "N",
						"HIDE_LINK_WHEN_NO_DETAIL" => "N",
						"PARENT_SECTION" => $arResult["IBLOCK_SECTION_ID"],
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
						"MESSAGE_404" => "",
					],
					false
				); ?>
			</div>

			<div class="event__sidebar sidebar">
				<div class="event-slider">
					<button
						class="icon icon-arrow icon-arrow--left slider-arrow"
					></button>

					<div class="swiper">
						<div class="swiper-wrapper">
							<? foreach ($arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_IMAGES"]["FILE_VALUE"] as $img) : ?>
							<div class="swiper-slide">
								<img src="<?= $img["SRC"] ?>" alt="" />
							</div>
							<? endforeach; ?>
						</div>
						<div class="swiper-pagination"></div>
					</div>
					<button
						class="icon icon-arrow icon-arrow--right slider-arrow"
					></button>
				</div>
				<div class="event-related">
					<div class="event-related__title heading heading--4">
						Другие события этого дня
					</div>
					<div class="event-related-list">
						<a href="#" class="event-related-list-item">
							<img
								src="./images/card.jpg"
								alt="85 лет назад (1938) родилась Утяганова Асия Лутфурахмановна"
								class="event-related-list-item__image"
							/>
							<div class="event-related-list-item__title">
								85 лет назад (1938) родилась Утяганова Асия Лутфурахмановна
							</div>
						</a>
						<a href="#" class="event-related-list-item">
							<img
								src="./images/card.jpg"
								alt="85 лет назад (1938) родилась Утяганова Асия Лутфурахмановна"
								class="event-related-list-item__image"
							/>
							<div class="event-related-list-item__title">
								85 лет назад (1938) родилась Утяганова Асия Лутфурахмановна
							</div>
						</a>
						<a href="#" class="event-related-list-item">
							<img
								src="./images/card.jpg"
								alt="85 лет назад (1938) родилась Утяганова Асия Лутфурахмановна"
								class="event-related-list-item__image"
							/>
							<div class="event-related-list-item__title">
								85 лет назад (1938) родилась Утяганова Асия Лутфурахмановна
							</div>
						</a>
					</div>
				</div>

				<div class="tags">
					<div class="tags__title heading heading--4">Теги:</div>
					<div class="tags-list">
						<? foreach ($arResult["DISPLAY_PROPERTIES"]["TAGS"]["VALUE"] as $tag) : ?>
							<a href="/tag?q=<?=$tag?>" class="tags-list__item"> #<?= $tag ?> </a>
						<? endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>