<?php

declare(strict_types=1);

namespace Domain\Transfer;

use Cycle\Annotated\Annotation\Column;
use Cycle\Annotated\Annotation\Entity;
use Cycle\ORM\Entity\Behavior\Uuid\Uuid7;
use Domain\Auth\Contracts\AuditableEntity;
use Domain\Auth\HasSignatures;
use Domain\Auth\Signature;
use Domain\Shared\Events\Concerns\AggregatableRoot;
use Domain\Transfer\Contracts\TransferRepository;
use Domain\Transfer\Events\TransferCreated;
use EventSauce\EventSourcing\AggregateRoot;
use EventSauce\EventSourcing\AggregateRootId;

#[Entity(repository: TransferRepository::class)]
#[Uuid7(field: 'id', column: 'id')]
class Transfer implements AggregateRoot, AuditableEntity
{
    use AggregatableRoot;
    use HasSignatures;

    #[Column(type: 'uuid', primary: true, typecast: [TransferId::class, 'castValue'], unique: true)]
    private TransferId $id;

    #[Column(type: 'string')]
    private string $name;

    #[Column(type: 'string')]
    private string $description;

    public function __construct(
        TransferId $id,
        string $name,
        string $description,
        Signature $signature,
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;

        $this->created = $signature;
        $this->updated = clone $signature;
        $this->deleted = Signature::empty();

        $this->recordThat(
            new TransferCreated(
                id: $id,
                name: $name,
                description: $description,
                signature: $signature
            )
        );
    }

    public function aggregateRootId(): AggregateRootId
    {
        return $this->id;
    }

    public function id(): TransferId
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function description(): string
    {
        return $this->description;
    }
}
