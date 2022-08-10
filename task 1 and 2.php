<!DOCTYPE html>
<html lang="en">
<body>
<?php
//-------------task 1-----------------

//generate random number from 1 to 10
$ourRandomNumber = rand(1, 10);

//echo just for showing our rand number in browser, so we can check if everything is correct
echo $ourRandomNumber . '<br>';

function buildStringWithRandNumber($number, $symbol1, $symbol2) {
	//again echo just for visualisation in browser
	echo str_repeat($symbol1, $number) . str_repeat($symbol2, $number);
}

//done!
buildStringWithRandNumber($ourRandomNumber, '<', '>');

//-------------task 2-----------------

$deliveryMethodsArray = array(
	['code' => 'dhl', 'customer_costs' => [22 => '1.000', 11 => '3.000',]],
	['code' => 'fedex', 'customer_costs' => [22 => '4.000', 11 => '6.000',]]
);

function sortOurArray($array) {

	$sorted = [];

	foreach ($array as $val) {
		foreach ($val['customer_costs'] as $key => $value) { $sorted[$key][$val['code']] = $value; }
	}

	return $sorted;
}

$result = sortOurArray($deliveryMethodsArray);


var_dump($result);

?>
</body>
</html>