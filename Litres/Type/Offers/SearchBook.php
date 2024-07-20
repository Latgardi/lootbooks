<?php

namespace Litres\Type\Offers;

use Litres\Type\Enum\Language;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use Spatie\Url\Url;

class SearchBook
{
    public function __construct(
        public int $id,
        public UuidInterface $uuid,
        public Url $coverUrl,
        public string $title,
        public Url $litresUrl,
        public float $coverRatio,
        public ?Language $language,
        public string $author
    ) {}
}
