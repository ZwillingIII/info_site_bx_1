<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */

CModule::IncludeModule('iblock');

if ($this->StartResultCache()) {
  $compared_date = date("d:m", strtotime($arParams["COMPARED_DATE"]));
  $counter = 0;

  $elements = [];

  $db_elements = CIBlockElement::GetList(
    [
      "created_date" => "asc"
    ],
    [
      "IBLOCK_ID" => 1,
      "ACTIVE" => 'Y'
    ],
    false,
    false,
    [
      "ID",
      "NAME",
      "DATE_CREATE",
      "PREVIEW_PICTURE",
      "CODE"
    ],
  );

  while ($get_element = $db_elements->fetch()) {
    if (date("d:m", strtotime($get_element["DATE_CREATE"])) == $compared_date) {
      $get_element["DETAIL_PAGE_URL"] = "/new/";
      if (!empty($get_element["CODE"])) {
        $get_element["DETAIL_PAGE_URL"] .= $get_element["CODE"];
      }
      $get_element['PREVIEW_PICTURE'] = CFile::GetPath($get_element['PREVIEW_PICTURE']);
      $elements[] = $get_element;
      $counter++;
    }

    if ($counter == 3) {
      break;
    }
  }

  $arResult["ITEMS"] = $elements;
}

$this->includeComponentTemplate();

?>