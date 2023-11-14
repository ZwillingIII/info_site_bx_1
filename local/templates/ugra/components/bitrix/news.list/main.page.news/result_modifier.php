<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

foreach ($arResult["ITEMS"] as &$item) {
  $item["FORMAT_DATE"] = getRusDate($item["DATE_CREATE"]);
  $item["FORMAT_DATE"]["MONTH"] = lcfirst(mb_substr($item["FORMAT_DATE"]["MONTH"], 0, 3));
}

// print_r($arResult["ITEMS"]);

?>