<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
header('Access-Control-Allow-Origin: http://localhost:8000');
App\Lbc\LaravelBootstrapComponents::init();

Route::get('/offer', [\App\Http\Controllers\TextPageController::class, 'publicOffer'])->name('offer');
Route::get('/contacts', [\App\Http\Controllers\TextPageController::class, 'contacts'])->name('contacts');
Route::get('/partners', [\App\Http\Controllers\TextPageController::class, 'partners'])->name('partners');
Route::get('/faq', [\App\Http\Controllers\TextPageController::class, 'faq'])->name('faq');
Route::get('/about', [\App\Http\Controllers\TextPageController::class, 'about'])->name('about');
Route::post('/admin/contacts/update', [\App\MoonShine\Controllers\ContactController::class, 'update'])->name('contacts.update');
Route::group(['middleware' => \App\Http\Middleware\CorsMiddleware::class], function () {
    Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('main');
    Route::get('/search', [\App\Http\Controllers\SearchController::class, 'search']);
    Route::post('/search', [\App\Http\Controllers\SearchController::class, 'proceedAjaxSearchRequest']);
});
