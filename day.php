<?php
$year = (isset($_GET['year'])) ? $_GET['year'] : false;
$month = (isset($_GET['month'])) ? $_GET['month'] : false;
$days = 0;
$is_leap = (($year % 4) == 0) ? true : false;

switch ($month) {
	case 'jan':
	case 'mar':
	case 'may':
	case 'jul':
	case 'aug':
	case 'oct':
	case 'dec':
		$days = 31;
		break;
	case 'feb':
		if($is_leap)
			$days = 29;
		else
			$days = 28;
		break;
	default:
		$days = 30;
		break;
}


// if (in_array($month, array('jan', 'mar', 'may','jul','oct','dec'))) {
// 	$days = 31;
// } elseif (in_array($month, array('apr', 'jun', 'aug', 'sep', 'nov'))) {
// 	$days = 30;
// } elseif ($month == 'feb') {
// 	$days = 28;
// }else {
// 	$days = false;
// }


echo json_encode(
	array(
		'year' => $year,
		'month' => $month,
		'result' => 'success',
		'days'	=> $days)
	);

