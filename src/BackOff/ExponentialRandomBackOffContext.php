<?php

declare(strict_types=1);

namespace Keboola\Retry\BackOff;

class ExponentialRandomBackOffContext extends ExponentialBackOffContext
{
    public function getIntervalAndIncrement(): int
    {
        $random     = mt_rand(0, mt_getrandmax()) / mt_getrandmax();
        $multiplier = $this->getMultiplier();

        $interval = parent::getIntervalAndIncrement();
        $interval = $interval * (1 + $random * ($multiplier - 1));

        return (int) $interval;
    }
}
