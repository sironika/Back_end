<?php
$a = rand(0, 100);
$b = rand(0, 5);
echo "A=$a<br>B=$b<br>";
$operator = '%';
switch ($operator) {
    case '+':
        $sum = $a + $b;
        echo "Сума: A + B = $sum";
        break;
    case '-':
        $sub = $a - $b;
        echo "Різниця: A - B = $sub";
        break;
    case '/':
        if($b == 0){
            echo "На нуль не ділиться";
        }else{
            $div = $a / $b;
            echo "Ділення: A / B = $div";
        }
        break;
    case '*':
        $mul = $a * $b;
        echo "Добуток: A * B = $mul";
        break;
    case '%':
        if($b == 0){
            echo "На нуль не ділиться";
            }else {
            $res = $a % $b;
            echo "Остаток від ділення: A % B = $res";
        }
        break;
    }
?>



