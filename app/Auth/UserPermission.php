<?php

namespace App\Auth;

use Tempest\Database\DatabaseModel;
use Tempest\Database\IsDatabaseModel;

final class UserPermission implements DatabaseModel
{
    use IsDatabaseModel;

    public function __construct(
        public User $user,
        public Permission $permission,
    ) {
    }
}
