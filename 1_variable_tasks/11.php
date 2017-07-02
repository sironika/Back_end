<?php
$day = rand(1,7);

//echo "$day<br>";
switch ($day){
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        //echo  "$day - робочий день<br>";//
        break;
     case 6:
     case 7:
         echo  "$day - вихідний день<br>";
         break;

}

?>
//Created by Sergey.Kolisnichenko//
