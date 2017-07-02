<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$count = 0;
foreach ($arr as $item) {
    if($count < 3){
        echo $item." ";
        $count++;
    }else{
        $count = 1;
        echo "<br>".$item." ";
    }
}