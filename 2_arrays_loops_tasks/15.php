<?php
$arr = [4, 2, 5, 19, 13, 0, 10];
$count = 0;
print_r($arr);
foreach ($arr as $item) {
    $count++;
}
echo "<br>Кількість елементів масиву = ".$count;