<?php

namespace WebArch\Skeleton\Test;

use PHPUnit\Framework\TestCase;
use WebArch\Skeleton\Skeleton;

class SkeletonTest extends TestCase
{
    /**
     * @var Skeleton
     */
    private $skeleton;

    protected function setUp(): void
    {
        $this->skeleton = new Skeleton();
    }

    /**
     * @return void
     */
    public function testHello(): void
    {
        $this->assertEquals('Hello, World!', $this->skeleton->hello());
    }

    /**
     * @dataProvider discriminantDataProvider
     *
     * @param float $expectedD
     * @param float $a
     * @param float $b
     * @param float $c
     */
    public function testDiscriminant(float $expectedD, float $a, float $b, float $c): void
    {
        $this->assertEquals($expectedD, $this->skeleton->findDiscriminant($a, $b, $c));
    }

    /**
     * @return float[][]
     */
    public function discriminantDataProvider(): array
    {
        return [
            [-8, 1, 2, 3],
            [113, -2, 5, 11],
            [297, 8, -3, -9],
        ];
    }
}
