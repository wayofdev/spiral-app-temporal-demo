<?php

declare(strict_types=1);

namespace Domain\Transfer\Exceptions;

use RuntimeException;

final class AttachDomainFailedException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct('Failed attach domain for transfer');
    }
}
