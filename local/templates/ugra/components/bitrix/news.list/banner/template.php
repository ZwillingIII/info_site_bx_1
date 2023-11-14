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
// print_r($item);
?>

<div class="card-inline">
	<div class="card-image card-inline__image">
		<img
			loading="lazy"
			src="<?= SITE_TEMPLATE_PATH."/img/card.jpg" ?>"
			alt="Визит Патриарха Кирилла"
		/>
		<div class="card-badge card-badge--primary">
			<span class="card-badge__mounth">Сен</span>
			<span class="card-badge__num">18</span>
		</div>
	</div>
	<div class="card-inline__body">
		<div class="card-inline__tag">Юбилей</div>
		<div class="card-inline__title heading heading--3">
			Визит Патриарха Кирилла
		</div>
		<div class="card-announce card-inline__announce">
			10 лет назад (2013) в Ханты-Мансийский автономный округ – Югра
			с первым первосвятительским визитом прибыл Святейший Патриарх
			Московский и всея Руси Кирилл.
		</div>
		<a class="btn icon icon-arrow icon-arrow--right">
			Читать далее
		</a>
	</div>
</div>
