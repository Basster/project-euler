<?php


namespace Basster;


class Euler2 implements Euler
{

    public function getSum($max)
    {
        return array_sum(self::fibonacci($max));
    }

    public function fibonacci($n)
    {
        $fib = [1, 2];
        $next = $fib[1] + $fib[0];

        for ($i = 2; $next < $n; $i++) {
            $fib[] = $next;
            $next = $fib[$i] + $fib[$i - 1];
        }

        return $fib;
    }

    public function getSolution()
    {
        return $this->getEvenSum(4000000);
    }

    public function getEvenSum($int)
    {
        return array_sum(array_filter(self::fibonacci($int), function ($value) {
            return (!($value & 1));
        }));
    }
}