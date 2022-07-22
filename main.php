<?php
class Tree
{
    public $id, $type, $fruits, $weight;

    function to_garden($arr){
        array_push($arr, $this);
        return $arr;
    }
}
?>