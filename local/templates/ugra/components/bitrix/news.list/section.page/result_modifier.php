<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

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
    "IBLOCK_SECTION_ID",
    "UF_DETAIL_NAME"
  ]
);

while ($get_sect = $obj_section->fetch()) {
  $ar_sections[] = $get_sect;
}

foreach ($ar_sections as $key => $section) {
  if (!empty($section["IBLOCK_SECTION_ID"])) {
    foreach ($ar_sections as &$sect) {
      if ($section["IBLOCK_SECTION_ID"] == $sect["ID"]) {
        $section["NAME"] = $section["NAME"].' '.trim(preg_replace("/[^0-9]/", '', $sect["NAME"]));
        $sect["SUB"][] = $section;
      }
    }
    unset($ar_sections[$key]);
  }
}

foreach ($ar_sections as &$section) {
  if (!empty($section["SUB"])) {
    foreach ($section["SUB"] as &$sub) {
      foreach ($arResult["ITEMS"] as $item) {
        if ($sub["ID"] == $item["IBLOCK_SECTION_ID"]) {
          $item["FORMAT_DATE"] = getRusDate($item["DATE_CREATE"]);
          $item["FORMAT_DATE"]["MONTH"] = strtoupper(mb_substr($item["FORMAT_DATE"]["MONTH"], 0, 3));
          $sub["ITEMS"][] = $item;
        }
      }
    }
  }
}

$arResult["ITEMS"] = $ar_sections;

?>