<?php

declare(strict_types=1);

namespace Infrastructure\Temporal\Transfer\Workflows;

use Application\Transfer\DTO\TransferDetails;
use Domain\Transfer\Workflows\TransferWebsiteWorkflowInterface;
use Generator;
use Infrastructure\Temporal\Transfer\Activities\Destination\DestinationStub;
use Infrastructure\Temporal\Transfer\Activities\Source\SourceStub;
use Throwable;

final class TransferWebsiteWorkflow implements TransferWebsiteWorkflowInterface
{
    private array $actions = [];

    public function __construct()
    {
        $this->actions[] = SourceStub::backupFiles();
        $this->actions[] = SourceStub::releaseDomain();
        $this->actions[] = SourceStub::backupDatabase();
        $this->actions[] = SourceStub::transferBackup();
        $this->actions[] = DestinationStub::allocateSpace();
        $this->actions[] = DestinationStub::restoreDatabase();
        $this->actions[] = DestinationStub::restoreFiles();
        $this->actions[] = DestinationStub::attachDomain();
    }

    /**
     * @throws Throwable
     */
    public function handle(TransferDetails $transferDetails): Generator
    {
        foreach ($this->actions as $action) {
            try {
                yield $action->handle($transferDetails); // Execute each activity sequentially
            } catch (Throwable $e) {
                // Handle or log the error
                // todo: Log error
                // throw $e;

                return;
            }
        }
    }
}
