    <?php
    $str = "<table border='1' cellpadding='10'>";
    for ($a = 1; $a < 10; $a++) {
        $str .= "<tr>";
        for ($b = 1; $b < 10; $b++) {
            $str .= "<td>".$a."x".$b."=".($a * $b)."</td>";
        }
        $str .= "</tr>";
    }
    $str .= "</table>";
    echo $str;