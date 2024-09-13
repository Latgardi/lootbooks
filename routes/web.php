<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
header('Access-Control-Allow-Origin: http://localhost:8000');
App\Lbc\LaravelBootstrapComponents::init();
Route::group(['middleware' => \App\Http\Middleware\CorsMiddleware::class], function () {
    Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('main');
    Route::get('/ajax-paginate', [MainController::class, 'ajax_paginate'])
        ->name('ajax.paginate');
    Route::get('/test', [\App\Http\Controllers\MainController::class, 'top500'])->name('test');

    Route::get('/genres', function () {
        return view('genres');
    });
    Route::get('/detail/{$id}', function () {
        return view('detail')
            ->with('title', env('APP_NAME'));
    });
    Route::get('/search', [\App\Http\Controllers\SearchController::class, 'search']);
    Route::post('/search', [\App\Http\Controllers\SearchController::class, 'proceedAjaxSearchRequest']);
    Route::get('/contacts', [\App\Http\Controllers\TextPageController::class, 'contacts'])->name('contacts');
    Route::get('/partners', [\App\Http\Controllers\TextPageController::class, 'partners'])->name('partners');
    Route::get('/faq', [\App\Http\Controllers\TextPageController::class, 'faq'])->name('faq');
    Route::get('/about', [\App\Http\Controllers\TextPageController::class, 'about'])->name('about');
    Route::get('/user-agreement', [\App\Http\Controllers\TextPageController::class, 'userAgreement'])->name('user-agreement');
});
