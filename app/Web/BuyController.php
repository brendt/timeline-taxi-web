<?php

namespace App\Web;

use Tempest\Http\Get;
use Tempest\Http\Responses\Redirect;

final readonly class BuyController
{
    #[Get('/buy')]
    public function __invoke(): Redirect
    {
        return new Redirect('https://www.amazon.com/dp/B0DK5YVTFP');
    }
}