<?php
$num=[34,5,78,12,90,3];
sort($num);  //ascending
echo "Ascending:\n";
foreach ($num as $n) echo $n . " ";
echo "\n";
rsort($num);
echo  "Descending:\n";
foreach ($num as $n) echo $n . " ";
echo "\n";
?>