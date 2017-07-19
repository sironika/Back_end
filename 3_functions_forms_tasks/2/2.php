<?php
require_once '2.html';
$str = $_POST['text'];
if (empty($str)){
    echo "error";
}else{
    $str = lenghtFunc($str);
    echo $str." - TOP-3 слів";
}
//$top - кількість топів
function lenghtFunc($str, $top = 3){
    $arr = explode(" ", $str);
    $strtop3 = [];// масив топ строк
    $max = " ";// топ елемент
    for ($i = 0; $i = $top; $i++){
        foreach ($arr as $key => &$value){
            $count = strlen($value);
            if ($count > strlen($max)){
                $max = $value;
                $top = $key;//топ елемент в ітерації
            }
        }
        $strtop3[] = $max;
        $max = " ";//обнуляємо топ масив
        unset($arr[$top]);//прибираємо топ елемент
    }
    $str = implode(" ",$strtop3);
    return $str;
}