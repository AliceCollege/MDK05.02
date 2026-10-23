<h1>Практическая 4 - Массивы</h1>
<h2>Задача 1</h2>
<?php
$numbers = [2, 11, -4];
$max = $numbers[0];
$min = $numbers[0];
$keyM = 0;
$keym = 0;
echo "Исходный массив: ";
for ($i = 0; $i < count($numbers); $i++){
    echo $numbers[$i], ' ';
}
echo '<br>';
foreach ($numbers as $key => $value){
    if($value > $max) {
        $max = $value;
        $keyM = $key;
    }
}
foreach ($numbers as $key => $value){
    if($value < $max) {
        $min = $value;
        $keym = $key;
    }
}
echo "Максимально число - $max - $keyM, минимальное число - $min - $keym";
?>
<h2>Задача 2</h2>
<?php
$numbers = [2, 11, -4];
$sum = 0;
$proiz = 1;
echo "Исходный массив: ";
for ($i = 0; $i < count($numbers); $i++){
    echo $numbers[$i], ' ';
}
echo '<br>';
foreach ($numbers as $key => $value){
    $sum += $value;
    $proiz *= $value;
}
echo "сумма - $sum, произведение - $proiz";
?>
<h2>Задача 3</h2>
<?php
$numbers = [2, 11, -4];
$sum = 0;
$kol = 0;
echo "Исходный массив: ";
for ($i = 0; $i < count($numbers); $i++){
    echo $numbers[$i], ' ';
}
echo '<br>';
foreach ($numbers as $key => $value){
    $sum += $value;
    $kol += 1;
}
$res = $sum/$kol;
echo "среднее арифметическое чисел - $res";
?>
<h2>Задача 4</h2>
<?php
$numbers = [-2,2,4,-4];
echo "Исходный массив массив: ";
foreach ($numbers as $value){
    echo $value, ' ';
}
echo '<br>';
$new = [];
foreach ($numbers as $value){
    if ($value > 0){
        $new[] = $value**2;
    } else {
        $new[] = $value*(-1);
    }
}
echo "Получившийся массив: ";
foreach ($new as $value){
    echo $value, ' ';
}
?>
<h2>Задача 5</h2>
<?php
$numbers = [0,1,2,3,4,5];
echo "Исходный массив массив: ";
foreach ($numbers as $value){
    echo $value, ' ';
}
echo '<br>';
$new = [];
foreach ($numbers as $key => $value){
    if ($key%2==0){
        $new[] = $value;
}
}
echo "Получившийся массив: ";
foreach ($new as $value){
    echo $value, ' ';
}
?>
<h2>Задача 6</h2>
<?php
$numbers = [0,2,1,4,3];
$new = [];
echo "Исходный массив: ";
foreach ($numbers as $value){
    echo $value . " ";
}
echo '<br>';
for ($key = 1; $key < count($numbers); $key++){
    if($numbers[$key]>$numbers[$key-1]){
        $new[] = $numbers[$key];
    }
}
echo "Получившийся массив: ";
foreach ($new as $value){
    echo $value;
}
?>
<h2>Задача 7</h2>
<?php
$numbers = [0,2,1,4,3];
echo "Исходный массив: ";
foreach ($numbers as $value){
    echo $value . " ";
}
echo '<br>';
for ($key = 0; $key < count($numbers); $key+=2){
    if($key + 1<count($numbers)){
        $new = $numbers[$key];
        $numbers[$key] = $numbers[$key+1];
        $numbers[$key+1] = $new;
    }
}
echo "Получившийся массив: ";
foreach ($numbers as $value){
    echo $value;
}
?>
<h2>Задача 8</h2>
<?php
$numbers = [0,2,1,4,3];
echo "Исходный массив: ";
foreach ($numbers as $value){
    echo $value . " ";
}
echo '<br>';
$last = $numbers[count($numbers)-1];
for ($key=count($numbers)-1; $key>0; $key--){
    $numbers[$key]=$numbers[$key-1];
}
$numbers[0] = $last;
echo "Получившийся массив: ";
foreach ($numbers as $value){
    echo $value;
}
?>
<h2>Задача 9</h2>
<?php
$numbers = [-2,2,1,3,3];
$count = 0;
echo "Исходный массив: ";
foreach ($numbers as $value){
    echo $value  . " ";
}
echo '<br>';
for ($key=0; $key<count($numbers); $key++){
    for ($d = $key+1; $d<count($numbers); $d++){
        if ($numbers[$key]==$numbers[$d]){
            $count+=1;
        }
    }
}
echo "Пар элементов, равных друг другу - $count";
?>