<?php

namespace Litres\Type;

use Illuminate\Support\Collection;

final readonly class Top500
{
    public \DateTime $date;
    public Collection $categories;
}
