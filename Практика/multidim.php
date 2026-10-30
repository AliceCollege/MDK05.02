<h1>Практическая работа - Многомерные массивы</h1>
<h2>Обьявление массива</h2>
<?php
$animals = [['Кот', 'Собака'],['Синица','Голубь','Пингвин'],['Лосось','Щука']]
?>
<h2>Вывод массива на экран</h2>
<?php
foreach ($animals as $group) {
    foreach ($group as $animal) {
        echo " $animal";
    }
    echo '<br>';
}
?>
<h2>Ассоциативные массивы</h2>
<?php
$animals = ['Животные' => ['Кот', 'Собака'],'Птицы' => ['Синица','Голубь','Пингвин'],'Рыбы' => ['Лосось','Щука']];
foreach ($animals as $key => $group) {
    echo "<h3>$key</h3>";
    foreach ($group as $animal) {
        echo " $animal";
    }
    echo '<br>';
}
?>
<h2>Обращение к элементу массива</h2>
<?php
echo $animals['Птицы'][1];
?>
<h2>Ещё пример</h2>
<?php
$animals = ['Животные' => [['name' => 'Кот', 'ability' => 'Мяукает'], ['name' =>'Собака', 'ability' => 'лает']],'Птицы' => [['name' =>'Синица', 'ability' => 'летает'], ['name' =>'Голубь', 'ability' => 'воркует'],['name' =>'Пингвин', 'ability' => 'плавает']],'Рыбы' => [['name' =>'Лосось', 'ability' => 'вкусный'], ['name' =>'Щука', 'ability' => 'исполняет желания']]];
foreach ($animals as $key => $group) {
    echo "<h3>$key</h3>";
    foreach ($group as $keyAnimal => $animal) {
        echo '<p>' . $animal['name'] . ' - ' . $animal['ability'] . '</p>';
    }
}
?>