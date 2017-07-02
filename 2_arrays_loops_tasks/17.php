<?php
$arr = [
    'січень',
    'лютий',
    'березень',
    'квітень',
    'травень',
    'червень',
    'липень',
    'серпень',
    'вересень',
    'жовтень',
    'листопад',
    'грудень'
];
$month = 'липень';
$str = "<table border='1' cellpadding='10'><tr>";
foreach ($arr as $item) {
    if($month == $item){
        $str .= "<td><b>".$item."</b></td>";
    }else{
        $str .= "<td>".$item."</td>";
    }
}
$str .= "</tr></table>";
echo $str;