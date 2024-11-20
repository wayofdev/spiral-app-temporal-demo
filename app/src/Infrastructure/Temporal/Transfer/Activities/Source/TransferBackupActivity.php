<?php

declare(strict_types=1);

namespace Infrastructure\Temporal\Transfer\Activities\Source;

use Ramsey\Uuid\Uuid;
use Temporal\Activity\ActivityInterface;

use function sleep;

#[ActivityInterface(prefix: 'website.transfer.source.')]
final readonly class TransferBackupActivity
{
    public function handle(): string
    {
        // Transfer files backup from source to destination
        // Transfer db backup from source to destination
        sleep(5);

        return Uuid::uuid7()->toString();
    }
}
