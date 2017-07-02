<?php
$arr = [];
$min = 100;
$max = 0;
$i = 0;
$itemMax = 0;
$itemMin = 0;
while($i < 10){
    $arr[$i] = rand(0, 100);
    $i++;
}
print_r($arr);
$i = 0;
while ($i < 10) {
    if($min > $arr[$i]){
        $min = $arr[$i];
        $itemMin = $i;
    }
    if($max < $arr[$i]){
        $max = $arr[$i];
        $itemMax = $i;
    }
    $i++;
}
echo "<br>";
echo "max = ".$max." min = ".$min."<br>";
$temp = $arr[$itemMin];
$arr[$itemMin] = $arr[$itemMax];
$arr[$itemMax] = $temp;
print_r($arr);