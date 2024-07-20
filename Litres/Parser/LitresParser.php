<?php
namespace Litres\Parser;

use Illuminate\Support\Collection;
use Laravie\Parser\Xml\Document;
use Laravie\Parser\Xml\Reader;
use Litres\Type\Enum\Currency;
use Litres\Type\Enum\Language;
use Litres\Type\Offers\Offer;
use Spatie\Url\Url;

final class LitresParser
{
    private array $data = [];
    public function __construct(string $XMLFileLocation)
    {
        $xml = (new Reader(new Document()))->load(filename: $XMLFileLocation);

        $data = json_encode($xml->getContent());
        $this->data = json_decode($data, true)['shop'];
//        dd($this->data);
    }

    public function getCategories(): Collection
    {
        $categories = new Collection();
        foreach ($this->data['categories']['category'] as $id => $category) {
            $categories->put(key: $id, value: $category );
        }
        return $categories;
    }
    public function getCurrencies(): Collection
    {
        $currencies = new Collection();
        if ($currenciesElement = $this->data['currencies']['currency']) {
            foreach ($currenciesElement as $currencyData) {
                $currency = Currency::tryFrom(
                    value: $currencyData['@attributes']['id']
                );

                $currencies->push($currency);
            }
        }
        return $currencies;
    }

    public function getOffers(): Collection
    {
        $data = $this->data['offers']['offer'];
        $offers = new Collection();
        foreach ($data as $offerData) {
            if (
                $offerData['@attributes']['type'] === 'audiobook'
                && 'available' !== 'true'
            ) {
                continue;
            }

            $offer = $this->createOffer(offerData: $offerData);
            $offers->push($offer);
        }
        return $offers;
    }

    public function createOffer(array $offerData): Offer
    {
        return new Offer(
            url: Url::fromString($offerData['url'] ?? ''),
            currency: Currency::tryFrom($offerData['currencyId']),
            categoryID: $offerData['categoryId'],
            picture: $this->getPictureURI(Url::fromString($offerData['picture'])),
            price: (float) $offerData['price'],
            name: $offerData['name'],
            author: $offerData['author'],
            age: (int)$offerData['age'],
            language: Language::tryFrom($offerData['lang']),
            abonement: $offerData['abonement'] === 'true',
            description: $this->getDescription(descriptionData: $offerData['description']),
            id: $offerData['@attributes']['id'] ?? null
        );
    }

    private function getDescription(string|array $descriptionData): ?Collection
    {
        $description = new Collection();
        if (is_string($descriptionData)) {
            $description->push(
                htmlentities($descriptionData)
            );
        }
//        else {
//            foreach ($descriptionData as $descriptionElement) {
//                $description->push(
//                    htmlentities($descriptionElement)
//                    );
//            }
//        }

        return $description->isEmpty() ? null : $description;
    }

    public function getPictureURI(Url $pictureURL): Url
    {
        $id = $pictureURL->getLastSegment();
        return Url::fromString("https://partnersdnld.litres.ru/pub/c/cover_330/$id");
    }




//    foreach ($b as $i => $book) {
//
//        \Illuminate\Support\Facades\Log::info($i);
//
//        try{
//        $book = json_encode($book);
//        $book = json_decode($book, true);
//        dd($book);
//
//        $newBook = new \App\Models\Book();
//        $newBook->uuid = $book['@attributes']['external_id'];
//        $newBook->annotation = $book['annotation'];
//        $newBook->name = $book['title-info'];
//        $newBook->publisher = new \App\Models\Publisher(
//            [
//                'publisher' => $book['publish-info']['publisher'],
//                'year' => $book['publish-info']['year'],
//            ],
//        );
//
//        $copyrights = new \Illuminate\Support\Collection();
//
//        foreach ($book['copyrights'] as $copyright) {
//            if (is_array($copyright)) {
//                $copyrights->push(new \App\Models\Copyright(
//                    [
//                        'id' => $copyright['@attributes']['id'],
//                        'title' => $copyright['@attributes']['title'],
//                        'percent' => $copyright['@attributes']['percent'],
//                    ]
//                )
//                );
//            }
//        }
//
//        $newBook->copyright = $copyrights;
//        $newBook->save();
//
//
//        } catch (\Error|\Exception $e) {
//            dump($e);
//            dump($book['copyrights']);
//            dump($book['@attributes']['external_id']);
//            dd($book);
//        }
//
//        //dd($newBook);
//    }

}
