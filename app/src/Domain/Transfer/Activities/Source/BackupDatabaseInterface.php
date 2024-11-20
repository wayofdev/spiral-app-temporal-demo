<?php

declare(strict_types=1);

namespace Domain\Transfer\Activities\Source;

use Temporal\Activity\ActivityInterface;

#[ActivityInterface(prefix: 'website.transfer.source.backupDatabase.')]
interface BackupDatabaseInterface
{
    public function handle(): string;
}
