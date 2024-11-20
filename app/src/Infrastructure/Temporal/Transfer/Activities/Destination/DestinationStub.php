<?php

declare(strict_types=1);

namespace Infrastructure\Temporal\Transfer\Activities\Destination;

use Carbon\CarbonInterval;
use Temporal\Activity\ActivityOptions;
use Temporal\Common\RetryOptions;
use Temporal\Internal\Workflow\ActivityProxy;
use Temporal\Workflow;

final class DestinationStub
{
    public static function restoreDatabase(): ActivityProxy|RestoreDatabase
    {
        return Workflow::newActivityStub(
            RestoreDatabase::class,
            ActivityOptions::new()
                ->withStartToCloseTimeout(CarbonInterval::minute())
                ->withRetryOptions(
                    RetryOptions::new()->withMaximumAttempts(7),
                ),
        );
    }

    public static function restoreFiles(): ActivityProxy|RestoreFiles
    {
        return Workflow::newActivityStub(
            RestoreFiles::class,
            ActivityOptions::new()
                ->withStartToCloseTimeout(CarbonInterval::minute())
                ->withRetryOptions(
                    RetryOptions::new()->withMaximumAttempts(7),
                ),
        );
    }

    public static function allocateSpace(): ActivityProxy|AllocateSpace
    {
        return Workflow::newActivityStub(
            AllocateSpace::class,
            ActivityOptions::new()
                ->withStartToCloseTimeout(CarbonInterval::minute())
                ->withRetryOptions(
                    RetryOptions::new()->withMaximumAttempts(7),
                ),
        );
    }

    public static function attachDomain(): ActivityProxy|AttachDomain
    {
        return Workflow::newActivityStub(
            AttachDomain::class,
            ActivityOptions::new()
                ->withStartToCloseTimeout(CarbonInterval::minute())
                ->withRetryOptions(
                    RetryOptions::new()->withMaximumAttempts(7),
                ),
        );
    }

    public static function reConfigureWebsite(): ActivityProxy|ReConfigureWebsite
    {
        return Workflow::newActivityStub(
            ReConfigureWebsite::class,
            ActivityOptions::new()
                ->withStartToCloseTimeout(CarbonInterval::minute())
                ->withRetryOptions(
                    RetryOptions::new()->withMaximumAttempts(7),
                ),
        );
    }
}
