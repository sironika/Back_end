<?php
$arr = [
    'понеділок',
    'вівторок',
    'середа',
    'четвер',
    'п`ятниця',
    'субота',
    'неділя'
];
$saturday = "субота";
$sunday = "неділя";
$str = "<table border='1' cellpadding='10'><tr>";
foreach ($arr as $item) {
    if(($saturday == $item) || ($sunday == $item)){
        $str .= "<td><b>".$item."</b></td>";
    }else{
        $str .= "<td>".$item."</td>";
    }
}
$str .= "</tr></table>";
echo $str;