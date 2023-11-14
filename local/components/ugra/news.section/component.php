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

// if ($this->StartResultCache()) {
  $ar_sections = [];
  $new_ar_section = [];

  $obj_section = \CIBlockSection::GetList(
    [
      "name" => "asc"
    ],
    [
      "ACTIVE" => 'Y',
      "IBLOCK_ID" => 1,
    ],
    false,
    [
      "ID",
      "CODE",
      "NAME",
      "ACTIVE",
      "IBLOCK_SECTION_ID"
    ]
  );

  while ($get_sect = $obj_section->fetch()) {
    $ar_sections[] = $get_sect;
  }

  foreach ($ar_sections as $key => $section) {
    if (!empty($section["IBLOCK_SECTION_ID"])) {
      foreach ($ar_sections as &$sect) {
        if ($section["IBLOCK_SECTION_ID"] == $sect["ID"]) {
          $sect["SUB"][] = $section;
        }
      }
      unset($ar_sections[$key]);
    }
  }

  $arResult["ITEMS"] = $ar_sections;
// }

$this->includeComponentTemplate();

?>