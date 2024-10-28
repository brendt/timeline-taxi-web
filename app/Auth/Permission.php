<?php

namespace App\Auth;

use BackedEnum;
use Tempest\Database\DatabaseModel;
use Tempest\Database\IsDatabaseModel;
use UnitEnum;

final class Permission implements DatabaseModel
{
    use IsDatabaseModel;

    public function __construct(
        public string $name,
    ) {
    }

    public function matches(string|UnitEnum|Permission $match): bool
    {
        $match = match(true) {
            $match instanceof Permission => $match->name,
            is_string($match) => $match,
            $match instanceof BackedEnum => $match->value,
            $match instanceof UnitEnum => $match->name,
        };

        return $this->name === $match;
    }
}
