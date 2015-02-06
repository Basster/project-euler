<?php

namespace Basster;


class Euler1 implements Euler
{
    public function getSolution()
    {
        return $this->getSum(1000);
    }

    public function getSum($maxNum)
    {
        $sum = 0;
        for ($i = 1; $i < $maxNum; $i++) {
            if (self::dividableBy($i, 3) || self::dividableBy($i, 5)) {
                $sum += $i;
            }
        }
        return $sum;
    }

    private function dividableBy($num, $divisor)
    {
        return $num % $divisor === 0;
    }
}