<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

foreach ($arResult["ITEMS"] as &$item) {
  $item["FORMAT_DATE"] = getRusDateDetail($item["DATE_CREATE"]);
}

?>