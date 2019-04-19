<?php

namespace HJerichen\OneHundredCodeCoverage;

use PHPUnit\Framework\TestCase;

/**
 *
 * @author Heiko Jerichen <h.jerichen@nordwest.com>
 */
class SimpleIfStatementTest extends TestCase
{
    /**
     * @var SimpleIfStatement
     */
    private $simpleIfStatement;

    /**
     *
     */
    public function setUp(): void
    {
        $this->simpleIfStatement = new SimpleIfStatement();
    }

    /**
     * - a < 0
     */
    public function testCalculateSomethingWithLowerZero(): void
    {
        $actual = $this->simpleIfStatement->calculateSomething(-20);
        $this->assertEquals(100, $actual);
    }

    /**
     * - a > 0
     */
    public function testCalculateSomethingWithHigherZero(): void
    {
        $actual = $this->simpleIfStatement->calculateSomething(20);
        $this->assertEquals(40, $actual);
    }

    /**
     * - a = 0
     */
    public function testCalculateSomethingWithEqualZero(): void
    {
        $actual = $this->simpleIfStatement->calculateSomething(0);
        $this->assertEquals(20, $actual);
    }
}
