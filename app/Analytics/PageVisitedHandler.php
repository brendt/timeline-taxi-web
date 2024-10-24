<?php

namespace App\Analytics;

use Tempest\EventBus\EventHandler;

final readonly class PageVisitedHandler
{
    #[EventHandler]
    public function __invoke(PageVisited $event): void
    {
    }
}