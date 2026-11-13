<h1>Практическая 4- Функции</h1>
<h2>Задание 1</h2>
<form actions="">
    <p>Введите радиус окружности -</p>
    <input name="r">
    <input type="submit" value="Отправить">
</form>
<?php
if(isset($_GET['r'])){
    $r = $_GET['r'];
    function getLcircle($radius)
    {
        return 2*3.14*$radius;
    }
    $result = getLcircle($r);
    echo "Длина окружности - $result";
}
?>
<h2>Задание 2</h2>
<form actions="">
    <p>Введите стороны треугольника -</p>
    <input name="a">
    <input name="b">
    <input name="c">
    <input type="submit" value="Отправить">
</form>
<?php
if(isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])){
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    function squareRect($Sa, $Sb, $Sc)
    {
        if ($Sa+$Sb >$Sc && $Sa+ $Sc >$Sb && $Sb + $Sc >$Sa) {
            $p = ($Sa+$Sb+$Sc)/2;
            return sqrt($p*($p-$Sa)*($p-$Sb)*($p-$Sc));
        } else {
            return 0;
        }
    }
    $result = squareRect(3,4,5);
    echo "Стороны треугольника - 3,4,5 <br>";
    if ($result == 0) {
        echo "Треугольника не существует";
    } else {
        echo 'Площадь треугольника - ' . $result;
    }
}
?>
<h2>Задание 3</h2>
<form actions="">
    <p>Введите число -</p>
    <input name="n">
    <input type="submit" value="Отправить">
</form>
<?php
if(isset($_GET['n'])){
    $n = $_GET['n'];
    function maxDivivsor($n) {
        for ($i = $n - 1; $i >= 1; $i--) {
            if ($n % $i== 0) {
                return $i;
            }
        }
    }
    $result = maxDivivsor($n);
    echo "Максимальный делить числа $n - это " . maxDivivsor($n);
}
?>
<h2>Задание 4</h2>
<form actions="">
    <p>Введите число -</p>
    <input name="n">
    <input type="submit" value="Отправить">
</form>
<?php
if(isset($_GET['n'])){
    $n = $_GET['n'];
    function allDivivsor($n) {
        $divers = [];
        for ($i = 1; $i <= $n; $i++) {
            if ($n % $i== 0) {
                $divers[] = $i;
            }
        }
        return $divers;
    }
    $result = allDivivsor($n);
    echo "Все делители числа $n: <br>";
    foreach ($result as $value){
    echo "$value <br>";
    }
}
?>
<h2>Задание 5 - вариант через форму</h2>
<form action="">
    <p>Введите числа -</p>
    <input name="a">
    <input name="b">
    <input name="c">
    <input type="submit" value="Отправить">
</form>
<?php
if(isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])){
    $arr = [$_GET['a'], $_GET['b'], $_GET['c']];
    function SumSquares($numbers)
    {
        $sum = 0;
        foreach($numbers as $number){
            $sum += $number * $number;
        }
        return $sum;
    }
    $result = SumSquares($arr);
    echo "Сумма квадратов - $result";
}
?>
<h2>Задание 5 -  второй вариант (без формы)</h2>
<?php
function sumOfSquares($numbers) {
    $sum = 0;
    foreach ($numbers as $num) {
        $sum = $sum + ($num * $num);
    }
    return $sum;
}
echo "Элементы массива - 1, 2, 3, 4 <br>";
echo "Сумма квадратов этих чисел - " . sumOfSquares([1, 2, 3, 4]);
?>
<h2>Задание 6</h2>
<?php 
function convertToString($arr) {
    $result = "";
    foreach ($arr as $item) {
        if (isset($item[0])) {
            $result .= "array ";
        } else {
            $result .= $item . " ";
        }
    }
    return $result;
}
echo "Исходный массив - [1, 2, [3, 4], 5] <br>";
$data = [1, 2, [3, 4], 5];
echo convertToString($data);
?>
<h2>Задание 7</h2>
<?php
function sumStr(...$strings)
{
    $result = 0;
    foreach($strings  as $str) {
        $result += mb_strlen($str);
    }
    return $result;
}
echo "Даны строки:<br>Кот <br> Лис <br> Кит <br>";
echo "Общая длина строк - " . sumStr("Кот", "Лис", "Кит");
?>
<h2>Задание 8</h2>
<?php 
function convertToStringRecursive($arr) {
    $result = "";
    foreach ($arr as $item) {
        if (isset($item[0])) {
            $result .= convertToStringRecursive($item);
        } else {
            $result .= $item . " ";
        }
    }
    return $result;
}
echo "Исходный массив - [1, 2, [3, 4], [5,6,7],8,9,10] <br>";
$data = [1, 2, [3, 4], [5,6,7],8,9,10];
echo convertToStringRecursive($data);
?>