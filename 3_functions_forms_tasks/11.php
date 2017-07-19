<?php
header('Content-Type: text/html; Charset=Utf-8');

function firstUppercase($text)
{
    $arr = explode(". ",$text);
    $count = count($arr);
    for ($i = 0; $i < $count; $i++) {
        $arr[$i] = mb_strtoupper(mb_substr($arr[$i],0,1)).mb_substr($arr[$i],1,strlen($arr[$i]));
 }
    $text = implode(". ", $arr);
    return $text;
}
$a= 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался. а там хоть трава не расти.';
//echo $a."<br>";

echo firstUppercase($a);