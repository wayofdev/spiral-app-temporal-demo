<?php

declare(strict_types=1);

namespace Domain\Transfer\Contracts;

use Application\Transfer\DTO\TransferDetails;
use Temporal\Workflow\WorkflowInterface;
use Temporal\Workflow\WorkflowMethod;

#[WorkflowInterface]
interface TransferWebsiteWorkflowInterface
{
    #[WorkflowMethod(name: 'website.transfer')]
    public function handle(TransferDetails $transferDetails);
}
