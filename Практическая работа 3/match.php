<h1>Практическая работа - Оператор выборв</h1>
<h2>Задача 1</h2>
<form actions="">
    <p>Введите цифру (0-9):</p>
    <input name="number">
    <input type="submit" value="Отправить">
</form>
<?php
if(isset($_GET['number'])){
    $n = $_GET['number'];
    $res = match((int)$n){
        0 => '0 - zero',
        1 => '1 - one',
        2 => '2 - two',
        3 => '3 - three',
        4 => '4 - four',
        5 => '5 - five',
        6 => '6 - six',
        7 => '7 - seven',
        8 => '8 - eight',
        9 => '9 - nine',
    };
    echo $res;
} else {
    echo 'Данные не получены';
}
?>
<h2>Задача 2</h2>
<form actions="">
    <p>Введите номер месяца</p>
    <input name="number2">
    <input type="submit" value="Отправить">
</form>
<?php
if(isset($_GET['number2'])){
    $n = $_GET['number2'];
    $res = match((int)$n){
        1 => '1 января — Новый год, 7 января — Рождество',
        2 => '14 февраля - День Святого Валентина, 23 февраля — День защитника Отечества',
        3 => '8 марта - Международный женский день',
        4 => '1 апреля - День смеха, 4 апреля - Лазарева суббота',
        5 => '1 мая — Праздник Весны и Труда, 9 мая - День Победы',
        6 => '12 июня -День России, 22 июня — День памяти и скорби',
        7 => '8 июля - День семьи, любви и верности',
        8 => '2 августа -  День Воздушно-десантных войск',
        9 => '1 сентября - День знаний',
        10 => '5 октября - День учителя, 28 октября — День бабушек и дедушек',
        11 => '4 ноября — День народного единства, 22 ноября — День психолога',
        12 => '1 декабря — День математика, 4 декабря — День информатики',
    };
    echo $res;
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
    if ($n < 0 || $n>99){
        echo 'Число вне диапозоне 1-99';
    } else{
        if ($n >= 11 && $n <= 14){
            echo "Мне $n лет";;
        } else {
            $last = $n % 10;
            switch ($last){
                case 1: 
                    echo "Мне $n год";
                    break;
                case 2: 
                    echo "Мне $n года";
                    break;
                case 3: 
                    echo "Мне $n года";
                    break;
                case 4: 
                    echo "Мне $n года";
                    break;
                default:
                    echo "Мне $n лет";
            }
        }
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
