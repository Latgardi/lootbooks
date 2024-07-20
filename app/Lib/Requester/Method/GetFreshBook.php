<?php

namespace App\Lib\Requester\Method;

use App\Lib\Enum\BookType;
use App\Lib\Enum\LitresEndpoint;
use DateTime;
use Illuminate\Support\Facades\Http;
use Spatie\Url\Url;
use Symfony\Component\Uid\Uuid;
use Laravie\Parser\Xml\Reader;
use Laravie\Parser\Xml\Document;
final readonly class GetFreshBook
{
    private const string DATE_FORMAT = 'Y-m-d H:i:s';
    private string $litresSecretKey;
    private string $litresPartnerID;
    private Url $url;
    public function __construct(
        private Url $litresURL,
        private DateTime $checkpoint,
        private ?BookType $bookType = null,
        private ?Uuid $bookUUID = null,
        private ?DateTime $endpoint = null
    )
    {
        $this->litresPartnerID = config('litres.partner_id');
        $this->litresSecretKey = config('litres.secret_key');
        $this->url = $this->constructURL();
    }

    public function handle(): \SimpleXMLElement
    {
       $xml = (new Reader(new Document()))->load($this->url);
       return $xml->getContent();
    }

    protected function constructURL(): Url
    {
        $timestamp = (string) time();
        $url = $this->litresURL
            ->withPath(path: LitresEndpoint::GetFreshBook->value);

        $url = $url->withQueryParameters([
            'checkpoint' => $this->checkpoint->format(format: self::DATE_FORMAT),
            'place' => config('litres.partner_id'),
            'timestamp' => $timestamp,
            'sha' => hash(
                algo: 'sha256',
                data: "$timestamp:$this->litresSecretKey:{$this->checkpoint->format(format: self::DATE_FORMAT)}"
            )
        ]);

        if ($this->bookType !== null) {
            $url = $url->withQueryParameter(
                'type',
                $this->bookType->value
            );
        }

        if ($this->bookUUID !== null) {
            $url = $url->withQueryParameter(
                'uuid',
                $this->bookUUID->toString()
            );
        }

        if ($this->endpoint !== null) {
            $url = $url->withQueryParameter(
                'endpoint',
                $this->endpoint->format(format: self::DATE_FORMAT)
            );
        }
        return $url;
    }
}
