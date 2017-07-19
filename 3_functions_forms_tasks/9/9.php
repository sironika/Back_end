<?php
include '9.html';
$text = $_POST['text1'];
function invert($data)
{
    $a = '';
    for ($i = strlen($data)-1; $i >=0; $i--) {
        $a .= $data[$i];
    }
    return $a;
}
echo  invert($text);