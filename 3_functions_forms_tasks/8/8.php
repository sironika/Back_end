<?php
header('Content-Type: text/html; charset=utf-8');
include ('8.html');

if (!empty($_POST['user']) && !empty($_POST['comment'])) {
    $comment = [
        'user' => $_POST['user'],
        'comment' => $_POST['comment'],
        'time' => time()
    ];
    $comments = [];
    if (file_exists('revised.json')) {
        $json = file_get_contents('revised.json');
        $json = json_decode($json, true);
        $comments = $json;
    }
    $comments[] = $comment;
    file_put_contents('revised.json', json_encode($comments));
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

           if (badWords($item[$value])) $item[$value] = "Погане слово";

           $html .= "<td>" . strip_tags($item[$value], '<b>') . "</td>";
       }
       $html .= "</tr>";
   }
   $html .= "</tbody></table>";
   return $html;
}

function badWords($word)
    {
        $badArray = [
            'риба', "рак", "чукча"
        ];
        foreach ($badArray as $item) {
            if (preg_match('/(' . $item . ')/', $word)) {
                return true;
            }
        }
        return false;
    }
