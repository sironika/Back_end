<?php
$arr = [4, 2, 5, 19, 13, 0, 10];
$e = rand(2, 4);
$bool = false;
echo $e."<br>";
foreach ($arr as $item) {
    if($item == $e){
        echo "Есть!";
        $bool = true;
        break;
    }
}
if(!$bool){
    echo "Нет!";
}