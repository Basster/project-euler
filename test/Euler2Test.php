<?php


namespace Basster\Test;


use Basster\Euler2;

class Euler2Test extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Euler2
     */
    private $euler;

    public function setUp()
    {
        $this->euler = new Euler2;
    }

    public function testExampleFibonacci()
    {
        $expected = [1, 2, 3, 5, 8, 13, 21, 34, 55, 89];

        $this->assertEquals($expected, $this->euler->fibonacci(100));
    }

    public function testExample()
    {
        $this->assertEquals(231, $this->euler->getSum(100));
    }

    public function testExampleEven()
    {
        $this->assertEquals(44, $this->euler->getEvenSum(100));
    }

    /**
     * 0s (not measurable) from PhpStorm Statistics on an i5-4210H @ 2.9GHz.
     */
    public function testProblem()
    {
        $this->assertEquals(4613732, $this->euler->getSolution());
    }
}
