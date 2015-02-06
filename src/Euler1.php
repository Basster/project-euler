<?php

namespace Basster;


class Euler1 {

    public static function getSum($maxNum)
    {
        $sum = 0;
        for ($i = 1; $i < $maxNum; $i++) {
            if (self::dividableBy($i, 3) || self::dividableBy($i, 5)) {
                $sum += $i;
            }
        }
        return $sum;
    }

    private static function dividableBy($num, $divisor)
    {
        return $num % $divisor === 0;
    }
}