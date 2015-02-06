<?php


namespace Basster\Test;


use Basster\Euler1;

class Euler1Test extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Euler1
     */
    private $euler;

    public function setUp()
    {
        $this->euler = new Euler1;
    }

    public function testExample()
    {
        $this->assertEquals(23, $this->euler->getSum(10));
    }

    /**
     * ~20ms from PhpStorm Statistics on an i5-4210H @ 2.9GHz.
     */
    public function testProblem()
    {
        $this->assertEquals(233168, $this->euler->getSolution());
    }
}
