<?php

namespace HJerichen\OneHundredCodeCoverage;

use PHPUnit\Framework\TestCase;

/**
 *
 * @author Heiko Jerichen <h.jerichen@nordwest.com>
 */
class ShorthandIfElseTest extends TestCase
{
    /**
     * @var ShorthandIfElse
     */
    private $shorthandIfElse;

    /**
     *
     */
    public function setUp(): void
    {
        $this->shorthandIfElse = new ShorthandIfElse();
    }

    /**
     * - a > 0
     */
    public function testCalculateHigherZero(): void
    {
        $this->assertEquals(10, $this->shorthandIfElse->calculate(10));
    }

    /**
     * - a < 0
     */
    public function testCalculateLowerZero(): void
    {
        $this->assertEquals(10, $this->shorthandIfElse->calculate(10));
    }

    /**
     * - a = 0
     */
    public function testCalculateEqualZero(): void
    {
        $this->assertEquals(0, $this->shorthandIfElse->calculate(0));
    }
}
