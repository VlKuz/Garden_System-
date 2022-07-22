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
?>