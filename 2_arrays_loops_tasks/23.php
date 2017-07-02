<?php
$number=124;
$a=0;
$sum=0;
while($number!=0){
    $a=$number%10;
    $sum+=$a;
    $number=($number-$a)/10;
}
echo $sum;