<?php

declare(strict_types=1);

namespace Infrastructure\Temporal\Transfer\Activities\Destination;

use Ramsey\Uuid\Uuid;
use Temporal\Activity\ActivityInterface;

use function sleep;

#[ActivityInterface(prefix: 'website.transfer.destination.')]
final readonly class ReConfigureWebsiteActivity
{
    public function handle(): string
    {
        // Re-configure website in destination
        sleep(5);

        return Uuid::uuid7()->toString();
    }
}
