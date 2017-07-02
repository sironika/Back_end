<?php
$arr = [];
$i = 0;
$pr = 1;
while ($i < 10) {
    $arr[$i] = rand(1, 100);
    $i++;
}
print_r($arr);
echo "<br>";
$i = 0;
while ($i < 10) {
    if(($i % 2 == 0) && ($arr[$i] > 0)){
        $pr *= $arr[$i];
    }
    if(($i % 2 !== 0) && ($arr[$i] > 0)){
        echo $arr[$i]."<br>";
    }
    $i++;
}
echo "Добуток всых чисел = ".$pr;