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
$item = $arResult["ITEMS"][0];
?>

<div class="card-inline">
	<div class="card-image card-inline__image">
		<img
			loading="lazy"
			src="<?= $item["PREVIEW_PICTURE"]["SRC"] ?>"
			alt="<?= $item['NAME'] ?>"
		/>
		<div class="card-badge card-badge--primary">
			<span class="card-badge__mounth"><?= $item["FORMAT_DATE"]["MONTH"] ?></span>
			<span class="card-badge__num"><?= $item["FORMAT_DATE"]["DAY"] ?></span>
		</div>
	</div>
	<div class="card-inline__body">
		<div class="card-inline__tag">Юбилей</div>
		<div class="card-inline__title heading heading--3">
			<?= $item['NAME'] ?>
		</div>
		<div class="card-announce card-inline__announce">
			<?= $item["PREVIEW_TEXT"] ?>
		</div>
		<a href="<?= $item["DETAIL_PAGE_URL"] ?>" class="btn icon icon-arrow icon-arrow--right">
			<?= \Bitrix\Main\Localization\Loc::getMessage('READ_MORE') ?>
		</a>
	</div>
</div>
