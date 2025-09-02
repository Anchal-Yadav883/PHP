<?php
$arr=[1,2,2,3,4,4,5,1,"A","A"];
$unique =
array_values(array_unique($arr));
echo "After removing duplicate:\n";
foreach($unique as $v) echo $v . " ";
echo"\n";
?>