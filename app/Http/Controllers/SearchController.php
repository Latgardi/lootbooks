<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Litres\Parser\LitresParser;
use Litres\Searcher\SearchParser;

class SearchController extends Controller
{
    public function __construct(
        public SearchParser $searchParser,
    ) {}
    public function search(Request $request): View
    {
        $query = $request->get('query');
        $search = $this->searchParser
            ->search(query: $query);
        $books = $search?->offers;
        $counter = $search?->counter;
        return view('search')
            ->with(['books' => $books])
            ->with(['query' => $query])
            ->with(['title' => env('APP_NAME')])
            ->with(['counter' => $counter])
            ->with(['offset' => SearchParser::DEFAULT_LIMIT]);
    }

    public function proceedAjaxSearchRequest(Request $request): View
    {
        $query = $request->get('query');
        $offset = (int) $request->post('offset');
        $search = $this->searchParser
            ->search(query: $query, offset: $offset);

        $offset = $offset + SearchParser::DEFAULT_LIMIT;
        if ($search->counter->allCount - $offset <= 0) {
            $offset = null;
        } elseif ($search->counter->allCount - $offset < SearchParser::DEFAULT_LIMIT) {
            $offset = $search->counter->allCount - $offset;
        }
        $books = $search?->offers;
        return view('ajax.books-search-load')
            ->with(['books' => $books])
            ->with(['offset' => $offset])
            ->with(['query' => $query]);
    }
}
