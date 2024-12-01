<?php

declare(strict_types=1);

namespace Infrastructure\Temporal\Transfer\Activities\Source;

use Domain\Transfer\Activities\Source\ReleaseDomainInterface;
use Ramsey\Uuid\Uuid;

use function sleep;

final readonly class ReleaseDomain implements ReleaseDomainInterface
{
    public function handle(): string
    {
        // Release domain on source website
        sleep(5);

        return Uuid::uuid7()->toString();
    }
}
