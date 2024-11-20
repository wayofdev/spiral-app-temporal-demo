<?php

declare(strict_types=1);

namespace Infrastructure\Temporal\Transfer\Activities\Destination;

use Domain\Transfer\Activities\Destination\AttachDomainInterface;
use Domain\Transfer\Exceptions\AttachDomainFailedException;
use Faker\Factory as FakerFactory;
use Ramsey\Uuid\Uuid;

use function sleep;

final readonly class AttachDomain implements AttachDomainInterface
{
    public function handle(): string
    {
        $faker = FakerFactory::create();

        if ($faker->boolean(40)) {
            throw new AttachDomainFailedException();
        }

        // Attach domain in destination
        sleep(5);

        return Uuid::uuid7()->toString();
    }
}
