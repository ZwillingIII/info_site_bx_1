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

<main class="main" style="background-image: url('<?= SITE_TEMPLATE_PATH."/img/main-bg.jpg" ?>')">
	<div class="tag">
		<div class="container">
			<h1 class="tag__title heading heading--2">
				Материалы по тегу #<?= $arParams["SEARCH_TAG"] ?>
			</h1>
			<div class="cards-list cards-list--long">
				
				<? foreach ($arResult["ITEMS"] as $item) : ?>
					<a href="<?= $item["DETAIL_PAGE_URL"] ?>" class="card">
						<div class="card__image card-image">
							<img
								loading="lazy"
								src="<?= $item["PREVIEW_PICTURE"]["SRC"] ?>"
								alt="<?= $item["NAME"] ?>"
							/>
							<div class="card-badge">
								<span class="card-badge__month"><?= $item["FORMAT_DATE"]["MONTH"] ?></span>
								<span class="card-badge__num"><?= $item["FORMAT_DATE"]["DAY"] ?></span>
							</div>
						</div>

						<div class="card__body">
							<div class="card__title heading heading--4">
								<?= $item["NAME"] ?>
							</div>

							<div class="card-announce">
								<span><?= $item["PREVIEW_TEXT"] ?></span
								>
							</div>
						</div>
					</a>
				<? endforeach; ?>
				
				</div>
			</div>
		</div>
	</div>
</main>
