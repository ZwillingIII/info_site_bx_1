<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
                  <? foreach ($arResult["ITEMS"] as $item) : ?>
                    <? if (!empty($item["SUB"])) : ?>
                      <div class="swiper-slide"><?= $item["NAME"] ?></div>
                    <? endif; ?>
                  <? endforeach; ?>
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
        <? foreach ($arResult["ITEMS"] as $item) : ?>
          <? if (!empty($item["SUB"])) : ?>
            <div class="swiper-slide">
              <div class="sections-list-slider__container">
                <div class="container">
                  <div class="row">
                    <? foreach ($item["SUB"] as $sub) : ?>
                      <div class="col-md-3">
                        <a href="/news/" class="sections-list-item"> <?= $sub["NAME"] ?> </a>
                      </div>
                    <? endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
          <? endif; ?>
        <? endforeach; ?>
      </div>
    </div>
  </div>
</div>