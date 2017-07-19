<?php
//header('Content-Type: text/html; charset=utf-8');
$dir = __DIR__;
$file_name = "5";

function seekFileByName ($dir, $file)
{
    $data = 'You seek files, wich contain: <b>' . $file . '</b><br>';
    if (is_dir($dir) && $open = opendir($dir)){
       while (($write = readdir($open)) != false){
           if (preg_match('/('.$file.')/', $write))
               $data .= 'File:'.$write.'<br>';
        }
    }
    return $data;

}

print_r(seekFileByName($dir,$file_name));
