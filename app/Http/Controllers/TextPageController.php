<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Litres\Parser\LitresParser;
use Litres\Quote\DayQuote;

class TextPageController extends Controller
{
    public function contacts(Request $request): Factory|\Illuminate\Foundation\Application|View|Application
    {
        return view('contacts');
    }
    public function partners(Request $request): Factory|\Illuminate\Foundation\Application|View|Application
    {
        return view('partners');
    }

    public function faq(Request $request): Factory|\Illuminate\Foundation\Application|View|Application
    {
        return view('faq');
    }
    public function about(Request $request): Factory|\Illuminate\Foundation\Application|View|Application
    {
        return view('about');
    }
    public function userAgreement(Request $request): Factory|\Illuminate\Foundation\Application|View|Application
    {
        return view('user-agreement');
    }
}
