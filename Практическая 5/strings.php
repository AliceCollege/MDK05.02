<h2>Задача 1</h2>
<?php
$str ='q(qwerty)q';
echo "Была строка - $str <br> Стала - ";
$len = strlen($str);
$start = 0;
$finish = 0;    
for ($i = 0; $i < $len; $i++){
    if ($str[$i] == "("){
        $start = $i;
    }
    if ($str[$i] == ")"){
        $finish = $i;
    }
}
for ($j = $start+1; $j < $finish; $j++){
    echo $str[$j];
}
?>
<h2>Задача 2</h2>
<?php
$str ='Yellow pink green black purple blue white.';
$len = strlen($str);
$summ = 0;
for ($i = 0; $i < $len; $i++) {
    if ($str[$i] == ' ') {
        $summ += 1;
    }
    if ($str[$i] == '.') {
        $summ += 1; 
        break;
    }
}
echo "В строке '$str' - $summ слов, до точки";
?>
<h2>Задача 3</h2>
<?php
$str = 'alisa murr wow';
echo "Дана строка $str" . '<br> Слова, которые начинаются и оканчиваются одной и той же буквой: <br>';
$str = $str .' ';
$len = strlen($str);
$word = '';
for ($i = 0; $i < $len; $i++) {
    $bukva = $str[$i];
    if ($bukva == ' '){
        if ($word != ''){
            $first = $word[0];
            $last = $word[strlen($word)-1];
            if ($first == $last){
                echo $word . "<br>";
            }
            $word = "";
        }
    } else {
        $word .= $bukva;
    }
}
?>
<h2>Задача 4</h2>
<?php
$str = 'alisa';
echo "Была строка - $str <br>";
$len = strlen($str);
$array = [];
$count = 0;
for ($i = 0; $i < $len; $i++){
    $bukva = $str[$i];
    for ($j = 0; $j < $count; $j++){
        if ($array[$j] == $bukva){
            break;
        }
    }
    if ($j == $count){
        $array[$j] = $bukva;
        $count++;
    }
}
echo "Различных символов: $count - ";
foreach ($array as $buk){
    echo $buk, ' ';
}
?>
<h2>Задача 5</h2>
<?php
$str ='cat cute murr.';
echo "Дана строка - $str <br>";
$len = strlen($str);
$summR = 0;
$summK = 0;
$summT = 0;
for ($i = 0; $i < $len; $i++){
    if ($str[$i] == 'r'){
        $summR += 1; 
    }
    if ($str[$i] == 'k'){
        $summK += 1; 
    }
    if ($str[$i] == 't'){
        $summT += 1; 
    }
}
echo "$summR букв r  <br>";
echo "$summK букв k <br>";
echo "$summT букв t <br>";
?>
<h2>Задача 6</h2>
<?php
echo "Изначально строка выглядила так:'   I   want  go to   home  ' <br> ";
function DeleteExcessSpace($str) {
    $newStr = "";
    $space = 1;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] != " ") {
            $newStr .= $str[$i];
            $space = 0;
        } elseif ($space == 0) {
            $newStr .= " ";
            $space = 1;
        }
    }
    return $newStr;
}
echo DeleteExcessSpace("   I   want  go to   home  ");
?>
<h2>Задача 7</h2>
<?php
$str = 'alisa murr wow';
echo "Дана строка - $str <br>";
$str = $str .' ';
$len = strlen($str);
$max = 1000;
$min = 0;
$word = '';
for ($i = 0; $i < $len; $i++) {
    $bukva = $str[$i];
    if ($bukva == ' '){
        if ($word != ''){
            $P = strlen($word);
            if ($P > $min) {
                $min = $P;
            }
            if ($P < $max) {
                $max = $P;
            }
            $word = "";
        }
    } else {
        $word .= $bukva;
    }
}
echo "Длина самого длинного слова - $min <br>";
echo "Длина самого короткого слова - $max";
?>
<h2>Задача 8</h2>
<?php
$str = 'alisaaa cat maam';
echo "Дана строка - $str <br>";
$len = strlen($str);
$kol = 0;
$max = 0; 
for ($i = 0; $i < $len; $i++) {
    if ($str[$i] == 'a') {
        $kol++;
        if ($kol > $max) {
            $max = $kol;
        }
    } else {
        $kol = 0; 
    }
}
echo "Максимально подряд идущих a - $max <br>";
?>
<h2>Задача 9</h2>
<?php
$str ='q(qwerty)q';
echo "Была строка - $str <br> Стала - ";
$len = strlen($str);
$start = 0;
$finish = 0;    
for ($i = 0; $i < $len; $i++){
    if ($str[$i] == "("){
        $start = $i;
    }
    if ($str[$i] == ")"){
        $finish = $i;
    }
}
$newStr = "";
for ($j = 0; $j < $len; $j++) {
    if ($j < $start || $j > $finish) {
        $newStr .= $str[$j];
    }
}
echo $newStr;
?>