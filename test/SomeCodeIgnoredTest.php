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
class SomeCodeIgnoredTest extends TestCase
{
    /**
     * @var SomeCodeIgnored
     */
    private $someCodeIgnored;
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
        $this->someCodeIgnored = new SomeCodeIgnored($this->dateTime->reveal());
    }

    /**
     *
     * @throws Exception
     */
    public function testSetStatus(): void
    {
        $this->someCodeIgnored->addDays(2);

        $this->assertEquals(2, $this->someCodeIgnored->getAddedDays());
    }

    /**
     *
     * @throws Exception
     */
    public function testSetStatusMultipleTimes(): void
    {
        $this->someCodeIgnored->addDays(2);
        $this->someCodeIgnored->addDays(3);

        $this->assertEquals(3, $this->someCodeIgnored->getAddedDays());
    }

    /**
     *
     * @throws Exception
     */
    public function testSetStatusCallsDateTimeObject(): void
    {
        $this->dateTime->add(new DateInterval('P2D'))->shouldBeCalledOnce();

        $this->someCodeIgnored->addDays(2);
    }

    /**
     * @throws Exception
     */
    public function testSetStatusWithInvalidParameter(): void
    {
        $this->expectException(Exception::class);

        $this->someCodeIgnored->addDays(-1);
    }
}
