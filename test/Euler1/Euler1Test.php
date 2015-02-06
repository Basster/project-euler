<?php


namespace Basster\Test\Euler1;


use Basster\Euler1\Euler1;

class Euler1Test extends \PHPUnit_Framework_TestCase {
    public function testExample()
    {
        $this->assertEquals(23, Euler1::getSum(10));
    }

    public function testProblem()
    {
        $this->assertEquals(233168, Euler1::getSum(1000));
    }
}
