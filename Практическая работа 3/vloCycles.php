<h1>Вложенные циклы</h1>
<h2>Задача 1</h2>
<?php
for($i = 1; $i < 10; $i++){
    for($j = 1; $j < 10; $j++){
        $x = $i*$j;
        echo "$i*$j = $x";
        echo '<br>';
    }
    echo '<br>';
}
?>
<h2>Задача 2</h2>
<?php
$a = 3;
$b = 5;
echo "a = $a, b = $b";
echo '<br>';
for($i = 0; $i < $a; $i++){
    for($j = 0; $j < $b; $j++){
        echo 'X';
    }
    echo '<br>';
}
?>
<h2>Задача 3</h2>
<table>
<?php
for($i = 1; $i < 10; $i++){
    echo "<tr>";
    for($j = 1; $j < 10; $j++){
        echo "<td>" . $i * $j . "</td>";
    }
    echo '</tr>';
}
?>
</table>
<h2>Задача 4</h2>
<table>
<?php
for($i = 0; $i < 10; $i++){
    echo "<tr>";
    for($j = 0; $j < 10; $j++){ 
        echo "<td>" . ($i*10+$j)**2 . "</td>";
    }
    echo '</tr>';
}
?>
</table>
<h2>Задача 5 - ЕЩЁ ПОДУМАТЬ</h2>
<?php
$a = 3;
$b = 5;
echo "a = $a, b = $b";
echo '<br>';
for($i = 0; $i < $a; $i++){
    echo 'd';
    for($j = 0; $j < $b-2; $j++){
        echo 'X';
    }
    echo 'd';
    echo '<br>';
}
?>
<h2>Задача 6</h2>
<?php
$n = 6;
echo "n = $n";
echo '<br>';
for($i = 1; $i <= $n; $i++){
    if ($n % $i == 0) {
        $dilit = $i;
        echo "$dilit"; 
    }
}
?>