<?php
$fruits = [
    "Apple" => 120,
    "Banana" => 30,
    "Mango" => 150,
    "Orange" => 80,
    "Grapes" => 90
];

echo "Sort by values (asort):\n";
asort($fruits);
foreach ($fruits as $f => $p) echo "$f => $p\n";

echo "\nSort by keys (ksort):\n";
ksort($fruits);
foreach ($fruits as $f => $p) echo "$f => $p\n";
?>