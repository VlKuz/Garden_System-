<?php

class TreeTest extends \PHPUnit\Framework\TestCase{
    function testTo_garden() {

        $tree = new App\Tree;
        $result = $tree->to_garden($arr);
        $this->assertEquals($arr, $result);
    }
}
?>