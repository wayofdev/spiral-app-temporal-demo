<?php

declare(strict_types=1);

namespace Infrastructure\Temporal\Transfer\Activities\Destination;

use Ramsey\Uuid\Uuid;
use Temporal\Activity\ActivityInterface;

use function sleep;

#[ActivityInterface(prefix: 'website.transfer.destination.')]
final readonly class RestoreDatabaseActivity
{
    public function handle(): string
    {
        // Restore database from backup on destination
        sleep(5);

        return Uuid::uuid7()->toString();
    }
}
