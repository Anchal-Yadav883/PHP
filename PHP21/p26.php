<?php
$arr=[2,4,6,8,10];
//without array_reverse
echo "Reverse (manual):\n";
for($i=count($arr)-1; $i>=0; $i--){
echo $arr[$i] ." ";
}
echo "\n";
?>





<?php
$arr=[3,6,9,12,15];
$rev=array_reverse($arr);
echo "Reverse (array_reverse):\n";
foreach($rev as $v){
    echo $v . " ";
}

echo"\n";
?>