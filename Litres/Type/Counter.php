<?php

namespace Litres\Type;

class Counter
{
    public function __construct(
        public ?int $nextOffset,
        public int $allCount
    ) {}
}
