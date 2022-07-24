<?php

class TreeTest extends \PHPUnit\Framework\TestCase {

    function testTo_garden() {
        $tree = new App\Tree;
        $arr= array();
        $result = $tree->to_garden($arr);
        $this->assertContains($tree, $result);
    }

    function testWeight_counting() {
        $tree = new App\Tree;
        $tree->fruits = 100;
        $tree->weight_counting(150,180);
        $this->assertNotEmpty($tree->weight);
    }
}
?>