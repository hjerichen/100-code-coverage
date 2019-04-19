<?php


namespace HJerichen\OneHundredCodeCoverage;


use DateInterval;
use Exception;
use InvalidArgumentException;

/**
 *
 * @author Heiko Jerichen <h.jerichen@nordwest.com>
 */
class ExceptionThrown
{
    /**
     * @param int $days
     * @return DateInterval
     * @throws Exception
     */
    public function createIntervalForDays(int $days): DateInterval
    {
        try {
            return new DateInterval("P{$days}D");
        } catch (Exception $exception) {
            throw new InvalidArgumentException("Invalid integer \"{$days}\" for days parameter.");
        }
    }
}