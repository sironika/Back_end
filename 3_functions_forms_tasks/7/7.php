<?php
header('Content-Type: text/html; charset=utf-8');
include ('7.html');

if (!empty($_POST['user']) && !empty($_POST['comment'])) {
    $comment = [
        'user' => $_POST['user'],
        'comment' => $_POST['comment'],
        'time' => time()
    ];
    $comments = [];
    if (file_exists('comments.json')) {
        $json = file_get_contents('comments.json');
        $json = json_decode($json, true);
        $comments = $json;
    }
    $comments[] = $comment;
    file_put_contents('comments.json', json_encode($comments));
    print_r(dataTable($comments));
}
function dataTable($array) {
   $index = array_keys($array[0]);
   $html = "<table border='1' cellpadding='10'><thead>";
   foreach ($index as $item) {
       $html .="<th>" . ucfirst($item) . "</th>";
   }
    $html .= "</thead><tbody>";
    foreach ($array as $item) {
        $html .= "<tr>";
        foreach ($index as $value) {
           if ($value == 'time') $item[$value] = date('Y/m/d H:i:s', $item[$value]);
           $html .= "<td>" . $item[$value] . "</td>";
       }
       $html .= "</tr>";
   }
   $html .= "</tbody></table>";
   return $html;
}