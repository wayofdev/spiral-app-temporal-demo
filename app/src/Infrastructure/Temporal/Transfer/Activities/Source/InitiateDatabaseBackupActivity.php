<?php

declare(strict_types=1);

namespace Infrastructure\Temporal\Transfer\Activities\Source;

use Ramsey\Uuid\Uuid;
use Temporal\Activity\ActivityInterface;

use function sleep;

#[ActivityInterface(prefix: 'website.transfer.source.initiateDatabaseBackup.')]
final readonly class InitiateDatabaseBackupActivity
{
    public function handle(): string
    {
        // Initiate database backup on source website
        sleep(5);

        return Uuid::uuid7()->toString();
    }
}
