<?php

namespace App\Lib\Requester;

use App\Lib\Enum\LitresEndpoint;
use App\Lib\Requester\Method\GetFreshBook;
use App\Lib\Requester\Method\GetGenres;
use Illuminate\Support\Facades\Http;
use Spatie\Url\Url;

final readonly class LitresRequester
{
    private const string GENRES_URL = 'https://partnersdnld.litres.ru/genres_list_2/';
    public Url $litresURL;

    public function __construct()
    {
        $this->litresURL = Url::fromString(url: config('litres.url'));
    }

    public function getFreshBook(): \SimpleXMLElement
    {
        $getFreshBook = new GetFreshBook(
            litresURL: $this->litresURL,
            checkpoint: new \DateTime('24.06.2024 10:00:00')
        );

        return $getFreshBook->handle();
    }

    public function getGenres()
    {
        $getGenres = new GetGenres(url: Url::fromString(url: self::GENRES_URL));
        return $getGenres->handle();
    }
}
