<?php

namespace App\Analytics;

use App\StoredEvents\Projector;
use Tempest\Database\Query;
use Tempest\EventBus\EventHandler;

final readonly class VisitsPerMonthProjector implements Projector
{
    public function clear(): void
    {
        $query = new Query(sprintf(
            "DELETE FROM %s",
            VisitsPerMonth::table(),
        ));

        $query->execute();
    }

    public function replay(object $event): void
    {
        if ($event instanceof PageVisited) {
            $this->onPageVisited($event);
        }
    }

    #[EventHandler]
    public function onPageVisited(PageVisited $pageVisited): void
    {
        $visitedAt = $pageVisited->visitedAt
            ->setTime(0, 0)
            ->setDate(
                year: $pageVisited->visitedAt->format('Y'),
                month: $pageVisited->visitedAt->format('m'),
                day: 1,
            );

        $day = VisitsPerMonth::query()
            ->whereField('date', $visitedAt->format('Y-m-d H:i:s'))
            ->first();

        if (! $day) {
            $day = new VisitsPerMonth(
                visits: 0,
                date: $visitedAt,
            );
        }

        $day->visits += 1;

        $day->save();
    }
}