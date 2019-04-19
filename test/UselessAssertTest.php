<?php

namespace HJerichen\OneHundredCodeCoverage;

use PHPUnit\Framework\TestCase;

/**
 *
 * @author Heiko Jerichen <h.jerichen@nordwest.com>
 */
class UselessAssertTest extends TestCase
{
    /**
     * @var UselessAssert
     */
    private $uselessAssert;

    /**
     *
     */
    public function setUp(): void
    {
        $this->uselessAssert = new UselessAssert();
    }

    /**
     *
     */
    public function testAdd(): void
    {
        $result = $this->uselessAssert->add(2, 5);
        $this->assertEquals(7, $result);
    }
}
