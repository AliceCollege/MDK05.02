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
echo "Дана строка $str" . '<br> Слова, которые начинаются и оканчиваются одной и той же буквой: ';
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
function DeleteExcessSpace($str){

}
DeleteExcessSpace("   I   want  go to   home  ");
?>