<h1>Функции</h1>
<h2>Определение функции и её вызов</h2>
<?php
sayHello();
function sayHello()
{
    echo "Hello!";
}
sayHello();
sayHello();
?>
<h2>Передача в функцию параметра</h2>
<?php
function sayHello1($name)
{
    echo "Hello, $name! <br>";
}
sayHello1("Alice");
sayHello1("Lena");
sayHello1("Mira");
?>
<h2>Передача в функцию параметра</h2>
<?php
function printfullName($fname, $lname)
{
    echo "Hello, $fname $lname! <br>";
}
printfullName("Saltanova", "Alice");
?>
<h2>Функции с параметрами по умолчанию</h2>
<?php
function printUserInfo($fname, $lname, $role = "User")
{
    echo "Hello, $role - $fname $lname! <br>";
}
printUserInfo("Иван","Иванов");
printUserInfo("Alise","Saltanova","Student");
?>
<h2>Возвращаемое значение</h2>
<?php
function getUserInfo($fname, $lname, $role = "User")
{
    return "Hello, $role - $fname $lname! <br>";
}
echo getUserInfo("Иван","Иванов");
?>
<h2>Возвращаемое значение</h2>
<?php
function getUserInfo1($fname, $lname, $role = "User")
{
    return "Hello, $role - $fname $lname! <br>";
}
$info = getUserInfo1("Иван","Иванов");
echo $info;
?>
<h2>Ещё пример</h2>
<?php
function squareRect($l, $w)
{
    return $l * $w;
}
echo 'Площадь - ' . squareRect(20, 5);
?>