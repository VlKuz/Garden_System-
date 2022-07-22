<?php
class Tree
{
    public $id, $type, $fruits, $weight;

    function to_garden($arr){
        array_push($arr, $this);
        return $arr;
    }
}

$garden = array();
$fruits_count = 0;
$apple_count = 0;
$apples_weight = 0;
$pear_count = 0;
$pears_weight = 0;

for($i=0;$i<10;$i++){
    $apple_tree = new Tree();
    $apple_tree->id = uniqid();
    $apple_tree->type = 'Яблоня';
    $apple_tree->fruits = rand(40,50);
    $num_of_apples=$apple_tree->fruits;
    for($j = 0;$j<$num_of_apples;$j++)
        $apple_tree->weight+=rand(150,180);
    $garden = $apple_tree->to_garden($garden);
}

for($i=0; $i<15; $i++){
    $pear = new Tree();
    $pear->id = uniqid();
    $pear->type = 'Груша';
    $pear->fruits = rand(0,20);
    for($j = 0;$j<$num_of_apples;$j++)
        $pear->weight+=rand(130,170);
    $garden = $pear->to_garden($garden);
}

foreach($garden as $row){
    $fruits_count+=$row->fruits;
    if($row->type=='Яблоня'){
        $apple_count+=$row->fruits;
        $apples_weight+=$row->weight;
    }
    elseif($row->type=='Груша'){
        $pear_count+=$row->fruits;
        $pears_weight+=$row->weight;
    }
}

echo 'Всего фруктов: '.$fruits_count.PHP_EOL;
echo 'Количество яблок: '.$apple_count.PHP_EOL;
echo 'Количество груш: '.$pear_count.PHP_EOL;
echo 'Общий вес яблок: '.$apples_weight.PHP_EOL;
echo 'Общий вес груш: '.$pears_weight;
?>