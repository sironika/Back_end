<?php
$a = 1;
echo "<table border = '1' cellpadding='20'><tr>";
while( $a <= 10 ) {
    $b = 1;
    while( $b <= 10 ) {
        echo "<td>".$a."x".$b."=".($a * $b)."</td>";
        $b++;
    }
    if ($a != 10) echo "</tr><tr>";
    $a++;
}
echo "</tr></table>";