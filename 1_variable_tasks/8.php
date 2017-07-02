<?php
$age = 'test';
//echo "Ваш вік $age<br>";
    if ($age > 59) {
    $massage = "Вам давно пора на пенсію((";
    }elseif ($age < 18 && $age > 0 ) {
    $massage = "Вам ще зарано працювати, вчіться))";
    }elseif ($age > 17 && $age < 60){
    $massage = "Вам ще працювати і працювати!!";
    }elseif (!is_numeric($age) || $age <= 0) {
    $massage = "Не коректний вік";
    }
echo "$massage"
?>