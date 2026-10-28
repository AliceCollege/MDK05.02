<h1>Ассоциативные массивы</h1>
<h2>Создание массива</h2>
<?php
$numbers = ['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5];
?>
<h2>Вывод массива</h2>
<?php
foreach ($numbers as $number) {
    echo $number, ', ';
}
?>
<h2>Обращение к элементу</h2>
<?php
echo $numbers['two'];
?>
<h2>Изменение элемента массива</h2>
<?php
$numbers['two'] = 3;
echo $numbers['two'];
?>
<h2>Добавления элемента(создание)</h2>
<?php
$numbers['seven'] = 7;
$numbers[] = 8; #его индекс становится 0, ведь до этого у элемента массива были словесные ключи, а не индексы
$numbers[6] = 6;
$numbers[] = 22; #у него соответсвенно индекс 1
foreach ($numbers as $number) {
    echo $number, ', ';
}
?>
<h2>Вывод вместе с ключами</h2>
<?php
foreach ($numbers as $key => $value){
    echo "$key - $value <br>";
}
?>
<h2>Строка</h2>
<?php
$str ='qwerty';
echo $str[3], '<br>';
$str[3] = 'w';
$len = strlen($str); #только для английского алфавита
echo "Длина строки $str - $len символов";
$str ='привет';
echo $str[3], '<br>';
$str[3] = 'w';
$len = strlen($str);
echo "Длина строки $str - $len символов";
?>