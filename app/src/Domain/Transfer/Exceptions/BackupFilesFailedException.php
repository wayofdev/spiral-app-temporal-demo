<?php

declare(strict_types=1);

namespace Domain\Transfer\Exceptions;

use RuntimeException;

final class BackupFilesFailedException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct('Failed to backup files on source server for transfer');
    }
}
