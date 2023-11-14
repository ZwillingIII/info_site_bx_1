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

<main class="main" style="background-image: url('./images/main-bg.jpg')">
      <div class="month-list-slider">
        <div class="month-list-slider__thumbs">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="month-list-slider__header">
                  <button
                    class="icon icon-arrow icon-arrow--left slider-arrow"
                  ></button>
                  <div class="month-list-slider__title">
                    <div class="swiper">
                      <div class="swiper-wrapper">
												<? foreach ($arResult["ITEMS"] as $item) : ?>
													<? if (!empty($item["SUB"])) : ?>
														<? foreach ($item["SUB"] as $sub) : ?>
															<? if (!empty($sub["ITEMS"])) : ?>
																<div class="swiper-slide"><?= $sub["NAME"] ?></div>
															<? endif; ?>
														<? endforeach; ?>
													<? endif; ?>
												<? endforeach; ?>
                        <!-- <div class="swiper-slide">Ноябрь 2023</div> -->
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

        <div class="month-list-slider__main">
          <div class="swiper">
            <div class="swiper-wrapper">
							<? foreach ($arResult["ITEMS"] as $item) : ?>
								<? if (!empty($item["SUB"])) : ?>
									<? foreach ($item["SUB"] as $sub) : ?>
										<? if (!empty($sub["ITEMS"])) : ?>
											<div class="swiper-slide">
												<div class="container">
													<div class="cards-list">

														<? foreach ($sub["ITEMS"] as $new) : ?>
														<a href="<?= $new["DETAIL_PAGE_URL"] ?>" class="card">
															<div class="card__image card-image">
																<img
																	loading="lazy"
																	src="<?= $new["PREVIEW_PICTURE"]["SRC"] ?>"
																	alt="Визит Патриарха Кирилла"
																/>
																<div class="card-badge">
																	<span class="card-badge__month"><?= $new["FORMAT_DATE"]["MONTH"] ?></span>
																	<span class="card-badge__num"><?= $new["FORMAT_DATE"]["DAY"] ?></span>
																</div>
															</div>

															<div class="card__body">
																<div class="card__title heading heading--4">
																	<?= $new["NAME"] ?>
																</div>

																<div class="card-announce">
																	<span><?= $new["PREVIEW_TEXT"] ?></span
																	>
																</div>
															</div>
														</a>
														<? endforeach; ?>

													</div>
												</div>
											</div>
										<? endif; ?>
									<? endforeach; ?>
								<? endif; ?>
							<? endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </main>
