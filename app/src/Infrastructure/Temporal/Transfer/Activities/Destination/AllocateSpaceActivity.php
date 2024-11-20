<?php

declare(strict_types=1);

namespace Infrastructure\Temporal\Transfer\Activities\Destination;

use Ramsey\Uuid\Uuid;
use Temporal\Activity\ActivityInterface;

use function sleep;

#[ActivityInterface(prefix: 'website.transfer.destination.')]
final readonly class AllocateSpaceActivity
{
    public function handle(): string
    {
        // Simulate long-running Amazon Block Storage allocation
        sleep(5);

        return Uuid::uuid7()->toString();
    }
}
