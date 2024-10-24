<?php

declare(strict_types=1);

namespace App\Web;

use Tempest\Http\Get;
use function Tempest\view;
use Tempest\View\View;

final readonly class HomeController
{
    #[Get('/')]
    public function __invoke(): View
    {
        return view(__DIR__ . '/home.view.php');
    }
}
