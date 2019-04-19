<?php

namespace HJerichen\OneHundredCodeCoverage;

use DateInterval;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 *
 * @author Heiko Jerichen <h.jerichen@nordwest.com>
 */
class ExceptionThrownTest extends TestCase
{
    /**
     * @var ExceptionThrown
     */
    private $exceptionThrown;

    /**
     *
     */
    public function setUp(): void
    {
        $this->exceptionThrown = new ExceptionThrown();
    }

    /**
     * @throws Exception
     */
    public function testCreateIntervalForDays(): void
    {
        $expected = new DateInterval('P2D');
        $actual = $this->exceptionThrown->createIntervalForDays(2);
        $this->assertEquals($expected, $actual);
    }
}
