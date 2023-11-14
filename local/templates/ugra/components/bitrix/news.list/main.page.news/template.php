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
?>

<div class="cards-list-slider">
		<div class="cards-list-slider__container">
			<div class="swiper">
				<div class="swiper-wrapper">

				<? foreach ($arResult["ITEMS"] as $item) : ?>
					<div class="swiper-slide">
						<a href="<?= $item["DETAIL_PAGE_URL"] ?>" class="card">
							<div class="card__image card-image">
								<img
									loading="lazy"
									src="<?= $item["PREVIEW_PICTURE"]["SRC"] ?>"
									alt="<?= $item["NAME"] ?>"
								/>
								<div class="card-badge">
									<span class="card-badge__mounth"><?= $item["FORMAT_DATE"]["MONTH"] ?></span>
									<span class="card-badge__num"><?= $item["FORMAT_DATE"]["DAY"] ?></span>
								</div>
							</div>

							<div class="card__body">
								<div class="card__title heading heading--4">
									<?= $item["NAME"] ?>
								</div>

								<div class="card-announce">
									<span><?= $item["PREVIEW_TEXT"] ?></span>
								</div>
							</div>
						</a>
					</div>
				<? endforeach; ?>

				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="cards-list-slider__more">
						<a href="/" class="btn btn--white icon icon-plus">
							<?= \Bitrix\Main\Localization\Loc::getMessage('MORE') ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
