<?php

declare(strict_types=1);

namespace App\Support;

use Tempest\Console\Console;
use Tempest\Console\ConsoleCommand;

final readonly class DeployCommand
{
    public function __construct(private Console $console)
    {
    }

    #[ConsoleCommand('deploy')]
    public function __invoke(): void
    {
        $this->console->info("Starting deploy");

        passthru("ssh forge@stitcher.io 'cd timeline-taxi.com && sh deploy.sh'");

        $this->console->info("Deploy success");
    }
}
