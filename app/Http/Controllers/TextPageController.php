<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Faq;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Str;
use Litres\Parser\LitresParser;
use Litres\Quote\DayQuote;

class TextPageController extends Controller
{
    public function contacts(Request $request): Factory|\Illuminate\Foundation\Application|View|Application
    {
        $contacts = Contact::first();
        $contacts->text = Str::markdown($contacts->text);
        $contacts->text = str_replace('<p>', '<p class="lead p-2">', $contacts->text);
        return view('contacts')->with('contacts', $contacts);
    }
    public function partners(Request $request): Factory|\Illuminate\Foundation\Application|View|Application
    {
        return view('partners');
    }

    public function faq(Request $request): Factory|\Illuminate\Foundation\Application|View|Application
    {
        $faqs = Faq::all();
        $faqs->each(function (Faq $faq) {
            $faq->answer = str_replace(
                search: '<ul>',
                replace: '<ul class="bullet-list faq-list">',
                subject: Str::markdown($faq->answer)
            );
        });
        return view('faq')->with('faqs', $faqs);
    }
    public function about(Request $request): Factory|\Illuminate\Foundation\Application|View|Application
    {
        return view('about');
    }
    public function publicOffer(Request $request): Factory|\Illuminate\Foundation\Application|View|Application
    {
        return view('public-offer');
    }
}
