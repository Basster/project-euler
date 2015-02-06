<?php


namespace Basster\Euler2;


class Euler2
{

    public static function getSum($max)
    {
        return array_sum(self::fibonacci($max));
    }

    public static function fibonacci($n)
    {
        $fib = [1, 2];
        $next = $fib[1] + $fib[0];

        for ($i = 2; $next < $n; $i++) {
            $fib[] = $next;
            $next = $fib[$i] + $fib[$i - 1];
        }

        return $fib;
    }

    public static function getEvenSum($int)
    {
        return array_sum(array_filter(self::fibonacci($int), function ($value) {
            return (!($value & 1));
        }));
    }


}