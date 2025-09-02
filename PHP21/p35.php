<?php
$countries = [
    "India" => "New Delhi",
    "USA" => "Washington, D.C.",
    "UK" => "London",
    "Germany" => "Berlin",
    "Japan" => "Tokyo"
];

$searchCapital = "Berlin";
$country = array_search($searchCapital, $countries);

if ($country !== false) {
    echo "Capital '$searchCapital' belongs to country: $country\n";
} else {
    echo "Capital '$searchCapital' not found in array.\n";
}
?>