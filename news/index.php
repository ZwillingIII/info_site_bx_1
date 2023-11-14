<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Новости");
$APPLICATION->SetTitle("Новости");
?>

<? $APPLICATION->IncludeComponent(
  "bitrix:news",
  "ugra.news",
  [
    "IBLOCK_TYPE" => "events",
    "IBLOCK_ID" => 1,
    "NEWS_COUNT" => 1000,
    "SORT_BY1" => "ACTIVE_FROM",
    "SORT_ORDER1" => "ASC",
    "LIST_FIELD_CODE" => [
      0 => "ID",
      1 => "CODE",
      2 => "NAME",
      3 => "PREVIEW_TEXT",
      4 => "PREVIEW_PICTURE",
      5 => "DATE_CREATE",
      6 => "",
    ],
    "SEF_MODE" => 'Y',
    "SEF_URL_TEMPLATES" => [
      "detail" => "#ELEMENT_CODE#/",
			// "news" => "/news/",
    ],
    "URL_TEMPLATES" => [
      "detail" => "#ELEMENT_CODE#/"
    ],
    "SEF_FOLDER" => "/news/",
    "DETAIL_PROPERTY_CODE" => [
      "EVENT_HEADING",
      "ADDITIONAL_IMAGES",
      "TAGS"
    ],
    "DETAIL_FIELD_CODE" => [
      "DATE_CREATE"
    ]
  ],
  false
); ?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>