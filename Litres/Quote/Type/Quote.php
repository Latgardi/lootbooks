<?php

namespace Litres\Quote\Type;

readonly class Quote
{
    public function __construct(
       public string $text,
       public string $author
    ) {}
}
