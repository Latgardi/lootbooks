<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Litres\Parser\LitresParser;
use Litres\Quote\DayQuote;
use Litres\Quote\Type\Quote;

class MainController extends Controller
{
    public function __construct(
        public readonly LitresParser $litresParser,
        public readonly DayQuote $dayQuote
    ) {}

    public function index(Request $request)
    {
        $books = $this->top500();
        if ($request->ajax()) {
            return view('ajax.books-load')
                ->with(['books' => $books])
                ->render();
        }
        return view('main')
            ->with(['genres' => $this->litresParser->getCategories()])
            ->with(['topBook' => $this->topBook()])
            ->with(['books' => $books])
            ->with(['title' => env('APP_NAME')])
            ->with(['quote' => $this->dayQuote->getQuote()]);
    }
    public function top500(): LengthAwarePaginator
    {
        $offers = $this->litresParser->getOffers();
        $page = Paginator::resolveCurrentPage('page') ?: 1;

        $startIndex = ($page - 1) * 12;
        $total = 500;

        // Eliminate the non relevant items...
        $results = $offers->slice($startIndex)->take(12);

        $offers =  new LengthAwarePaginator($results, $total, 12, $page, [
            'path' => Paginator::resolveCurrentPath(),
            'pageName' => 'page',
        ]);
        return $offers;
    }

    public function topBook()
    {
        return $this->top500()->random();
    }
}
