<?php

header('Content-Type: text/html; charset=utf-8');
include ('10.html');

if (!empty($_POST['text'])) {
    print_r(uniqueCount($_POST['text']));
}


function uniqueCount($word) {
    $arr = explode(' ', $word);

    $arr_temp = [];
    foreach ($arr as $key => $value) {
        $arr_temp[$value] = 0;
    }
    return 'Кількість слів - ' . count($arr_temp);
}



