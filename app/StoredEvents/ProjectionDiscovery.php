<?php

namespace App\StoredEvents;

use Tempest\Container\Container;
use Tempest\Core\Discovery;
use Tempest\Reflection\ClassReflector;

final readonly class ProjectionDiscovery implements Discovery
{
    public function __construct(
        private StoredEventConfig $config,
    ) {}

    public function discover(ClassReflector $class): void
    {
        if ($class->implements(Projector::class)) {
            $this->config->projectors[] = $class->getName();
        }
    }

    public function createCachePayload(): string
    {
        return serialize($this->config->projectors);
    }

    public function restoreCachePayload(Container $container, string $payload): void
    {
        $this->config->projectors = unserialize($payload);
    }
}