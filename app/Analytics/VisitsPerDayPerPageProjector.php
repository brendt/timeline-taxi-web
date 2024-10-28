<?php

namespace App\Analytics;

use App\StoredEvents\Projector;
use Tempest\Database\Query;
use Tempest\EventBus\EventHandler;

final readonly class VisitsPerDayPerPageProjector implements Projector
{
    public function clear(): void
    {
        $query = new Query(sprintf(
            "DELETE FROM %s",
            VisitsPerDayPerPage::table(),
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
        $visitedAt = $pageVisited->visitedAt->setTime(0, 0);

        $uri = parse_url($pageVisited->uri, PHP_URL_PATH);

        $day = VisitsPerDayPerPage::query()
            ->whereField('date', $visitedAt->format('Y-m-d H:i:s'))
            ->whereField('uri', $uri)
            ->first();

        if (! $day) {
            $day = new VisitsPerDayPerPage(
                visits: 0,
                uri: $uri,
                date: $visitedAt,
            );
        }

        $day->visits += 1;

        $day->save();
    }
}