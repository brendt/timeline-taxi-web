<?php

namespace App\Analytics;

use App\StoredEvents\ShouldBeStored;
use DateTimeImmutable;
use Ramsey\Uuid\Uuid;

final readonly class PageVisited implements ShouldBeStored
{
    private string $uuid;

    public function __construct(
        public string $uri,
        public DateTimeImmutable $visitedAt = new DateTimeImmutable(),
    ) {
        $this->uuid = Uuid::uuid4()->toString();
    }

    public function serialize(): string
    {
        return json_encode([
            'uri' => $this->uri,
            'visitedAt' => $this->visitedAt->format('c'),
        ]);
    }

    public static function unserialize(string $payload): PageVisited
    {
        $data = json_decode($payload, true);

        return new self(
            uri: $data['uri'],
            visitedAt: new DateTimeImmutable($data['visitedAt']),
        );
    }

    public function getUuid(): string
    {
        return $this->uuid;
    }
}