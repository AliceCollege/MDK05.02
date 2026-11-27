<h1>Практичсекая 5 - Функции строк</h1>
<h2>Задача 1</h2>
<?php
$str = 'Hiiii(world)Beeeeee';
echo 'Входная строка - '. $str . '<br>';
$posStart = strpos($str, '('); /*поиск индекса*/ 
$posLast = strpos($str, ')');
echo substr($str, $posStart, $posLast-$posStart+1); // функция возвращает часть строки (строка, начало, длина)
?>
<h2>Задача 2</h2>
<?php
$str = 'Alisa, hi xexex prikol.';
echo 'Входная строка - '. $str . '<br>';
echo str_word_count($str, 0);    // 0 - Возващает количество слов в строке, 1 - массив, который содержит каждое слово из строки, 2 - ассоциативный массив по строке
?>
<h2>Задача 3</h2>
<?php
$str = 'Alisa kot';
echo 'Входная строка - '. $str . '<br>';
$str1 = '';
$array = str_word_count($str, 1);
foreach ($array as $word){
    $lowerWord = strtolower($word); // изменение на нижний регистр
    $first = $lowerWord[0];
    $last = $lowerWord[strlen($lowerWord) - 1];
    if ($first == $last){
        $str1 .= $word . ' ';
    }
}
echo $str1;
?>
<h2>Задача 4</h2>
<?php
$string = "hello world";
echo 'Входная строка - '. $str . '<br>';
$count = count(array_unique(str_split($string))); //array_unique - удаление повторяющихся элементов, str_split разбивает строку в массив
echo "Количество различных символов - $count";
?>
<h2>Задача 5</h2>
<?php
$str = 'One r, two t';
echo 'Входная строка - '. $str . '<br>';
echo "Символ r встречается в строке - ". substr_count($str, 'r') . " раз" . '<br>';  // поиск определенного символа в строке
echo "Символ k встречается в строке - ". substr_count($str, 'k') . " раз" . '<br>';  // поиск определенного символа в строке
echo "Символ t встречается в строке - ". substr_count($str, 't') . " раз" . '<br>';  // поиск определенного символа в строке
?>
<h2>Задача 6</h2>
<?php
$string = "Long or short";
$words = explode(' ', $string);
$minLen = PHP_INT_MAX;  // Максимально возможное целое число в php
$maxLen = 0;
foreach ($words as $word) {
    $len = strlen($word);
    if ($len < $minLen) {
        $minLen = $len;
    }
    if ($len > $maxLen) {
        $maxLen = $len;
    }
}
echo "Длина самого короткого слова: $minLen <br>";
echo "Длина самого длинного слова: $maxLen <br>";
?>
<h2>Задача 7</h2>
<?php

?>
<h2>Задача 8</h2>
<?php
?>
<h2>Задача 9</h2>
<?php
?>