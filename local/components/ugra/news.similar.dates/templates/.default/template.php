<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
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

<div class="event-related">
  <div class="event-related__title heading heading--4">
    Другие события этого дня
  </div>
  <div class="event-related-list">

  <? foreach ($arResult["ITEMS"] as $item) : ?>
    <a href="<?= $item["DETAIL_PAGE_URL"] ?>" class="event-related-list-item">
      <img
        src="<?= $item["PREVIEW_PICTURE"] ?>"
        alt="<?= $item["NAME"] ?>"
        class="event-related-list-item__image"
      />
      <div class="event-related-list-item__title">
        <?= $item["NAME"] ?>
      </div>
    </a>
  <? endforeach; ?>
    
  </div>
</div>