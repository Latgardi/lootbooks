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
            ->with(['counter' => $counter]);
    }

    public function proceedAjaxSearchRequest(Request $request): View
    {
        $query = $request->get('query');
        $offset = $request->post('offset');
        $search = $this->searchParser
            ->search(query: $query, offset: $offset);
        $books = $search?->offers;
        return view('ajax.books-search-load')
            ->with(['books' => $books])
            ->with(['offset' => $search?->counter->nextOffset])
            ->with(['query' => $query]);
    }
}
