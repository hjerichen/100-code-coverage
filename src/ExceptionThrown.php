<?php


namespace HJerichen\OneHundredCodeCoverage;


use DateInterval;

/**
 *
 * @author Heiko Jerichen <h.jerichen@nordwest.com>
 */
class ExceptionThrown
{
    /**
     * @param int $days
     * @return DateInterval
     * @throws \Exception
     */
    public function createIntervalForDays(int $days): DateInterval
    {
        return new DateInterval("P{$days}D");
    }
}