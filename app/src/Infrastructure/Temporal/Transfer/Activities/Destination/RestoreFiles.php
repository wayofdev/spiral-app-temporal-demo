<?php

declare(strict_types=1);

namespace Infrastructure\Temporal\Transfer\Activities\Destination;

use Domain\Transfer\Activities\Destination\RestoreFilesInterface;
use Ramsey\Uuid\Uuid;

use function sleep;

final readonly class RestoreFiles implements RestoreFilesInterface
{
    public function handle(): string
    {
        // Restore files from backup on destination
        sleep(5);

        return Uuid::uuid7()->toString();
    }
}
