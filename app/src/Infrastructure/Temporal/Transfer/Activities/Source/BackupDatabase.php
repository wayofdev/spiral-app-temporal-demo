<?php

declare(strict_types=1);

namespace Infrastructure\Temporal\Transfer\Activities\Source;

use Domain\Transfer\Activities\Source\BackupDatabaseInterface;
use Domain\Transfer\Exceptions\AllocateSpaceFailedException;
use Faker\Factory as FakerFactory;
use Ramsey\Uuid\Uuid;

use function sleep;

final readonly class BackupDatabase implements BackupDatabaseInterface
{
    public function handle(): string
    {
        $faker = FakerFactory::create();

        if ($faker->boolean(40)) {
            throw new AllocateSpaceFailedException();
        }

        // Initiate database backup on source website
        sleep(5);

        return Uuid::uuid7()->toString();
    }
}
