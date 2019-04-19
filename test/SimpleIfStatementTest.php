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
     *
     */
    public function testCalculateSomething(): void
    {
        $actual = $this->simpleIfStatement->calculateSomething(-20);
        $this->assertEquals(100, $actual);
    }
}
