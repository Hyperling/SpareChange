/*
// 2024-03-30 Hyperling
// Creating a Kotlin version which can be run via command line.
*/

var pennies = 0
var nickels = 0
var dimes = 0
var quarters = 0
var maxPennies = 0
var maxNickels = 0
var maxDimes = 0
var maxQuarters = 0

println("Got any spare change?")

for (change in 1..99) {
	quarters = change / 25
	var remainder = change % 25

	dimes = remainder / 10
	remainder = remainder % 10

	nickels = remainder / 5
	remainder = remainder % 5

	pennies = remainder / 1

	if (quarters > maxQuarters) {
		maxQuarters = quarters
		println("Change ${change}c required $maxQuarters quarter(s).")
	}

	if (dimes > maxDimes) {
		maxDimes = dimes
		println("Change ${change}c required $maxDimes dime(s).")
	}

	if (nickels > maxNickels) {
		maxNickels = nickels
		println("Change ${change}c required $maxNickels nickel(s).")
	}

	if (pennies > maxPennies) {
		maxPennies = pennies
		println("Change ${change}c required $maxPennies penny(ies).")
	}
}

print("The optimum amount is $maxQuarters quarter(s), $maxDimes dime(s)")
println(", $maxNickels nickel(s), and $maxPennies pennies.")
