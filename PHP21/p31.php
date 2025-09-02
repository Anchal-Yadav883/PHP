<?php
$countries = [
    "India" => "New Delhi",
    "USA" => "Washington, D.C.",
    "UK" => "London"
];

// Add Germany
$countries["Germany"] = "Berlin";

foreach ($countries as $k => $v) {
    echo "$k => $v\n";
}
?>