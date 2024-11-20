<?php

declare(strict_types=1);

namespace Bridge\Spiral\Console;

use Application\Transfer\DTO\TransferDetails;
use Infrastructure\Temporal\Transfer\Workflows\TransferWebsiteWorkflowStub;
use Spiral\Console\Attribute\AsCommand;
use Spiral\Console\Command;
use Temporal\Client\WorkflowClientInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
#[AsCommand(name: 'website:transfer', description: 'Transfer website from source to destination')]
class TransferCommand extends Command
{
    public function __invoke(WorkflowClientInterface $workflow): int
    {
        $transferDetails = new TransferDetails(
            transferId: '10ab5df0-693a-4cd8-8ed5-1e702947d4d0',
            fromUserId: '10ab5df0-693a-4cd8-8ed5-1e702947d4d0',
            toUserId: '10ab5df0-693a-4cd8-8ed5-1e702947d4d0',
            fromDomain: 'https://wayof.dev',
            toDomain: 'https://your-dev.way'
        );

        TransferWebsiteWorkflowStub::handle($workflow, $transferDetails);

        return self::SUCCESS;
    }
}
