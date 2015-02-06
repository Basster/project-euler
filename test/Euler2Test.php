<?php


namespace Basster\Test;


use Basster\Euler2;

class Euler2Test extends \PHPUnit_Framework_TestCase
{
    public function testExampleFibonacci()
    {
        $expected = [1, 2, 3, 5, 8, 13, 21, 34, 55, 89];

        $this->assertEquals($expected, Euler2::fibonacci(100));
    }

    public function testExample()
    {
        $this->assertEquals(231, Euler2::getSum(100));
    }

    public function testExampleEven()
    {
        $this->assertEquals(44, Euler2::getEvenSum(100));
    }

    public function testProblem()
    {
        $this->assertEquals(4613732, Euler2::getEvenSum(4000000));
    }
}
