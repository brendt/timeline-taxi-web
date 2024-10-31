<?php

namespace App\Web;

use Tempest\Http\Get;
use Tempest\Http\Responses\Redirect;

final readonly class BuyController
{
    #[Get('/buy')]
    public function buy(): Redirect
    {
        return ($this)(BuyType::AMAZON->getUri());
    }

    #[Get('/buy/{buyType}')]
    public function __invoke(string $buyType): Redirect
    {
        $buyType = BuyType::from($buyType);

        return new Redirect($buyType->getUri());
    }
}