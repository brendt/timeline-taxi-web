<?php

namespace App\Auth;

use Tempest\Console\ConsoleCommand;
use Tempest\Console\HasConsole;
use Tempest\Support\ArrayHelper;
use function Tempest\Support\arr;

final readonly class CreateUserCommand
{
    use HasConsole;

    #[ConsoleCommand('user:create')]
    public function __invoke(): void
    {
        $permissions = $this->resolvePermissions();
        $username = $this->ask('Username');
        $password = $this->password(confirm: true);
        $email = $this->ask('Email');
        $permission = $permissions->first(
            fn (Permission $permission) => $permission->name === $this->ask('Permission', $permissions->map(fn (Permission $mappedPermission) => $mappedPermission->name)->toArray())
        );

        (new User($username, $email))
            ->setPassword($password)
            ->save()
            ->grantPermission($permission);

        $this->success('Done');
    }

    private function resolvePermissions(): ArrayHelper
    {
        $permissions = Permission::all();

        if ($permissions === []) {
            (new Permission('admin'))->save();
            (new Permission('user'))->save();
        }

        return arr(Permission::all());
    }
}