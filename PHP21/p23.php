<?php
// Program 23
$array = array(50,10,70,30,90,20,60,80,40,100);

echo "Original Array:<br>";
print_r($array);

// sort()
sort($array);
echo "<br><br>After sort():<br>";
print_r($array);

// rsort()
rsort($array);
echo "<br><br>After rsort():<br>";
print_r($array);

// asort()
$array = array(50,10,70,30,90,20,60,80,40,100);
asort($array);
echo "<br><br>After asort():<br>";
print_r($array);

// arsort()
arsort($array);
echo "<br><br>After arsort():<br>";
print_r($array);

// ksort()
$array = array(50,10,70,30,90,20,60,80,40,100);
ksort($array);
echo "<br><br>After ksort():<br>";
print_r($array);

// krsort()
krsort($array);
echo "<br><br>After krsort():<br>";
print_r($array);
?>