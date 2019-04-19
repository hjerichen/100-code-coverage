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
     *
     */
    public function testCalculate(): void
    {
        $this->assertEquals(10, $this->shorthandIfElse->calculate(10));
    }
}
