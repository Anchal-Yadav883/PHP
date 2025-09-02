<?php
$student_marks = [
    "Anu" => 78,
    "Ravi" => 85,
    "Sneha" => 95
];

$key = "Ravi";
if (array_key_exists($key, $student_marks)) {
    echo "Key '$key' exists with value " . $student_marks[$key] . "\n";
} else {
    echo "Key '$key' does not exist.\n";
}
?>