<h1>Тернарный оператор</h1>
<h2>Задача 1</h2>
<form actions="">
    <p>Введите число a:</p>
    <input name="a">
    <input type="submit" value="Отправить">
    <p>Введите число b:</p>
    <input name="b">
    <input type="submit" value="Отправить">
</form>
<?php
if(isset($_GET['a']) && isset($_GET['b'])){
    $a = $_GET['a'];
    $b = $_GET['b'];
    $res = $a < $b ? $a+$b : $a*$b;
    echo "a = $a, b = $b, $res";
}
?>
<h2>Задача 2</h2>
<form actions="">
    <p>Введите число n:</p>
    <input name="n">
    <input type="submit" value="Отправить">
</form>
<?php
if(isset($_GET['n'])){
    $n = $_GET['n'];
    $res = $n%2==0 ? 'четное' : 'нечетное';
    echo "число n = $n $res";
}
?>
<h2>Задача 3</h2>
<form actions="">
    <p>Введите сумму покупки sum:</p>
    <input name="sum">
    <input type="submit" value="Отправить">
</form>
<?php
if(isset($_GET['sum'])){
    $sum = $_GET['sum'];
    $res = $sum > 1000 ? $sum*0.9 : $sum*0.95;
    echo "Начальная стоимость sum = $sum, итоговая стоимость $res";
}
?>
<h2>Задача 4</h2>
<form actions="">
    <p>Введите сторону треугольника a</p>
    <input name="a">
    <input type="submit" value="Отправить">
    <p>Введите сторону треугольника b</p>
    <input name="b">
    <input type="submit" value="Отправить">
    <p>Введите сторону треугольника c</p>
    <input name="c">
    <input type="submit" value="Отправить">
</form>
<?php
if(isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])){
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    $res = $a<$b+$c && $b<$a+$c && $c<$a+$b ? 'существует' : 'не существует';
    echo "Треугольник со сторонами a = $a, b = $b, c = $c $res";
}
?>
<h2>Задача 5</h2>
<form actions="">
    <p>Введите возвраст кота age:</p>
    <input name="age">
    <input type="submit" value="Отправить">
</form>
<?php
if(isset($_GET['age'])){
    $age = $_GET['age'];
    $ageGroup = $age<=1 ? 'Котята': ($age>1 && $age<=3 ? 'Молодые коты' : ($age>3 && $age<=7 ? 'Коты средних лет' : 'Почтенные коты'));
    echo "age = $age, $ageGroup";
}
?>
<h2>Задача 6</h2>
<form actions="">
    <p>Введите угол треугольника a</p>
    <input name="a">
    <input type="submit" value="Отправить">
    <p>Введите угол треугольника b</p>
    <input name="b">
    <input type="submit" value="Отправить">
</form>
<?php
if(isset($_GET['a']) && isset($_GET['b'])){
    $a = $_GET['a'];
    $b = $_GET['b'];
    $res = $a+$b<180 && $a>0 && $b>0? ($a==90 || $b==90 ? 'Существен и он прямоугольный' : 'Существует, но он не прямоугольный') : 'не существует';
    echo "Треугольник с углами a = $a, b = $b, $res";
}
?>