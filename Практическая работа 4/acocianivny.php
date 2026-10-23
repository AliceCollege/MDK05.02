<h1>Практическая 4 - Ассоциативные массивы</h1>
<h2>Задача 1</h2>
<?php
$numbers = ["zero" => "ноль", "one" => "один", "two" => "два", "three" => "три", "four" => "четыре", "five" => "пять", "six" => "шесть", "seven" => "семь", "eight" => "восемь", "nine"=>"девять"];
foreach($numbers as $english => $russian)
{
    echo "$english - $russian<br />";
}
?>
<h2>Задача 2</h2>
<form actions="">
    <p>Напишите цифру на русском/английском языке:</p>
    <input name="word">
    <input type="submit" value="Отправить">
</form>
<?php
$numbers = ["zero" => "ноль", "one" => "один", "two" => "два", "three" => "три", "four" => "четыре", "five" => "пять", "six" => "шесть", "seven" => "семь", "eight" => "восемь", "nine"=>"девять"];
if(isset($_GET['word'])){
    $word = $_GET['word'];
    foreach($numbers as $english => $russian){
        if($word==$russian){
            echo "$english - $russian<br />";
        } else {
            echo "В словаре нет такого слова";
        }
    }
}
?>
<h2>Задача 3</h2>
<h2>Задача 4</h2>
<h2>Задача 5</h2>
<h2>Задача 6</h2>