<?php

namespace App\Lib\Requester\Method;

use Laravie\Parser\Xml\Document;
use Laravie\Parser\Xml\Reader;
use Spatie\Url\Url;

final readonly class GetGenres
{
    public function __construct(
        public Url $url
    ) {}

    public function handle()
    {
        $xml = (new Reader(new Document()))->load($this->url);

        return $xml->getContent();
    }

}
