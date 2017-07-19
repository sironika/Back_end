<?php
header('Content-Type: text/html; charset=Utf-8');

$html = '<form action="3.php" method="post">
    <div>
        <label for="N">Length word:</label>
        <input type="text" name="number" id="N" placeholder="Value N">
    </div><br>
    <input type="submit" name="submit">
</form>';

echo $html;

$length = $_POST['number'];
$file = file_get_contents('3.1.txt');
$arr = (explode(' ', $file));

for ($i = 0; $i < count($arr); $i++) {
    if (mb_strlen($arr[$i],'utf-8') > $length) {
        unset($arr[$i]);
    }
}

file_put_contents('3.2.txt', implode(' ', $arr));