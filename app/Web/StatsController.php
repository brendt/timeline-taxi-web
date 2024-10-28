<?php

namespace App\Web;

use App\Analytics\VisitsPerDayPerPage;
use Tempest\Http\Get;
use Tempest\View\View;

final readonly class StatsController
{
    #[Get('/stats')]
    public function __invoke(): View
    {
        $visitPerDayPerPage = VisitsPerDayPerPage::query()
            ->orderBy('date DESC')
            ->limit(30)
            ->all();

        return \Tempest\view(__DIR__ . '/stats.view.php', visitsPerDayPerPage: $visitPerDayPerPage);
    }
}