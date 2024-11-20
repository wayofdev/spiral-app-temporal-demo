<?php

declare(strict_types=1);

namespace Infrastructure\Temporal\Transfer\Activities\Source;

use Carbon\CarbonInterval;
use Temporal\Activity\ActivityOptions;
use Temporal\Common\RetryOptions;
use Temporal\Internal\Workflow\ActivityProxy;
use Temporal\Workflow;

final class SourceStub
{
    public static function initiateFilesBackup(): ActivityProxy|InitiateFilesBackupActivity
    {
        return Workflow::newActivityStub(
            InitiateFilesBackupActivity::class,
            ActivityOptions::new()
                ->withStartToCloseTimeout(CarbonInterval::minute())
                ->withRetryOptions(
                    RetryOptions::new()->withMaximumAttempts(1),
                ),
        );
    }

    public static function initiateDatabaseBackup(): ActivityProxy|InitiateDatabaseBackupActivity
    {
        return Workflow::newActivityStub(
            InitiateDatabaseBackupActivity::class,
            ActivityOptions::new()
                ->withStartToCloseTimeout(CarbonInterval::minute())
                ->withRetryOptions(
                    RetryOptions::new()->withMaximumAttempts(1),
                ),
        );
    }

    public static function releaseDomain(): ActivityProxy|ReleaseDomainActivity
    {
        return Workflow::newActivityStub(
            ReleaseDomainActivity::class,
            ActivityOptions::new()
                ->withStartToCloseTimeout(CarbonInterval::minute())
                ->withRetryOptions(
                    RetryOptions::new()->withMaximumAttempts(1),
                ),
        );
    }

    public static function transferBackup(): ActivityProxy|TransferBackupActivity
    {
        return Workflow::newActivityStub(
            TransferBackupActivity::class,
            ActivityOptions::new()
                ->withStartToCloseTimeout(CarbonInterval::minute())
                ->withRetryOptions(
                    RetryOptions::new()->withMaximumAttempts(1),
                ),
        );
    }
}
