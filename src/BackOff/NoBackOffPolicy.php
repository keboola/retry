<?php

declare(strict_types=1);

namespace Keboola\Retry\BackOff;

/**
 * Implementation of {@link BackOffPolicyInterface} that performs a no-op and as such all
 * retry operation in a given set proceed one after the other with no pause.
 */
class NoBackOffPolicy extends StatelessBackOffPolicy
{
    protected function doBackOff(): void
    {
    }
}
