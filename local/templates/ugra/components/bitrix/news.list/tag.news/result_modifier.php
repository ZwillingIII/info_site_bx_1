<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

foreach ($arResult["ITEMS"] as $key => $item) {
  if (!empty($item["PROPERTIES"]["TAGS"])) {
    if (!in_array($arParams["SEARCH_TAG"], $item["PROPERTIES"]["TAGS"]["VALUE"])) {
      unset($arResult["ITEMS"][$key]);
    }
  } else {
    unset($arResult["ITEMS"][$key]);
  }
}

foreach ($arResult["ITEMS"] as &$item) {
  $item["FORMAT_DATE"] = getRusDate($item["DATE_CREATE"]);
  $item["FORMAT_DATE"]["MONTH"] = ucfirst(mb_substr($item["FORMAT_DATE"]["MONTH"], 0, 3));
}

?>