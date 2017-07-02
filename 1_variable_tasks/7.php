<?php
$age = rand(0,90);
echo "Ваш вік $age<br>";
if ($age > 59) {
    $massage = "Вам давно пора на пенсію((";
}elseif ($age < 18) {
    $massage = "Вам ще зарано працювати, вчіться))";
}else {
    $massage = "Вам ще працювати і працювати!!";
}
echo $massage;
?>