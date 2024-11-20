<?php

declare(strict_types=1);

namespace Infrastructure\Temporal\Transfer\Workflows;

use Application\Transfer\DTO\TransferDetails;
use Temporal\Client\WorkflowClientInterface;
use Temporal\Workflow\WorkflowRunInterface;

final class TransferWebsiteWorkflowStub
{
    public static function handle(
        WorkflowClientInterface $client,
        TransferDetails $transferDetails,
    ): WorkflowRunInterface {
        $workflow = $client->newWorkflowStub(
            TransferWebsiteWorkflow::class,
        );

        return $client->start($workflow, $transferDetails);
    }
}
