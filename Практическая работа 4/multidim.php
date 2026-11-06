<h1>Практическая - Многомерные массива</h1>
<h2>Задача 1</h2>
<table>
<?php
$numbers = [['1', '2','3'],['4','5','6'],['7','8','9'],['10','11','12']];
foreach ($numbers as $group) {
    echo '<tr>';
    foreach ($group as $number) {
        echo "<td>" . $number . "</td>";
    }
    echo '</tr>';
}
?>
</table>
<h2>Задача 2</h2>
<table>
<?php
$array =[];
for($i = 1; $i < 10; $i++){
    for($j = 0; $j < 10; $j++){
        $num =$i*10+$j;
        $array[$i][$j]= $num**2;
    }
}
foreach ($array as $group) {
    echo '<tr>';
    foreach ($group as $number) {
        echo "<td>" . $number . "</td>";
    }
    echo '</tr>';
}
?>
</table>
<h2>Задача 3</h2>
<?php
$numbers = [[1,2,3,4,5],
            [6,7,8,9,10],
            [11,12,13,14,15],
            [16,17,18,19,20]];
$min = $max = $numbers[0][0];
$minR = $minC = $maxR = $maxC = 0;
echo "Созданный массив: <br>";
foreach ($numbers as $group) {
    foreach ($group as $number) {
        echo " $number";
    }
    echo '<br>';
}
foreach ($numbers as $r => $group) {
    foreach ($group as $c => $number) {
        if ($number < $min) { 
            [$min, $minR, $minC] = [$number, $r, $c]; 
        }
        if ($number > $max) {
             [$max, $maxR, $maxC] = [$number, $r, $c]; 
        }
    }
}
echo "Индексы максимального элемента $max: $maxR, $maxC. Индексы минимального элемента $min: $minR, $minC."
?>
<h2>Задача 4</h2>
<?php
$n =5;
$numbers = [];
echo " n = $n <br>";
for ($i = 0; $i < $n; $i++){
    for ($j = 0; $j < $n; $j++){
        $l = $i - $j;
        if ($l < 0) {
            $l *= -1;
        }
        $numbers[$i][$j] = $l;
    }
}
foreach ($numbers as $group) {
    foreach ($group as $number) {
        echo " $number";
    }
    echo '<br>';
}
?>
<h2>Задача 5</h2>
<?php
$sport = ['Футбол' => [
                'Nike' => 'футбольный мяч',
                'Adidas' => 'бутсы'
                ],
            'Волейбол' => [
                'Mikasa'=>'Волейбольный мяч',
                ],
            'Плаванье' => [
                'Arena'=>'Шапочка для плаванья',
                'Cosmo' => 'Очки',
                ],
            'Баскетбол' => []
           ];
foreach ($sport as $category => $products) {
    echo "<h3>$category</h3>";
    if(count($products)>0){
        foreach ($products as $firm => $product) {
        echo " Продукт - $product, фирма - $firm<br>";
        }
    } else {
        echo "Здесь пока нет товаров";
    }
}
?>
<h2>Задача 6</h2>
<?php
$sport = ['Футбол' => [
                'Nike' => 'футбольный мяч',
                'Adidas' => 'бутсы'
                ],
            'Волейбол' => [
                'Mikasa'=>'Волейбольный мяч',
                ],
            'Плаванье' => [
                'Arena'=>'Шапочка для плаванья',
                'Cosmo' => 'Очки',
                ],
            'Баскетбол' => []
           ];
$new = 'Гимнастика';
$sport[$new] = [];
foreach ($sport as $category => $products) {
    echo "<h3>$category</h3>";
    if(count($products)>0){
        foreach ($products as $firm => $product) {
        echo " Продукт - $product, фирма - $firm<br>";
        }
    } else {
        echo "Здесь пока нет товаров";
    }
}
?>
<h2>Задача 7</h2>
<?php
$sport = ['Футбол' => [
                'Nike' => 'футбольный мяч',
                'Adidas' => 'бутсы'
                ],
            'Волейбол' => [
                'Mikasa'=>'Волейбольный мяч',
                ],
            'Плаванье' => [
                'Arena'=>'Шапочка для плаванья',
                'Cosmo' => 'Очки',
                ],
            'Баскетбол' => []
           ];
$newproducts = ['Starfit' => 'Гимнастический мяч', 'Demix' => 'Обруч гимнастический', 'Indigo'=>'Скакалка гимнастическая', 'Pastorelli'=>'Лента для художественной гимнастики'];
foreach ($newproducts as $firm => $product) {
        $sport['Гимнастика'][$firm] = $product;
}
foreach ($sport as $category => $products) {
    echo "<h3>$category</h3>";
    if(count($products)>0){
        foreach ($products as $firm => $product) {
        echo " Продукт - $product, фирма - $firm<br>";
        }
    } else {
        echo "Здесь пока нет товаров";
    }
}
?>
<h2>Задача 8</h2>
<?php
$sport = ['Футбол' => [
                'Nike' => 'футбольный мяч',
                'Adidas' => 'бутсы'
                ],
            'Волейбол' => [
                'Mikasa'=>'Волейбольный мяч',
                ],
            'Плаванье' => [
                'Arena'=>'Шапочка для плаванья',
                'Cosmo' => 'Очки',
                ],
            'Баскетбол' => []
           ];
$newproducts = ['Starfit' => 'Гимнастический мяч', 'Demix' => 'Обруч гимнастический', 'Indigo'=>'Скакалка гимнастическая', 'Pastorelli'=>'Лента для художественной гимнастики'];
foreach ($newproducts as $firm => $product) {
        $sport['Гимнастика'][$firm] = $product;
}
$newCategory = 'Бокс';
$newproductsCat = ['Everlast'=>' Боксёрские перчатки',' Effort'=>'Боксёрский мешок','Hukk'=>'Боксёрский шлем'];
if (!isset($sport[$newCategory])) {
    $sport[$newCategory] = [];
}
foreach ($newproductsCat as $firm => $product) {
    $sport[$newCategory][$firm] = $product;
}
foreach ($sport as $category => $products) {
    echo "<h3>$category</h3>";
    if(count($products)>0){
        foreach ($products as $firm => $product) {
        echo " Продукт - $product, фирма - $firm<br>";
        }
    } else {
        echo "Здесь пока нет товаров";
    }
}
?>