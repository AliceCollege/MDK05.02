<h1>Практическая - Многомерные массива</h1>
<h2>Задача 1</h2>
<table>
<?php
$numbers = [['1', '2','3'],['4','5','6'],['7','8','9'],['10','11','12']];
foreach ($numbers as $group) {
    echo '<tr>';
    foreach ($group as $number) {
        echo "<td>" . $number . "</td>";
    }
    echo '</tr>';
}
?>
</table>
<h2>Задача 2</h2>
<table>
<?php
$array =[];
for($i = 1; $i < 10; $i++){
    for($j = 0; $j < 10; $j++){
        $num =$i*10+$j;
        $array[$i][$j]= $num*$num;
    }
}
foreach ($array as $group) {
    echo '<tr>';
    foreach ($group as $number) {
        echo "<td>" . $number . "</td>";
    }
    echo '</tr>';
}
?>
</table>
<h2>Задача 3</h2>
<?php
$numbers = [[1,2,3,4,5],[6,7,8,9,10],[11,12,13,14,15],[16,17,18,19,20]];
foreach ($numbers as $group) {
    foreach ($group as $number) {
        echo $number;
    }
}
?>
// 1. Создаем матрицу 5х4 со случайными числами
for ($r = 0; $r < 5; $r++) {
    for ($c = 0; $c < 4; $c++) {
        $matrix[$r][$c] = rand(10, 99);
    }
}

// 2. Ищем минимум, максимум и их индексы
$min = $max = $matrix[0][0];
$minR = $minC = $maxR = $maxC = 0;

foreach ($matrix as $r => $row) {
    foreach ($row as $c => $val) {
        if ($val < $min) { [$min, $minR, $minC] = [$val, $r, $c]; }
        if ($val > $max) { [$max, $maxR, $maxC] = [$val, $r, $c]; }
    }
}

// 3. Вывод результатов
echo "Минимум: $min (Строка: $minR, Столбец: $minC)\n";
echo "Максимум: $max (Строка: $maxR, Столбец: $maxC)\n";

<h2>Задача 4</h2>
<h2>Задача 5</h2>
<h2>Задача 6</h2>
<h2>Задача 7</h2>
<h2>Задача 8</h2>