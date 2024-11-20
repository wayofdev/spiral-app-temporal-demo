<?php

declare(strict_types=1);

namespace Application\Transfer\DTO;

use OpenApi\Attributes as OAT;

class TransferDetails
{
    #[OAT\Property(format: 'string', example: '10ab5df0-693a-4cd8-8ed5-1e702947d4d0')]
    public string $transferId;

    #[OAT\Property(format: 'string', example: '10ab5df0-693a-4cd8-8ed5-1e702947d4d0')]
    public string $fromUserId;

    #[OAT\Property(format: 'string', example: '10ab5df0-693a-4cd8-8ed5-1e702947d4d0')]
    public string $toUserId;

    #[OAT\Property(format: 'string', example: 'https://wayof.dev')]
    public string $fromDomain;

    #[OAT\Property(format: 'string', example: 'https://your-dev.way')]
    public string $toDomain;

    public function __construct(
        string $transferId,
        string $fromUserId,
        string $toUserId,
        string $fromDomain,
        string $toDomain,
    ) {
        $this->transferId = $transferId;
        $this->fromUserId = $fromUserId;
        $this->toUserId = $toUserId;
        $this->fromDomain = $fromDomain;
        $this->toDomain = $toDomain;
    }
}
