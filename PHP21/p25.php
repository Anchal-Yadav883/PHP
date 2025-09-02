<?php
// Indexed array
$numbers = array(45, 12, 89, 33, 67, 5, 99, 23);

// Built-in function se find karna
$largest = max($numbers);
$smallest = min($numbers);

echo "Array elements are: ";
foreach ($numbers as $num) {
    echo $num . " ";
}

echo "<br>Largest number in array = " . $largest;
echo "<br>Smallest number in array = " . $smallest;
?>