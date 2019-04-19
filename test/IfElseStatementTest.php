<?php

namespace HJerichen\OneHundredCodeCoverage;

use DateInterval;
use DateTime;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 *
 * @author Heiko Jerichen <h.jerichen@nordwest.com>
 */
class IfElseStatementTest extends TestCase
{
    /**
     * @var IfElseStatement
     */
    private $ifElseStatement;
    /**
     * @var DateTime
     */
    private $dateTime;

    /**
     *
     */
    public function setUp(): void
    {
        $this->dateTime = $this->prophesize(DateTime::class);

        $this->ifElseStatement = new IfElseStatement($this->dateTime->reveal());
    }

    /**
     * - a > 0
     * - b < 0
     * @throws Exception
     */
    public function testExecuteWithAHigherZero(): void
    {
        $expected = new DateInterval('P2D');
        $this->dateTime->add($expected)->shouldBeCalledOnce();

        $this->ifElseStatement->execute(4, -2);
    }

    /**
     * - a < 0
     * - b < 0
     * @throws Exception
     */
    public function testExecuteWithALowerZero(): void
    {
        $expected = new DateInterval('P1D');
        $this->dateTime->add($expected)->shouldBeCalledOnce();

        $this->ifElseStatement->execute(-4, -2);
    }
}
