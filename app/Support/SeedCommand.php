<?php

namespace App\Support;

use App\Analytics\PageVisited;
use App\Web\HomeController;
use DateTimeImmutable;
use Tempest\Console\ConsoleCommand;
use Tempest\Console\HasConsole;
use function Tempest\event;
use function Tempest\uri;

final readonly class SeedCommand
{
    use HasConsole;

    #[ConsoleCommand('seed')]
    public function __invoke(): void
    {
        foreach(range(1, 100) as $i) {
            $offset = rand(0, 60);

            event(new PageVisited(
                uri: uri(HomeController::class),
                visitedAt: (new DateTimeImmutable())->modify("-{$offset} days"),
            ));
        }

        $this->success("Seeding done");
    }
}