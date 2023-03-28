<?php

// Function to check if the number is a prime number
function primecheck($number)
{
    // Determine if the value entered is a prime number
    // If it is equal to 1,2 or 3 - it is a prime number
    if (($number == 1) || ($number == 2) || ($number == 3)) {
        $true_false = true;
    } else if ((($number + 1) % 6) == 0) {
        // If the number + 1 is modulus 6 - it is a prime number
        $true_false = true;
    } else if ((($number - 1) % 6) == 0) {
        // If the number + 1 is modulus 6 - it is a prime number
        $true_false = true;
    } else {
        // If non of the above conditions are met - it is Not a prime number
        $true_false = false;
    }

    return $true_false;
}

echo "<h2>Test for number entered: </h2>";
// Based on user input, use function to check if true or false prime number and give output message
if (primecheck($_GET['number']) === true) {
    // Print out that it is a prime number
    echo "<p>The number " . $_GET['number'] . " is a prime number.</p>";
} else {
    // If false - Print out that it is Not a prime number
    echo "<p>The number " . $_GET['number'] . " is NOT a prime number.</p>";
}

// Create an Unordered List (UL) with the first 10 prime numbers
echo "<h2> Unordered list of the first 10 prime numbers: </h2>";
echo "<ul>";
// Declare variables
$start_number = 0;
$i = 0;

// Use a while loop and call the function created to determine first 10
while ($i < 10) {
    if (primecheck($start_number) === true) {
        // Print out that it is a prime number
        echo "<li>" . $start_number . "</li>";
        $i++;
    }
    $start_number++;
}
echo "</ul>";

?>