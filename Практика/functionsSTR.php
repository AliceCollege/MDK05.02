<h1>Функции</h1>
<a target="_blank" href="https://www.php.net/manual/ru/ref.strings.php" class="номер">Сайт для Функций Строк <br> </a>
<a target="_blank" href="https://www.php.net/" class="номер">Сайт для Всех Функций </a>
<h2>Получение длины - strlen и для русского алфавита mb_strlen</h2>
<?php
$str = 'Hello, world';
$strR = 'Привет, мир';
echo "Длина $strR - " . mb_strlen($strR) . 'символов <br>' . "Длина $str - " . strlen($str) . 'символов';
?>
<h2>Поиск подстроки - strpos и mb_strpos</h2>
<?php
$pos = strpos($str, 'world');
echo "Позиция 'world' - $pos", '<br>';
$pos = mb_strpos($strR, 'мир');
echo "Позиция 'мир' - $pos", '<br>';
?>
<h2>Изменение регистра - strtolower</h2>
<?php
$str = "Hello";
$str = strtolower($str);
echo $str; 
?>
<h2>Перевод строки в массив - explode</h2>
<?php
$str = 'Работа со строками';
$words = explode(' ', $str);
var_dump($words);
?>
<h2>Перевод массив в строку - implode</h2>
<?php
$str2 = implode(', ', $words);
echo $str2;
?>