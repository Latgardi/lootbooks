<?php
namespace Litres\Searcher;

use http\Url;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Litres\Parser\LitresParser;
use Litres\Type\Counter;
use Litres\Type\Enum\Language;
use Litres\Type\Offers\SearchBook;
use Litres\Type\SearchData;
use Ramsey\Uuid\Uuid;

class SearchParser
{
    private const string SUGGESTION_URL = 'https://api.litres.ru/foundation/api/search/suggestions';
    public const string SEARCH_URL = 'https://api.litres.ru/foundation/api/search?is_for_pda=false&limit=24&o=popular&types=text_book&show_unavailable=false';

    public function __construct(
        public readonly LitresParser $litresParser,
    ) {}

    public static function getSearchUri(?string $query, ?int $offset = 0): ?\Spatie\Url\Url
    {
        $url = \Spatie\Url\Url::fromString(self::SEARCH_URL);
        $url = $url->withQueryParameter('q', $query);
        if ($offset > 0) {
            $url = $url->withQueryParameter('offset', $offset);
        }
        return $url;
    }

    public function suggestions(?string $query): ?Collection
    {
        if ($query === null) {
            return null;
        }
        $url = \Spatie\Url\Url::fromString(self::SUGGESTION_URL);
        $url = $url->withQueryParameter('q', $query);
        $response = Http::get($url);
        $json = $response->json();
        if ($json['error'] !== null) {
            dd($json['error']);
        }
        if (is_array($json['payload']['data'])) {
            $queries = new Collection();
            foreach ($json['payload']['data'] as $item) {
                foreach ($item as $suggestion) {
                    $queries->push($suggestion);
                }
            }
            return $queries->reverse();
        }
        return null;
    }



    public function search(?string $query, ?int $offset = 0): ?SearchData
    {
        if ($query === null) {
            return null;
        }

        $url = self::getSearchUri($query, $offset);
        $response = Http::get($url);
        $data = $response->json('payload.data');
        $extra = $response->json('payload.extra');
        $offers = $this->getOffers(data: $data);
        $counter = $this->getCounter(data: $extra);
        return new SearchData(
            offers: $offers,
            counter: $counter
        );
    }

    public function getCounter(array $data): Counter
    {
        return new Counter(
            nextOffset: $data['pagination']['next_offset'],
            allCount: $data['counters']['all']
        );
    }

    public function getOffers(array $data): ?Collection
    {
        $offers = new Collection();
        foreach ($data as $offerData) {
            if (
                $offerData['type'] !== 'text_book'
                || $offerData['instance']['available_from'] === null
            ) {
                continue;
            }

            $offer = $this->getSearchBook(data: $offerData['instance']);
            $offers->push($offer);
        }
        return $offers;
    }

    private function getSearchBook(array $data): SearchBook
    {
        return new SearchBook(
            id: $data['id'] ?? null,
            uuid: Uuid::fromString($data['uuid']),
            coverUrl: \Spatie\Url\Url::fromString($data['cover_url']),
            title: $data['title'],
            litresUrl: \Spatie\Url\Url::fromString($data['url']),
            coverRatio: $data['cover_ratio'],
            language: Language::tryFrom(value: $data['language_code']) ?? null,
            author: $this->getAuthors(data: $data['persons']),
        );
    }

    private function getAuthors(array $data): string
    {
        $authors = [];
        foreach ($data as $authorData) {
            if ($authorData['role'] === 'author') {
                $authors[] = $authorData['full_name'];
            }
        }
        return implode(', ', $authors);
    }

}
