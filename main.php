<?php
class Tree
{
    public $id, $type, $fruits, $weight;

    function to_garden($arr){//Метод класса для добавления объектов в массив "Сад"
        array_push($arr, $this);
        return $arr;
    }
}

$garden = array(); //Массив "Сад"
$fruits_count = 0; //Общее количество фруктов
$apple_count = 0; //Количество яблок
$apples_weight = 0; //Общий вес яблок
$pear_count = 0; //Количество груш
$pears_weight = 0; //Общий вес груш

for($i=0;$i<10;$i++){
    $apple_tree = new Tree(); //Создания объекта класса Tree
    $apple_tree->id = uniqid();//Уникальный id
    $apple_tree->type = 'Яблоня';//Тип дерева
    $apple_tree->fruits = rand(40,50);//Количество фруктов на одном дереве
    $num_of_apples=$apple_tree->fruits;
    for($j = 0;$j<$num_of_apples;$j++)//Цикл для высчитывания всех фруктов на одном дереве
        $apple_tree->weight+=rand(150,180);
    $garden = $apple_tree->to_garden($garden);
}

for($i=0; $i<15; $i++){
    $pear = new Tree();
    $pear->id = uniqid();
    $pear->type = 'Груша';
    $pear->fruits = rand(0,20);
    $num_of_pears=$pear->fruits;
    for($j = 0;$j<$num_of_pears;$j++)
        $pear->weight+=rand(130,170);
    $garden = $pear->to_garden($garden);
}

foreach($garden as $row){
    $fruits_count+=$row->fruits;//Подсчет общего количества фруктов
    if($row->type=='Яблоня'){
        $apple_count+=$row->fruits;//Подсчет количества всех яблок
        $apples_weight+=$row->weight;//Подсчет общего веса яблок
    }
    elseif($row->type=='Груша'){
        $pear_count+=$row->fruits;//Подсчет количества всех груш
        $pears_weight+=$row->weight;//Подсчет общего веса груш
    }
}

echo 'Всего фруктов: '.$fruits_count.PHP_EOL;
echo 'Количество яблок: '.$apple_count.PHP_EOL;
echo 'Количество груш: '.$pear_count.PHP_EOL;
echo 'Общий вес яблок: '.$apples_weight.PHP_EOL;
echo 'Общий вес груш: '.$pears_weight;
?>