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
<?php
$word = 'два';
$no = false;
$numbers = ["zero" => "ноль", "one" => "один", "two" => "два", "three" => "три", "four" => "четыре", "five" => "пять", "six" => "шесть", "seven" => "семь", "eight" => "восемь", "nine"=>"девять"];
foreach($numbers as $english => $russian){
    if($word==$russian){
        echo "$english - $russian";
        $no = true;
        break;
    }
}
if(!$no){
    echo "В словаре нет такого слова/вы ввели не русское слово";
}
?>
<h2>Задача 3</h2>
<?php
$word = 'one';
$no = false;
$numbers = ["zero" => "ноль", "one" => "один", "two" => "два", "three" => "три", "four" => "четыре", "five" => "пять", "six" => "шесть", "seven" => "семь", "eight" => "восемь", "nine"=>"девять"];
foreach($numbers as $english => $russian){
    if($word==$russian || $word==$english){
        echo "$english - $russian";
        $no = true;
        break;
    }
}
if(!$no){
    echo "В словаре нет такого слова";
}
?>
<h2>Задача 4</h2>
<form actions="">
    <p>Введите слово</p>
    <input name="word">
    <input type="submit" value="Отправить">
</form>
<?php
if(isset($_GET['word'])){
    $n = $_GET['word'];
    $no = false;
    $numbers = ["zero" => "ноль", "one" => "один", "two" => "два", "three" => "три", "four" => "четыре", "five" => "пять", "six" => "шесть", "seven" => "семь", "eight" => "восемь", "nine"=>"девять"];
    foreach($numbers as $english => $russian){
        if($word==$russian || $word==$english){
            echo "$english - $russian";
            $no = true;
            break;
        }
    }
    if(!$no){
        echo "В словаре нет такого слова";
    }
}
?>
<h2>Задача 5</h2>
<?php
$str = "banana";
$ass_array = [];
for ($i = 0; isset($str[$i]); $i++) {
    $buk = $str[$i];
    if (isset($ass_array[$buk])) {
        $ass_array[$buk]++; 
    } else {
        $ass_array[$buk] = 1; 
    }
}
foreach ($ass_array as $buk => $count) {
    echo "'$buk' => $count", '<br>';
}
?>
<h2>Задача 6</h2>
<?php
$numbers = ["zero" => "ноль", "one" => "один", "two" => "два", "three" => "три", "four" => "четыре", "five" => "пять", "six" => "шесть", "seven" => "семь", "eight" => "восемь", "nine"=>"девять"];
foreach($numbers as $english => $russian){
    $rus = $russian;
    $eng = $english;
    $english = $russian;
    echo "$rus - $eng<br />";
}
?>
<h2>Задача 7</h2>
<?php
$array = ['кот','дом','лес','слон','мышь','я', 'banana'];
$ass_array =[];
foreach($array as $word){
    $len = mb_strlen($word);
    if (isset($ass_array[$len])){
        $ass_array[$len] .= " " . $word;
    } else {
        $ass_array[$len] = $word;
    }
}
foreach($ass_array as $len => $str){
    echo "$len => $str", '<br>';
}
?>