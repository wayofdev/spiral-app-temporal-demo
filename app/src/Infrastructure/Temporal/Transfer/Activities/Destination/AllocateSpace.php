<?php

declare(strict_types=1);

namespace Infrastructure\Temporal\Transfer\Activities\Destination;

use Domain\Transfer\Activities\Destination\AllocateSpaceInterface;
use Domain\Transfer\Exceptions\AllocateSpaceFailedException;
use Faker\Factory as FakerFactory;
use Ramsey\Uuid\Uuid;

use function sleep;

final readonly class AllocateSpace implements AllocateSpaceInterface
{
    public function handle(): string
    {
        $faker = FakerFactory::create();

        if ($faker->boolean(40)) {
            throw new AllocateSpaceFailedException();
        }

        // Simulate long-running Amazon Block Storage allocation
        sleep(5);

        return Uuid::uuid7()->toString();
    }
}
