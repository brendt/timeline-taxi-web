<?php

namespace App\StoredEvents;

use DateTimeImmutable;
use Tempest\EventBus\EventBusMiddleware;
use Tempest\EventBus\EventBusMiddlewareCallable;

final readonly class StoredEventMiddleware implements EventBusMiddleware
{
    public function __invoke(object $event, EventBusMiddlewareCallable $next): void
    {
        if ($event instanceof ShouldBeStored) {
            (new StoredEvent(
                uuid: $event->getUuid(),
                eventClass: $event::class,
                payload: $event->serialize(),
                createdAt: new DateTimeImmutable(),
            ))->save();
        }

        $next($event);
    }
}