<?php

require_once __DIR__.'/vendor/autoload.php';

$EUR = new \Matks\BcBreakExample\Currency('EUR');
$USD = new \Matks\BcBreakExample\Currency('USD');

$tenEuros = new \Matks\BcBreakExample\Money(10.0, $EUR);
$twentyEuros = new \Matks\BcBreakExample\Money(20.0, $EUR);
$tenUSDollars = new \Matks\BcBreakExample\Money(10.0, $USD);

$tenOtherEuros = new \Matks\BcBreakExample\Money(10.0, $EUR);

array_map(function($money) use ($tenOtherEuros) {

	if ($money->isEqual($tenOtherEuros)) {
		echo sprintf('%s is equal to %s', $money, $tenOtherEuros).PHP_EOL;
	} else {
		echo sprintf('%s is not equal to %s', $money, $tenOtherEuros).PHP_EOL;
	}

}, [
	$tenEuros,
	$twentyEuros,
	$tenUSDollars
]);