<?php
$students = [
    "Anu" => 78,
    "Ravi" => 85,
    "Sneha" => 92,
    "Amit" => 66
];

// Update Sneha's marks
$students["Sneha"] = 95;

echo "Students and marks after update:\n";
foreach ($students as $name => $marks) {
    echo "$name : $marks\n";
}
?>