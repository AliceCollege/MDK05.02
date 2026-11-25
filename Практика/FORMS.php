<h1>Форсы для ввода данных</h1>
<h2>Для одного элемента</h2>
<form actions="">
    <p>Введите число:</p>
    <input name="number">
    <input type="submit" value="Отправить">
</form>
<?php
if(isset($_GET['number'])){
    $n = $_GET['number'];
}
?>
<h2>Для двух элементов</h2>
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
}
?>
<h2>Для трех элементов</h2>
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
}
?>