#!/usr/bin/php
<?php
/* 2024-03-24 Hyperling
// Calculate the optimal amount of spare change to keep
// at any one time which can make any cent value.
*/

echo "Got any spare change?\n";

$pennies = 0; $nickels = 0; $dimes = 0; $quarters = 0;
$maxpennies = 0; $maxnickels = 0; $maxdimes = 0; $maxquarters = 0;

for ($change = 1; $change < 100; $change++) {
	$quarters = floor($change / 25);
	$remainder = $change % 25;

	$dimes = floor($remainder / 10);
	$remainder = $remainder % 10;

	$nickels = floor($remainder / 5);
	$remainder = $remainder % 5;

	$pennies = $remainder;

	if ($quarters > $maxquarters) {
		$maxquarters = $quarters;
		echo "Change '{$change}c' required adding another quarter, now need '$maxquarters'.\n";
	}
	if ($dimes > $maxdimes) {
		$maxdimes = $dimes;
		echo "Change '{$change}c' required adding another dime, now need '$maxdimes'.\n";
	}
	if ($nickels > $maxnickels) {
		$maxnickels = $nickels;
		echo "Change '{$change}c' required adding another nickel, now need '$maxnickels'.\n";
	}
	if ($pennies > $maxpennies) {
		$maxpennies = $pennies;
		echo "Change '{$change}c' required adding another penny, now need '$maxpennies'.\n";
	}
}

echo "You can pay any cent value with exact change if you have $maxquarters quarter(s), $maxdimes dime(s), $maxnickels nickel(s), and $maxpennies penn(y,ies).\n";

$quarters = $maxquarters * 25;
$dimes = $maxdimes * 10;
$nickels = $maxnickels * 5;
$pennies = $maxpennies;

$change = $quarters + $dimes + $nickels + $pennies;

echo "That means you only ever need to carry {$change}c unless going to multiple locations on foot.\n";

exit(0);
