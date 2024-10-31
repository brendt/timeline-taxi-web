<?php

namespace App\Web;

enum BuyType: string
{
    case KINDLE = 'kindle';
    case AMAZON = 'amazon';
    case APPLE = 'apple';
    case GOOGLE = 'google';
    case KOBO = 'kobo';

    public function getUri(): string
    {
        return match ($this) {
            self::KINDLE => 'https://www.amazon.com/Timeline-Taxi-Brent-Roose-ebook/dp/B0DK5YVTFP?_encoding=UTF8&qid=&sr=',
            self::AMAZON => 'https://www.amazon.com/Timeline-Taxi-Brent-Roose/dp/B0DL4MTGSV?_encoding=UTF8&qid=&sr=',
            self::APPLE => 'https://books.apple.com/us/book/timeline-taxi/id6737520432',
            self::GOOGLE => '#',
            self::KOBO => 'https://www.kobo.com/be/en/ebook/timeline-taxi',
        };
    }
}