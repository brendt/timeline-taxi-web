<?php

namespace App\Analytics;

use Tempest\Core\KernelEvent;
use Tempest\EventBus\EventHandler;
use Tempest\Http\HttpMiddleware;
use Tempest\Http\Request;
use Tempest\Http\Response;
use Tempest\Http\Router;
use function Tempest\event;

final readonly class PageVisitedMiddleware implements HttpMiddleware
{
    public function __construct(
        private Router $router,
    ) {}

    #[EventHandler(KernelEvent::BOOTED)]
    public function register(): void
    {
        $this->router->addMiddleware(self::class);
    }

    public function __invoke(Request $request, callable $next): Response
    {
//        event(new PageVisited($request->getUri()));

        return $next($request);
    }
}