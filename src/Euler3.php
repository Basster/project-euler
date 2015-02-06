<?php


namespace Basster;


class Euler3 implements Euler
{

    public function getSolution()
    {
        $primes = $this->primes(600851475143);
        return $primes[count($primes) - 1];
    }

    public function primes($num)
    {
        $primes = [];
        $prime = 2;
        while (!$this->isPrime($num)) {
            while (bcmod($num, $prime) !== '0') {
                $prime = $this->findNextPrime($prime);
            }
            $num = $num / $prime;
            $primes[] = $prime;
        }

        $primes[] = $num;

        return $primes;
    }

    public function isPrime($num)
    {
        $c = 0;
        for ($i = 1; $i < $num; $i++) {
            if (bcmod($num, $i) === '0') {
                $c++;
            }
            if ($c > 1) {
                return false;
            }
        }
        return true;
    }

    private function findNextPrime($prime)
    {
        while (!$this->isPrime(++$prime)) {
            continue;
        }
        return $prime;
    }
}