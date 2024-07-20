<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Litres\Parser\LitresParser;
use Litres\Searcher\SearchParser;

class SuggestionController extends Controller
{
    public function __construct(
        public SearchParser $searchParser,
    ) {}
    public function suggestions(Request $request)
    {
        $query = $request->get('query');
        return response()->json($this->searchParser->suggestions($query)?->values());
    }
}
