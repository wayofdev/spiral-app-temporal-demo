<?php

declare(strict_types=1);

namespace Infrastructure\Temporal\Transfer\Activities\Source;

use Ramsey\Uuid\Uuid;
use Temporal\Activity\ActivityInterface;

use function sleep;

#[ActivityInterface(prefix: 'website.transfer.source.initiateFilesBackup.')]
final readonly class InitiateFilesBackupActivity
{
    public function handle(): string
    {
        // Initiates the backup of files from the source website.
        sleep(5);

        return Uuid::uuid7()->toString();
    }
}
