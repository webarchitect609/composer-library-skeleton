<?php

namespace WebArch\Skeleton\Test;

use function PHPUnit\Framework\assertEquals;
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
    public function testHello()
    {
        assertEquals('Hello, World!', $this->skeleton->hello());
    }
}
