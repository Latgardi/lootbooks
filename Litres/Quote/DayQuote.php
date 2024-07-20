<?php

namespace Litres\Quote;

use Illuminate\Support\Facades\Http;
use Litres\Quote\Type\Quote;
use Spatie\Url\Url;

class DayQuote
{
    private Url $url;
    private const string URL = 'http://api.forismatic.com/api/1.0/';
    public function __construct()
    {
        $initialURL = Url::fromString(self::URL);
        $url = $initialURL->withQueryParameters([
            'method' => 'getQuote',
            'format' => 'json',
            'lang' => 'ru',
            'key' => random_int(100000, 999999)
        ]);
        $this->url = $url;
    }
    public function getQuote(): Quote
    {
        $response = Http::post($this->url);
        $json = $response->json();
        return new Quote(
            text: $json['quoteText'],
            author: $json['quoteAuthor'],
        );
    }
}
