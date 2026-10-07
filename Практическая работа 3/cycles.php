<h1>Практическая работа - Циклы</h1>
<h2>Задача 1</h2>
<?php
$startNumber = 2;
$multiplier = 2;
$quatity = 3;
echo "startNumber = $startNumber, multiplier=$multiplier, quatity=$quatity";
for($i = 0; $i < $quatity; $i++){
    $startNumber = $startNumber*$multiplier;
    echo '<br>', $startNumber, '<br>';
}
?>
<h2>Задача 2</h2>
<?php
$lastNumber=10;
$sum=0;
for ($i = 1; $i <= $lastNumber; $i++) {
    $sum += $i;
}
echo "lastNumber=$lastNumber, sum=$sum";
?>
<h2>Задача 3</h2>
<?php
$lastNumber=10;
$multiplicationResult=1;
for ($i = 1; $i <= $lastNumber; $i++) {
    if($i%2==0){
        $multiplicationResult *= $i;
    }
}
echo "lastNumber=$lastNumber, multiplicationResult=$multiplicationResult";
?>
<h2>Задача 4</h2>
<?php
$n=3;
$km=10;
$sum = 10;
for ($i = 1; $i < $n; $i++) {
    $km = $km*1.1;
    $sum += $km;
}
echo "за n=$n дней, спортсмен пробежит $sum км";
?>
<h2>Задача 5</h2>
<?php
$sum = 64;
$maxKr = $sum/4;
for ($kr = 0; $kr <= $maxKr; $kr++) {
    $krol = 4 * $kr;
    $goose = $sum - $krol;
    if ($goose%2==0){
        $g = $goose / 2;
        echo "Кроликов - $kr, Гусей - $g,<br>";
    } 
}
?>
<h2>Задача 6</h2>
<?php
$kol = 1;
$kletki = 1;
$hour = 24;
while($hour<=24){
    $kletki * 2;
    $kol += $kletki;
}
echo $kol;
?>