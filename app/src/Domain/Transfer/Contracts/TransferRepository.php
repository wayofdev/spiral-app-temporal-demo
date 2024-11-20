<?php

declare(strict_types=1);

namespace Domain\Transfer\Contracts;

use Cycle\ORM\RepositoryInterface;

interface TransferRepository extends RepositoryInterface
{
    public function findById(string $id): ?object;
}
