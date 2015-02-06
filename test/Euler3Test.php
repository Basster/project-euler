<?php


namespace Basster\Test;


use Basster\Euler3;

class Euler3Test extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Euler3
     */
    private $euler;

    public function setUp()
    {
        $this->euler = new Euler3;
    }

    public function testExample()
    {
        $expect = [5, 7, 13, 29];
        $this->assertEquals($expect, $this->euler->primes(13195));
    }

    /**
     * ~1.3s from PhpStorm Statistics on an i5-4210H @ 2.9GHz.
     */
    public function testProblem()
    {
        $this->assertEquals(6857, $this->euler->getSolution());
    }

    /**
     * @param $num
     * @dataProvider providePrimes
     */
    public function testIsPrime($num, $isPrime)
    {
        $this->assertEquals($isPrime, $this->euler->isPrime($num));
    }

    public function providePrimes()
    {
        return [
            [2, true],
            [3, true],
            [4, false],
            [5, true],
            [6, false],
            [7, true],
            [8, false],
            [9, false],
            [10, false],
            [11, true],
            [12, false],
            [13, true],
            [29, true],
        ];
    }
}
