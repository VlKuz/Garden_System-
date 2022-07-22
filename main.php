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
    $apple_tree->weight = rand(150,180);
    $garden = $apple_tree->to_garden($graden);
}

for($i=0; $i<15; $i++){
    $pear = new Tree();
    $pear->id = uniqid();
    $pear->type = 'Груша';
    $pear->fruits = rand(0,20);
    $pear->weight = rand(130,170);
    $garden = $pear->to_garden($garden);
}
?>