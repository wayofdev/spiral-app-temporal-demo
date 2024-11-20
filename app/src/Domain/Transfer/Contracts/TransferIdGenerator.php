<?php

declare(strict_types=1);

namespace Domain\Transfer\Contracts;

use Domain\Transfer\TransferId;

interface TransferIdGenerator
{
    public function nextId(): TransferId;
}
