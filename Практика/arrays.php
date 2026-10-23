<h1>Массивы</h1>
<h2>Создание пустого массива</h2>
<?php
$numbers = [];
?>
<h2>Создание массива</h2>
<?php
$numbers = [12, 5, 422, 7, 2];
?>
<h2>Вывод массива на экран</h2>
<?php
var_dump($numbers); #только для отладки (проверки кода)
?>
<h2>Перебор массива</h2>
<?php
for ($i = 0; $i < count($numbers); $i++){
    echo $numbers[$i], ' ';
}
?>
<h2>Элементы массива</h2>
<?php
    echo $numbers[0]; #первый элемент
    $numbers[2] = '$$$';
    echo $numbers[2];
?>
<h2>Добавление эдемента</h2>
<?php
$numbers[] = 777;
var_dump($numbers);
?>
<h2>Цикл foreach</h2>
<?php
foreach ($numbers as $number){
    echo $number, ' ';
}
?>
<h2>Цикл foreach с индексами</h2>
<?php
foreach ($numbers as $key => $value){
    echo "$key - $value <br>";
}
?>
<h2>Поиск максимума</h2>
<?php
$max = $numbers[0];
foreach ($numbers as $key => $value){
    if($value > $max) {
        $max = $value;
    }
}
echo "Максимум - $max";
?>