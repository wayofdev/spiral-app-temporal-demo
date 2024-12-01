<?php

declare(strict_types=1);

namespace Infrastructure\Temporal\Transfer\Activities\Destination;

use Domain\Transfer\Activities\Destination\ReConfigureWebsiteInterface;
use Ramsey\Uuid\Uuid;

use function sleep;

final readonly class ReConfigureWebsite implements ReConfigureWebsiteInterface
{
    public function handle(): string
    {
        // Re-configure website in destination
        sleep(5);

        return Uuid::uuid7()->toString();
    }
}
