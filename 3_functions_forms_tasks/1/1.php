<?php
require_once '1.html';

$a = $_POST['text1'];

$b = $_POST['text2'];

if(empty($a) || empty($b)){
    echo "ERROR";
}else{
    $str = getCommonWords($a, $b);
    echo $str;
}

function getCommonWords($a, $b){

    $arr1 = explode(" ", $a);

    $arr2 = explode(" ", $b);

    $rep = [];

    $len1 = count($arr1);

    $len2 = count($arr2);

    for ($i=0; $i < $len1; $i++) {
        for ($j=0; $j < $len2; $j++) {
            if($arr1[$i] == $arr2[$j]){
                $rep[] = $arr1[$i];
            }
        }
    }
    $str = implode(" ", $rep);

    return $str;
}
