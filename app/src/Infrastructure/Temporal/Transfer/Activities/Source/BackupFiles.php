<?php

declare(strict_types=1);

namespace Infrastructure\Temporal\Transfer\Activities\Source;

use Domain\Transfer\Activities\Source\BackupFilesInterface;
use Domain\Transfer\Exceptions\BackupFilesFailedException;
use Faker\Factory as FakerFactory;
use Ramsey\Uuid\Uuid;

use function sleep;

final readonly class BackupFiles implements BackupFilesInterface
{
    public function handle(): string
    {
        $faker = FakerFactory::create();

        if ($faker->boolean(60)) {
            throw new BackupFilesFailedException();
        }

        // Initiates the backup of files from the source website.
        sleep(5);

        return Uuid::uuid7()->toString();
    }
}
