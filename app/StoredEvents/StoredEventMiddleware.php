<?php

namespace App\StoredEvents;

use DateTimeImmutable;
use Tempest\EventBus\EventBusMiddleware;

final readonly class StoredEventMiddleware implements EventBusMiddleware
{
    public function __invoke(object $event, callable $next): void
    {
        if ($event instanceof ShouldBeStored) {
            StoredEvent::updateOrCreate(
                ['uuid' => $event->getUuid()],
                [
                    'eventClass' => $event::class,
                    'payload' => $event->serialize(),
                    'createdAt' => new DateTimeImmutable(),
                ],
            );
        }

        $next($event);
    }
}