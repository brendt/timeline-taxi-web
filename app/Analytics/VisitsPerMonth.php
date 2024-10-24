<?php

namespace App\Analytics;

use DateTimeImmutable;
use Tempest\Database\DatabaseModel;
use Tempest\Database\IsDatabaseModel;

final class VisitsPerMonth implements DatabaseModel
{
    use IsDatabaseModel;

    public function __construct(
        public int $visits,
        public DateTimeImmutable $date = new DateTimeImmutable(),
    ) {}
}