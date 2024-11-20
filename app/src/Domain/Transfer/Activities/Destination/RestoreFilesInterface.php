<?php

declare(strict_types=1);

namespace Domain\Transfer\Activities\Destination;

use Temporal\Activity\ActivityInterface;

#[ActivityInterface(prefix: 'website.transfer.destination.RestoreFiles.')]
interface RestoreFilesInterface
{
    public function handle(): string;
}
