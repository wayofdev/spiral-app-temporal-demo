<?php

declare(strict_types=1);

namespace Infrastructure\Temporal\Transfer\Activities\Source;

use Domain\Transfer\Activities\Source\TransferBackupInterface;
use Ramsey\Uuid\Uuid;

use function sleep;

final readonly class TransferBackup implements TransferBackupInterface
{
    public function handle(): string
    {
        // Transfer files backup from source to destination
        // Transfer db backup from source to destination
        sleep(5);

        return Uuid::uuid7()->toString();
    }
}
