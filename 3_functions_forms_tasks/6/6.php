<?php
include ('6.html');

$dir = "gallery/";
if (isset($_FILES['images'])) {
    if (is_dir($dir)) {
        move_uploaded_file($_FILES['images']['tmp_name'], $dir . '/' . $_FILES['images']['name']);
    }
    print_r(tableImage($dir));
    die();
}

function tableImage($dir)
{
    $arrImg = [];
    if (is_dir($dir) && $list = opendir($dir)) {
        while (($file = readdir($list)) != false) {
            $type = mime_content_type($dir . $file);
            if ($type == 'image/jpeg' || $type == 'image/png' || $type == 'image/gif')
                $arrImg[] = $dir . $file;
        }
    }
        $html = "<table border='1' cellpadding='10'></table>";
        $html .= "<tbody>";
        $html .="<tr>";
        foreach ($arrImg as $value) {
            $html .= '<td><img src="'. $value .'"></td>';
        }
        $html .= "</tr>";
        $html .= "</tbody></table>";
        return $html;
}