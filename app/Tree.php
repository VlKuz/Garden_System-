<?php

namespace App;

class Tree {
    public $id, $type, $fruits, $weight;

    function to_garden($arr) {//Метод класса для добавления объектов в массив "Сад"
        array_push($arr, $this);
        return $arr;
    }

    function weight_counting($num1, $num2) {//Метод класса для подсчета общего веса фруктов на одном дереве.
        for($i = 0;$i<$this->fruits;$i++)
            $this->weight+=rand($num1,$num2);
    }
}
?>