<?php

namespace WebArch\Skeleton;

class Skeleton
{
    /**
     * @return string
     */
    public function hello(): string
    {
        return 'Hello, World!';
    }

    /**
     * @param float $a
     * @param float $b
     * @param float $c
     *
     * @return float
     */
    public function findDiscriminant(float $a, float $b, float $c): float
    {
        return $b ** 2 - 4 * $a * $c;
    }
}
