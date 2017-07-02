<?php
$age = rand(1,99);
echo "Ваш вік $age<br>";
if ($age >= 18 && $age < 60) {
    $massage = "Вам ще працювати і працювати..";
}else if($age > 59){
    $massage = "Вам давно пора на пенсію..";
}
?>