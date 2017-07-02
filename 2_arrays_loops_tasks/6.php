<?php
$arr = ['green' => 'зелений', 'red' => 'червоний', 'blue' => 'синій'];
$en = [];
$ru = [];
foreach ($arr as $key => $value) {
    $en[] = $key;
    $ru[] = $value;
}
print_r($en);
echo "<br>";
print_r($ru);