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
    public static function restoreDatabase(): ActivityProxy|RestoreDatabaseActivity
    {
        return Workflow::newActivityStub(
            RestoreDatabaseActivity::class,
            ActivityOptions::new()
                ->withStartToCloseTimeout(CarbonInterval::minute())
                ->withRetryOptions(
                    RetryOptions::new()->withMaximumAttempts(1),
                ),
        );
    }

    public static function restoreFiles(): ActivityProxy|RestoreFilesActivity
    {
        return Workflow::newActivityStub(
            RestoreFilesActivity::class,
            ActivityOptions::new()
                ->withStartToCloseTimeout(CarbonInterval::minute())
                ->withRetryOptions(
                    RetryOptions::new()->withMaximumAttempts(1),
                ),
        );
    }

    public static function allocateSpace(): ActivityProxy|AllocateSpaceActivity
    {
        return Workflow::newActivityStub(
            AllocateSpaceActivity::class,
            ActivityOptions::new()
                ->withStartToCloseTimeout(CarbonInterval::minute())
                ->withRetryOptions(
                    RetryOptions::new()->withMaximumAttempts(1),
                ),
        );
    }

    public static function attachDomain(): ActivityProxy|AttachDomainActivity
    {
        return Workflow::newActivityStub(
            AttachDomainActivity::class,
            ActivityOptions::new()
                ->withStartToCloseTimeout(CarbonInterval::minute())
                ->withRetryOptions(
                    RetryOptions::new()->withMaximumAttempts(1),
                ),
        );
    }

    public static function reConfigureWebsite(): ActivityProxy|ReConfigureWebsiteActivity
    {
        return Workflow::newActivityStub(
            ReConfigureWebsiteActivity::class,
            ActivityOptions::new()
                ->withStartToCloseTimeout(CarbonInterval::minute())
                ->withRetryOptions(
                    RetryOptions::new()->withMaximumAttempts(1),
                ),
        );
    }
}
