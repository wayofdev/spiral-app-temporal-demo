<?php

declare(strict_types=1);

namespace Domain\Transfer\Exceptions;

use RuntimeException;

final class AllocateSpaceFailedException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct('Failed to allocate space for transfer');
    }
}
