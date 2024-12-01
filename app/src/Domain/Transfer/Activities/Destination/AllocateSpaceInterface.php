<?php

declare(strict_types=1);

namespace Domain\Transfer\Activities\Destination;

use Temporal\Activity\ActivityInterface;

#[ActivityInterface(prefix: 'website.transfer.destination.AllocateSpace.')]
interface AllocateSpaceInterface
{
    public function handle(): string;
}
