<?php
$colors = ['red','yellow','blue','gray','maroon','brown','green'];
$row = rand(5,10); //количество строк в таблице
$col = rand(5,10); //количество столбцов в таблице
$table = "<table border='1' cellpadding='20'>";
for ($i = 0; $i < $row; $i++) {
    $table .= "<tr>";
    for ($j = 0; $j < $col; $j++) {
        shuffle($colors);
        $table .= "<td style='background-color:$colors[0]'>".rand(1, 100)."</td>";
    }
    $table .= "</tr>";
}
$table .= "</table>";
echo $table;