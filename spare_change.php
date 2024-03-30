#!/usr/bin/php
<?php
/* 2024-03-24 Hyperling
// Calculate the optimal amount of spare change to keep
// at any one time which can make any cent value.
*/

echo "Got any spare change?\n";

$pennies = 0; $nickels = 0; $dimes = 0; $quarters = 0;
$maxPennies = 0; $maxNickels = 0; $maxDimes = 0; $maxQuarters = 0;

for ($change = 1; $change < 100; $change++) {
	$quarters = floor($change / 25);
	$remainder = $change % 25;

	$dimes = floor($remainder / 10);
	$remainder = $remainder % 10;

	$nickels = floor($remainder / 5);
	$remainder = $remainder % 5;

	$pennies = $remainder;

	if ($quarters > $maxQuarters) {
		$maxQuarters = $quarters;
		echo "Amount '{$change}c' required adding another quarter, " .
		"now need '$maxQuarters'.\n"
		;
	}
	if ($dimes > $maxDimes) {
		$maxDimes = $dimes;
		echo "Amount '{$change}c' required adding another dime, " .
		"now need '$maxDimes'.\n"
		;
	}
	if ($nickels > $maxNickels) {
		$maxNickels = $nickels;
		echo "Amount '{$change}c' required adding another nickel, " .
		"now need '$maxNickels'.\n"
		;
	}
	if ($pennies > $maxPennies) {
		$maxPennies = $pennies;
		echo "Amount '{$change}c' required adding another penny, " .
			"now need '$maxPennies'.\n"
		;
	}
}

echo "You can pay any cent value with exact change if you have " .
	"$maxQuarters quarter(s), $maxDimes dime(s), " .
	"$maxNickels nickel(s), and $maxPennies penn(y,ies).\n"
;

$quarters = $maxQuarters * 25;
$dimes = $maxDimes * 10;
$nickels = $maxNickels * 5;
$pennies = $maxPennies;

$change = $quarters + $dimes + $nickels + $pennies;

echo "That means you only ever need to carry {$change}c " .
	"unless going to multiple locations in one trip.\n"
;

exit(0);
