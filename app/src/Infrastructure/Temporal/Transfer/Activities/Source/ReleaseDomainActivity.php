<?php

declare(strict_types=1);

namespace Infrastructure\Temporal\Transfer\Activities\Source;

use Ramsey\Uuid\Uuid;
use Temporal\Activity\ActivityInterface;

use function sleep;

#[ActivityInterface(prefix: 'website.transfer.source.releaseDomain.')]
final readonly class ReleaseDomainActivity
{
    public function handle(): string
    {
        // Release domain on source website
        sleep(5);

        return Uuid::uuid7()->toString();
    }
}
