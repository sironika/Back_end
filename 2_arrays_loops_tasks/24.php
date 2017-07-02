<?php
$number = 442158755745;
$temp = 0;
$count = 0;
$num = 5;
while($number!=0){
    $temp=$number%10;
        if($num == $temp){
        $count++;
    }
    $number=($number-$temp)/10;
}
echo $count;


