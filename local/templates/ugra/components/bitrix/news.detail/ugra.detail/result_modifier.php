<?  if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$arResult["FORMAT_DATE"] = getRusDateDetail($arResult["DATE_CREATE"]);
// $arResult["ITEMS"][0]["FORMAT_DATE"]["MONTH"] = mb_strtoupper(mb_substr($arResult["ITEMS"][0]["FORMAT_DATE"]["MONTH"], 0, 3));

?>