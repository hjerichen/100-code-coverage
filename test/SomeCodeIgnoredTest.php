<?php

namespace HJerichen\OneHundredCodeCoverage;

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
}
