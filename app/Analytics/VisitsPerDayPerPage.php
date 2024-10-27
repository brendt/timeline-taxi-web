<?php

namespace App\Analytics;

use DateTimeImmutable;
use Tempest\Database\DatabaseModel;
use Tempest\Database\IsDatabaseModel;

final class VisitsPerDayPerPage implements DatabaseModel
{
    use IsDatabaseModel;

    public function __construct(
        public int $visits,
        public string $uri,
        public DateTimeImmutable $date = new DateTimeImmutable(),
    ) {}
}