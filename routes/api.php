<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \Litres\Parser\LitresParser;

Route::get('/loadBooks', function (Request $request) {
    $parser = new LitresParser(storage_path() . '/top500.xml');
    $parser->parse();
});//->middleware('auth:sanctum');


Route::get('/suggestions', [\App\Http\Controllers\SuggestionController::class, 'suggestions']);
