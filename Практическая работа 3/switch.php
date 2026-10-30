<h1>Практическая работа - Switch</h1>
<h2>Задача 1</h2>
<form actions="">
    <p>Введите число:</p>
    <input name="number">
    <input type="submit" value="Отправить">
</form>
<?php
if(isset($_GET['number'])){
    $n = $_GET['number'];
    switch ($n){
        case 0:
            echo '0 - zero';
            break;
        case 1:
            echo '1 - one';
            break;
        case 2:
            echo '2 - two';
            break;
        case 3:
            echo '3 - three';
            break;
        case 4:
            echo '4 - four';
            break;
        case 5:
            echo '5 - five';
            break;
        case 6:
            echo '6 - six';
            break;
        case 7:
            echo '7 - seven';
            break;
        case 8:
            echo '8 - eight';
            break;
        case 9:
            echo '9 - nine';
            break;
        default:
            echo 'Число не входит в промежуток (0 - 9)';
    }
} else {
    echo 'Данные не получены';
}
?>
<h2>Задача 2</h2>
<form actions="">
    <p>Введите число:</p>
    <input name="number2">
    <input type="submit" value="Отправить">
</form>
<?php
if(isset($_GET['number2'])){
    $n = $_GET['number2'];
    switch ($n){
        case 1:
            echo '1 января — Новый год, 7 января — Рождество';
            break;
        case 2:
            echo '14 февраля - День Святого Валентина, 23 февраля — День защитника Отечества';
            break;
        case 3:
            echo '8 марта - Международный женский день';
            break;
        case 4:
            echo '1 апреля - День смеха, 4 апреля - Лазарева суббота';
            break;
        case 5:
            echo '1 мая — Праздник Весны и Труда, 9 мая - День Победы';
            break;
        case 6:
            echo '12 июня -День России, 22 июня — День памяти и скорби';
            break;
        case 7:
            echo '8 июля - День семьи, любви и верности';
            break;
        case 8:
            echo '2 августа -  День Воздушно-десантных войск';
            break;
        case 9:
            echo '1 сентября - День знаний';
            break;
        case 10:
            echo '5 октября - День учителя, 28 октября — День бабушек и дедушек';
            break;
        case 11:
            echo '4 ноября — День народного единства, 22 ноября — День психолога';
            break;
        case 12:
            echo '1 декабря — День математика, 4 декабря — День информатики';
            break;
        default:
            echo 'Число не является месяцем';
    }
} else {
    echo 'Данные не получены';
}
?>
<h2>Задача 3</h2>
<form actions="">
    <p>Введите число:</p>
    <input name="number3">
    <input type="submit" value="Отправить">
</form>
<?php
if(isset($_GET['number3'])){
    $n = $_GET['number3'];
    switch ($n){
        case 0:
            echo 'Последняя цифра квадрата - 0';
            break;
        case 1:
            echo 'Последняя цифра квадрата - 1';
            break;
        case 2:
            echo 'Последняя цифра квадрата - 4';
            break;
        case 3:
            echo 'Последняя цифра квадрата - 9';
            break;
        case 4:
            echo 'Последняя цифра квадрата - 6';
            break;
        case 5:
            echo 'Последняя цифра квадрата - 5';
            break;
        case 6:
            echo 'Последняя цифра квадрата - 6';
            break;
        case 7:
            echo 'Последняя цифра квадрата - 9';
            break;
        case 8:
            echo 'Последняя цифра квадрата - 4';
            break;
        case 9:
            echo 'Последняя цифра квадрата - 1';
            break;
        default:
            echo 'Число не является цифрой (0 - 9)';
    }
} else {
    echo 'Данные не получены';
}
?>
<h2>Задача 4</h2>
<form actions="">
    <p>Введите число:</p>
    <input name="number4">
    <input type="submit" value="Отправить">
</form>
<?php
if(isset($_GET['number4'])){
    $n = $_GET['number4'];
    switch (true) {
        case ($n < 0 || $n > 99):
            echo 'Число вне диапазона 1-99';
            break;
            
        case ($n >= 11 && $n <= 14):
            echo "Мне $n лет";
            break;
            
        case ($n % 10 == 1):
            echo "Мне $n год";
            break;
            
        case ($n % 10 == 2 || $n % 10 == 3 || $n % 10 == 4):
            echo "Мне $n года";
            break;
            
        default:
            echo "Мне $n лет";
            break;
    }
} else {
    echo 'Данные не получены';
}
?>

<h2>Задача 5</h2>
<form actions="">
    <p>Введите номер единицы измерения:</p>
    <input name="numberED">
    <p>Введите массу M:</p>
    <input name="number5">
    <input type="submit" value="Отправить">
</form>
<?php
if(isset($_GET['numberED']) && isset($_GET['number5'])){
    $ed = $_GET['numberED'];
    $n = $_GET['number5'];
    switch ($ed){
        case 1:
            echo "$n киллограмм";
            break;
        case 2:
            $n = $n / 1000000;
            echo "$n киллограмм";
            break;
        case 3:
            $n = $n / 1000;
            echo "$n киллограмм";
            break;
        case 4:
            $n = $n * 1000;
            echo "$n киллограмм";
            break;
        case 5:
            $n = $n * 100;
            echo "$n киллограмм";
            break;
        default:
            echo 'Нет такой еденицы измерения';
    }
} else {
    echo 'Данные не получены';
}
?>
