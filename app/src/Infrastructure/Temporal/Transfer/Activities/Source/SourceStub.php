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
    public static function backupFiles(): ActivityProxy|BackupFiles
    {
        return Workflow::newActivityStub(
            BackupFiles::class,
            ActivityOptions::new()
                ->withStartToCloseTimeout(CarbonInterval::minute())
                ->withRetryOptions(
                    RetryOptions::new()->withMaximumAttempts(7),
                ),
        );
    }

    public static function backupDatabase(): ActivityProxy|BackupDatabase
    {
        return Workflow::newActivityStub(
            BackupDatabase::class,
            ActivityOptions::new()
                ->withStartToCloseTimeout(CarbonInterval::minute())
                ->withRetryOptions(
                    RetryOptions::new()->withMaximumAttempts(7),
                ),
        );
    }

    public static function releaseDomain(): ActivityProxy|ReleaseDomain
    {
        return Workflow::newActivityStub(
            ReleaseDomain::class,
            ActivityOptions::new()
                ->withStartToCloseTimeout(CarbonInterval::minute())
                ->withRetryOptions(
                    RetryOptions::new()->withMaximumAttempts(7),
                ),
        );
    }

    public static function transferBackup(): ActivityProxy|TransferBackup
    {
        return Workflow::newActivityStub(
            TransferBackup::class,
            ActivityOptions::new()
                ->withStartToCloseTimeout(CarbonInterval::minute())
                ->withRetryOptions(
                    RetryOptions::new()->withMaximumAttempts(7),
                ),
        );
    }
}
