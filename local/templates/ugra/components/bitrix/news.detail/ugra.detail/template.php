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
				<div class="event-related">
					<div class="event-related__title heading heading--4">
						Связанные новости и события
					</div>
					<div class="event-related-list">
						<a
							href="#"
							class="event-related-list-item event-related-list-item--col"
						>
							<div class="event-related-list-item__date">
								1 сентября 1978 года
							</div>
							<div class="event-related-list-item__title">
								45 лет назад (1978) в рабочем поселке Нях (ныне город
								Нягань) установлен памятник Владимиру Ильичу Ленину.
							</div>
						</a>
						<a
							href="#"
							class="event-related-list-item event-related-list-item--col"
						>
							<div class="event-related-list-item__date">
								1 сентября 1978 года
							</div>
							<div class="event-related-list-item__title">
								45 лет назад (1978) в поселке Сорум Березовского района на
								основании решения исполнительного комитета Березовского
								районного Совета депутатов трудящихся от 12.09.1978 № 210
								открыта начальная школа, ныне муниципальное автономное
								общеобразовательное учреждение Белоярского района «Средняя
								общеобразовательная школа п. Сорум»
							</div>
						</a>
					</div>
				</div>
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