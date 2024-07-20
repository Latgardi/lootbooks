<?php

namespace Litres\Type\Offers;

use Illuminate\Support\Collection;
use Litres\Type\Enum\Currency;
use Litres\Type\Enum\Language;
use Spatie\Url\Url;

readonly class Offer
{
    public function __construct(
        public Url         $url,
        public Currency    $currency,
        public int         $categoryID,
        public Url         $picture,
        public float       $price,
        public string      $name,
        public string      $author,
        public int         $age,
        public Language    $language,
        public bool        $abonement,
        public ?array      $publisher = null,
        public ?int        $year = null,
        public ?Collection $description = null,
        public ?string     $ISBN = null,
        public bool        $downloadable = false,
        public ?string     $series = null,
        public ?int        $id = null
    ) {}
}
