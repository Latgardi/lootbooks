<?php

namespace Litres\Type;

use Illuminate\Support\Collection;

readonly class SearchData
{
    public function __construct(
        public ?Collection $offers,
        public Counter $counter
    ) {}
}
