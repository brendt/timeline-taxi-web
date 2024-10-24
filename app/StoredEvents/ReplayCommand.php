<?php

namespace App\StoredEvents;

use Tempest\Console\Console;
use Tempest\Console\ConsoleCommand;
use Tempest\Console\HasConsole;
use Tempest\Console\Middleware\ForceMiddleware;
use Tempest\Container\Container;
use Tempest\Reflection\ClassReflector;
use TypeError;

final readonly class ReplayCommand
{
    use HasConsole;

    public function __construct(
        private StoredEventConfig $storedEventConfig,
        private Console $console,
        private Container $container,
    ) {}

    #[ConsoleCommand('events:replay', middleware: [ForceMiddleware::class])]
    public function __invoke(): void
    {
        // Throw away old state

        // Replace events to build new state

        $storedEvents = StoredEvent::query()
            ->orderBy('createdAt ASC')
            ->all();

        foreach ($this->storedEventConfig->projectors as $projectorClass) {

            if (! $this->confirm("Clearing {$projectorClass}, continue?")) {
                continue;
            }

            /** @var \App\StoredEvents\Projector $projector */
            $projector = $this->container->get($projectorClass);

            $projector->clear();

            $this->writeln(sprintf('Replaying <em>%s</em>', $projectorClass));

            $this->progressBar($storedEvents, function (StoredEvent $storedEvent) use ($projector) {
                $projector->replay($storedEvent->getEvent());
            });
        }

        $this->success('Done');
    }
}