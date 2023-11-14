<?

/**
 * Получение даты на русском в виде массива
 *
 * @param string $date Дата
 * @return array
 */
function getRusDate(string $date) {
  $month = [
    'январь',
    'февраль',
    'март',
    'апрель',
    'май',
    'июнь',
    'июль',
    'август',
    'сентябрь',
    'октябрь',
    'ноябрь',
    'декабрь'
  ];

  $create_date_timestump = strtotime($date);
  $create_date = date("d:m:Y", $create_date_timestump);
  $exploade_date = explode(':', $create_date);
  $month_rus = $month[$exploade_date[1]-1];

  return [
    "DAY" => $exploade_date[0],
    "MONTH" => $month_rus,
    "YEAR" => $exploade_date[2]
  ];
}

function getRusDateDetail(string $date) {
  $month = [
    'января',
    'февраля',
    'марта',
    'апреля',
    'мая',
    'июня',
    'июля',
    'августа',
    'сентября',
    'октября',
    'ноября',
    'декабря'
  ];

  $create_date_timestump = strtotime($date);
  $create_date = date("d:m:Y", $create_date_timestump);
  $exploade_date = explode(':', $create_date);
  $month_rus = $month[$exploade_date[1]-1];

  return [
    "DAY" => $exploade_date[0],
    "MONTH" => $month_rus,
    "YEAR" => $exploade_date[2]
  ];
}

?>