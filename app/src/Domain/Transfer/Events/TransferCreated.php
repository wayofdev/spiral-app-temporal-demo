<?php

declare(strict_types=1);

namespace Domain\Transfer\Events;

use Assert\AssertionFailedException;
use Domain\Auth\Signature;
use Domain\Transfer\TransferId;
use EventSauce\EventSourcing\Serialization\SerializablePayload;
use Exception;
use JsonSerializable;

final readonly class TransferCreated implements SerializablePayload, JsonSerializable
{
    /**
     * @phpstan-consistent-constructor
     */
    public function __construct(
        private TransferId $id,
        private string $name,
        private string $description,
        private Signature $signature,
    ) {
    }

    /**
     * @throws AssertionFailedException
     * @throws Exception
     */
    final public static function fromPayload(array $payload): static
    {
        return new self(
            id: TransferId::fromString($payload['id']),
            name: $payload['name'],
            description: $payload['description'],
            signature: Signature::fromArray($payload['signature'])
        );
    }

    public function toPayload(): array
    {
        return [
            'id' => $this->id->toString(),
            'name' => $this->name,
            'gender' => $this->description,
            'signature' => $this->signature->toArray(),
        ];
    }

    public function jsonSerialize(): array
    {
        return $this->toPayload();
    }
}
