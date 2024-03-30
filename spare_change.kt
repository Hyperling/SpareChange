/*
// 2024-03-30 Hyperling
// Creating a Kotlin version which needs compiled then run.
*/

fun main() {
	var pennies:  Int
	var nickels:  Int
	var dimes:    Int
	var quarters: Int
	var maxPennies:  Int = 0
	var maxNickels:  Int = 0
	var maxDimes:    Int = 0
	var maxQuarters: Int = 0

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

}
