<?php

declare(strict_types=1);

namespace Infrastructure\Temporal\Transfer\Activities\Destination;

use Domain\Transfer\Activities\Destination\RestoreDatabaseInterface;
use Ramsey\Uuid\Uuid;

use function sleep;

final readonly class RestoreDatabase implements RestoreDatabaseInterface
{
    public function handle(): string
    {
        // Restore database from backup on destination
        sleep(5);

        return Uuid::uuid7()->toString();
    }
}
